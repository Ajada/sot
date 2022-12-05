<?php 

namespace App\Models\Traits;

use App\Models\User;
use App\Scopes\UserIdScope;

trait UserTrait 
{
    protected static function bootUserTrait()
    {
        static::addGlobalScope(new UserIdScope);

        if(session()->has('user_id')){
            static::creating(function ($model){
                $model->user_id = session()->get('user_id');
            });
        }
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
 