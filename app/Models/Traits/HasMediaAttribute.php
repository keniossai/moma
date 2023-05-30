<?php

namespace App\Models\Traits;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

trait HasMediaAttribute
{
    /**
     * Upload the given file to cloudinary in the given folder and return the public id.
     */
    public function setMediaAttribute($value, string $folder): mixed
    {
        if (str($value)->startsWith(['/', 'http'])) {
            return Cloudinary::upload((string) $value, ['folder' => config($folder)])->getFileName();
        }

        return $value;
    }
}
