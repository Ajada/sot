<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        return $this->request = $request;
    }

    public function login()
    {
        if(Auth::attempt($this->request->only('email', 'password'))){
            session(['user_id' => auth()->user()->id]);
            return response()->json([
                'success' => 'logged with successful'
            ]);
        }
        return response()->json([
            'error' => 'user does not exists'
        ]);
    }
}
