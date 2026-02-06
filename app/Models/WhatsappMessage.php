<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhatsappMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'model_profile_id',
        'mobile_no',
        'message',
        'status',
    ];

    public function modelProfile()
    {
        return $this->belongsTo(ModelProfile::class);
    }
}
