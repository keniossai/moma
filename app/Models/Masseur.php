<?php

namespace App\Models;

use App\Models\Traits\HasSlugAttribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Masseur extends Model
{
    use HasFactory, HasSlugAttribute;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function galleries() : HasMany
    {
        return $this->hasMany(Gallery::class);
    }

}
