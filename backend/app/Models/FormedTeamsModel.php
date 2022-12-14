<?php

namespace App\Models;

use App\Models\Traits\UserTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormedTeamsModel extends Model
{
    use HasFactory, UserTrait;

    protected $table = 'formed_teams';

    protected $fillable = [
        'user_id',
        'training_name',
        'instructor',
        'category',
        'realization',
        'valid_until',
        'attendance_list',
        'certificates',
    ];

}