<?php

use App\Http\Controllers\Client\TrainingsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\EmployeeController;
use App\Http\Controllers\Client\TeamController;

Route::controller(TrainingsController::class)
    ->prefix('v1/app')
    ->middleware(['set.user_id', 'jwt.auth'])
    ->group(function(){
        Route::post('/training/register', 'store');
        Route::get('/training/get-all', 'index');
        Route::get('/training/{item}/get-item', 'show');
        Route::put('/training/{id}/edit-item', 'update');
        Route::delete('/training/{id}/delete-item', 'destroy');
});

Route::controller(EmployeeController::class)
    ->prefix('v1/app')
    ->middleware(['set.user_id', 'jwt.auth'])
    ->group(function(){
        Route::get('/employees/get-team', 'index');
        Route::get('/employees/{item}/get-team-item', 'show');
        Route::post('/employees/register-employee', 'store');
        Route::put('/employees/{id}/edit-employee', 'update');
        Route::delete('/employees/{id}/delete-employee', 'destroy');
});

Route::controller(TeamController::class)
    ->prefix('v1/app')
    ->middleware(['set.user_id', 'jwt.auth'])
    ->group(function(){
        Route::get('/team/get-teams-formed', 'index');
        Route::get('/team/get-team/{item}-formed', 'show');
        Route::post('/team/register-team', 'store');
        Route::put('/team/{id}/team-update', 'update');
        Route::delete('/team/destroy-team/{id}', 'destroy');
});

