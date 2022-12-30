<?php

namespace App\Models;

use App\Models\Traits\UserTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeesModel extends Model
{
    use HasFactory, UserTrait;

    protected $table = 'employees';

    protected $fillable = [
        'user_id',
        'name',
        'cpf',
        'function',
        'photo',
        'observation',
    ];   

    protected $hidden = [
        'user_id',
    ];

}