<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;



class VerificationController extends Controller
{
    public function __construct(UserRepository $repository)
    { 
        $this->repository = $repository;
    }

    public function verify(Request $request, int $user_id)
    {
        if (!$request->hasValidSignature()) {
            
            return dd('Unauthorized');
        
        }

        $user = $this->repository->findById($user_id);

        if (!$user->hasVerifiedEmail()) {
            
            $user->markEmailAsVerified();

        }

        return redirect('/dashboard');
    }

    public function resend()
    {

        if (!auth()->user()->hasVerifiedEmail()) {
            return "Email Already Verified";
        }

        auth()->user()->sendEmailVerification();

        return $this->respondWithMessage("Email verification link sent to your email ");
                
    }
}
