<?php

namespace App\Models\Traits;

use Illuminate\Support\Arr;

trait HasMetaAttribute
{
    /**
     * @return void
     */
    public function initializeHasMetaAttribute()
    {
        $this->casts['meta'] = 'object';
    }

    /**
     * @param $value
     * @return void
     */
    public function setMetaAttribute($value)
    {
        collect(Arr::dot(['meta' => $value]))->each(function ($value, $key) {
            $this->setAttribute(str_replace('.', '->', $key), $value);
        });
    }
}
