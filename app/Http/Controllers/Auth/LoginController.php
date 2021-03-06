<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function __construct(UserRepository $repository)
    { 
        $this->repository = $repository;
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'status_code' => 500,
                'message' => 'Unauthorized'
            ]);
        }

        $user = auth()->user();
        
        if ( ! Hash::check($request->password, $user->password, [])) {

           throw new \Exception('Error in Login');
        }

        if (!$user->hasVerifiedEmail()) {
            
            return response()->json([
                'status_code' => 500,
                'message' => 'User must verify his/her email'
            ]);

        }
        
        return response([
            'success' => true,
        ], 200);
    }

    public function showLogin()
    { }
}
