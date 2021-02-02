<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return response([
                'success' => true,
            ], 200);
        }

        return response([
            'message' => 'The provided credentials do not match our records.',
        ], 500);
    }
}
