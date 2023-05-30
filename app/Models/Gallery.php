<?php

namespace App\Models;

use App\Models\Traits\HasMediaAttribute;
use CloudinaryLabs\CloudinaryLaravel\MediaAlly;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use HasFactory, SoftDeletes, MediaAlly, HasMediaAttribute;

    protected $guarded = ['id'];


    /**
     * @return Attribute
     */
    public function photo(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => (cloudinary_url($value)
            ),

            set: fn ($value) => $this->setMediaAttribute($value, config('cloudinary.folders.galleries'))
        )->withoutObjectCaching();
    }
}
