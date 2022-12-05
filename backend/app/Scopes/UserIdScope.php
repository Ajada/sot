<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class UserIdScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        if(session()->has('user_id'))
            $builder->where('user_id', session()->get('user_id'));
    }
}
