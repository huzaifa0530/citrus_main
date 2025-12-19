<?php

namespace App\Services;

use Google\Client;
use Google\Service\Drive;
use Google\Service\Drive\DriveFile;

class GoogleDriveService
{
    protected Drive $drive;
    protected string $folderId;

    public function __construct()
    {
        $client = new Client();
        $client->setAuthConfig(storage_path('app/google/service-account.json'));
        $client->addScope(Drive::DRIVE);
        $client->setAccessType('offline');

        $this->drive = new Drive($client);

        // 🔥 Portal Assets folder ID
        $this->folderId = config('services.google.portal_assets_folder_id');
    }

    public function upload($file): string
    {
        $fileMetadata = new DriveFile([
            'name' => uniqid() . '_' . $file->getClientOriginalName(),
            'parents' => [$this->folderId],
        ]);

        $content = file_get_contents($file->getRealPath());

        $uploadedFile = $this->drive->files->create(
            $fileMetadata,
            [
                'data' => $content,
                'mimeType' => $file->getClientMimeType(),
                'uploadType' => 'multipart',
                'fields' => 'id',
            ]
        );

        // Make file public
        $this->drive->permissions->create(
            $uploadedFile->id,
            new \Google\Service\Drive\Permission([
                'type' => 'anyone',
                'role' => 'reader',
            ])
        );

        return "https://drive.google.com/uc?id={$uploadedFile->id}";
    }
}
