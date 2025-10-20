<?php
// app/Services/GoogleDriveService.php
namespace App\Services;

use Google\Client;
use Google\Service\Drive;
use Google\Service\Drive\DriveFile;
use Google\Service\Drive\Permission;

class GoogleDriveService
{
    private function getClient(): Client
    {
        $client = new Client();
        $client->setAuthConfig(storage_path('app/google/client_secret.json'));
        $client->addScope(Drive::DRIVE_FILE);
        $client->setAccessType('offline');
        $client->setPrompt('select_account consent');
        return $client;
    }

    public function uploadToDrive($uploadedFile, $token)
    {
        $client = $this->getClient();
        $client->setAccessToken($token);

        // Refresh token if expired
        if ($client->isAccessTokenExpired() && $client->getRefreshToken()) {
            $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
            session(['google_token' => $client->getAccessToken()]);
        }

        $service = new Drive($client);

        // Create file metadata
        $fileMetadata = new DriveFile([
            'name' => $uploadedFile->getClientOriginalName(),
        ]);

        // Upload the file
        $file = $service->files->create($fileMetadata, [
            'data' => file_get_contents($uploadedFile->getRealPath()),
            'mimeType' => $uploadedFile->getMimeType(),
            'uploadType' => 'multipart',
        ]);

        // Make public
        $permission = new Permission([
            'type' => 'anyone',
            'role' => 'reader',
        ]);
        $service->permissions->create($file->id, $permission);

        return "https://drive.google.com/file/d/{$file->id}/view?usp=sharing";
    }
}
