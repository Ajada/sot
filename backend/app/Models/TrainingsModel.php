<?php

namespace App\Models;

use App\Models\Traits\UserTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingsModel extends Model
{
    use HasFactory, UserTrait;

    protected $table = 'trainings';

    protected $fillable = [
        'user_id',
        'training_name',
        'type',
        'category',
        'workload',
        'periodicity',
    ];

}