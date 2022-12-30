<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        return $this->request = $request;
    }

    public function login()
    {
        $access = auth('api')->attempt($this->request->only('email', 'password'));
        auth()->attempt($this->request->only('email', 'password'));
        
        if($access)
            return response()->json(['success' => 'logged with successful', '_token' => $access, 'user_id' => Auth::user()->id]);
        return response()->json([ 'error' => 'user does not exists' ]);
    }

    public function logout(Request $request)
    {
        auth('api')->logout();
        DB::table('sessions')
            ->whereUserId($request->header('user_id'))
            ->delete();
        return response()->json(['success' => 'logged out with successfully']);
    }

    

}
