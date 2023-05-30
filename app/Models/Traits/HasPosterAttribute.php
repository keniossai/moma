<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Casts\Attribute;

trait HasPosterAttribute
{
    use  HasMediaAttribute;

    public function poster(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value ? cloudinary_url($value, ["height" => 350, "width" => 450, "crop" => "fill"]) : null,
            set: fn ($value) => $this->setMediaAttribute($value, 'cloudinary.folders.posters')
        )->withoutObjectCaching();
    }
}
