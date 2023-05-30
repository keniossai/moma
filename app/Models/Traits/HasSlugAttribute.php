<?php

namespace App\Models\Traits;

use App\Models\Masseur;
use Illuminate\Database\Eloquent\Model;

trait HasSlugAttribute
{
    public static function bootHasSlugAttribute()
    {
        static::creating(function (Model $model) {
            $model->slug ??= str($model->name)->slug()
                ->when($model instanceof Masseur)->append(uniqid('-'));
        });
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}

