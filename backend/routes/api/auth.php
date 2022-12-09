<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)
    ->prefix('v1/auth')
    ->middleware('cors')
    ->group(function (){
       Route::post('/login', 'login');
});