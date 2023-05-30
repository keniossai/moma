<?php

namespace App\Models\Scopes;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

trait UserScope
{
    public function scopeAdmin(Builder $builder)
    {
        $builder->whereType(User::ADMIN);
    }

    public function scopeTherapist(Builder $builder)
    {
        $builder->whereType(User::MASSEUR);
    }

    public function scopeClient(Builder $builder)
    {
        $builder->whereType(User::CLIENT);
    }

    public function scopeWhereNotTherapist(Builder $builder)
    {
        $builder->where('type', '!=', User::MASSEUR);
    }
}
