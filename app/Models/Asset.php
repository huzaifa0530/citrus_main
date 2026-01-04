<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asset extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'model_id',
        'name',
        'path',
        'url',
        'type',
        'mime_type',
        'size',
        'disk',
        'original_name',
        'width',
        'height',
    ];

    /**
     * The owning ModelProfile
     */
    public function modelProfile()
    {
        return $this->belongsTo(ModelProfile::class, 'model_id');
    }

    // helpers
    public function isImage(): bool
    {
        return $this->type === 'image';
    }

    public function isVideo(): bool
    {
        return $this->type === 'video';
    }
}
