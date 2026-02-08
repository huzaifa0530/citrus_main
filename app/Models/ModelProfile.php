<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelProfile extends Model
{
    use HasFactory;

    protected $table = 'models'; // keep if you used 'models' earlier

    protected $casts = [
        'languages' => 'array',
        'dob' => 'date',
        'passport_expiry' => 'date',
        'cnic_expiry' => 'date',
        'signed_date' => 'date',
    ];

    protected $fillable = [
        // ... your existing fillable fields (no file columns here if switching to assets)
        'name',
        'dob',
        'age',
        'gender',
        'occupation',
        'mobile_no',
        'address',
        'email',
        'facebook_id',
        'instagram_id',
        'snapchat_id',
        'tiktok_id',
        'youtube_id',
        'passport_no',
        'passport_expiry',
        'nationality',
        'country_of_passport',
        'cnic',
        'cnic_expiry',
        'backup_contact_name',
        'backup_number',
        'languages',
        'other_languages',
        'special_talent',
        'measurements',
        
        'status',
        'isVerified',
        'availability',
  
    ];

    // Relationship
    public function assets()
    {
        return $this->hasMany(Asset::class, 'model_id');
    }

    // get a single named asset (close_up_image, full_body_image, signature, video, ...)
    public function asset(string $name): ?Asset
    {
        return $this->assets()->where('name', $name)->first();
    }

    // get url for named asset or $default if missing
    public function assetUrl(string $name, $default = null): ?string
    {
        $a = $this->asset($name);
        return $a ? $a->url : $default;
    }
}
