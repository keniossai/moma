<?php

namespace App\Models\Traits;

use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Hash;

trait InteractsWithUserAttributes
{
    use HasMediaAttribute;

    /**
     * Mutator for the password attribute
     */
    public function password(): Attribute
    {
        return Attribute::set(fn ($value) => Hash::make($value));
    }

    public function name(): Attribute
    {
        return Attribute::get(fn () => $this->first_name . ' ' . $this->last_name);
    }

    public function typeString(): Attribute
    {
        return Attribute::get(fn () => __("user.type.$this->type"));
    }

    public function genderStr(): Attribute
    {
        return Attribute::get(fn () => __("user.gender.$this->gender"));
    }

    public function avatar(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                return $value ? cloudinary_url($value, config('cloudinary.transformations.photos')):
                    asset('admin/images/avatar.png');
            },
            set: fn ($value) => $this->setMediaAttribute($value, 'cloudinary.folders.photos')
        )->withoutObjectCaching();
    }

    public function isAdmin(): bool
    {
        return $this->type == User::ADMIN;
    }

    public function isClient(): bool
    {
        return $this->type == User::CLIENT;
    }

    public function isMasseur(): bool
    {
        return $this->type == User::MASSEUR;
    }

    public function isFemale(): bool
    {
        return $this->gender == User::FEMALE;
    }

    public function isMale(): bool
    {
        return $this->gender == User::MALE;
    }
}
