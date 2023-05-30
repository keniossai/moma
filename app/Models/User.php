<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Scopes\UserScope;
use App\Models\Traits\HasMetaAttribute;
use App\Models\Traits\HasSlugAttribute;
use App\Models\Traits\InteractsWithUserAttributes;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens,
        HasFactory,
        Notifiable,
        InteractsWithUserAttributes,
        HasMetaAttribute,
        UserScope;

    /**
     * User Types
     */
    const ADMIN     = 'admin';
    const MASSEUR   = 'masseur';
    const CLIENT    = 'client';

    /**
     * Gender
     */
    const MALE   = 'M';
    const FEMALE = 'F';

    /**
     * Location
     */
    const ABUJA   = 'Abuja';
    const LAGOS = 'Lagos';
    const PH = 'Port Harcourt';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id','login_count', 'email_verified_at'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function masseur() : HasOne
    {
        return  $this->hasOne(Masseur::class);
    }

    public function galleries() : HasMany
    {
        return $this->hasMany(Gallery::class);
    }

    /**
     * @return Attribute
     */
    public function token(): Attribute
    {
        return Attribute::get(fn () => $this->createToken(request()->device_name ?? 'Personal')->plainTextToken);
    }
}
