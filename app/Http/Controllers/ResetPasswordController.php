<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use DB;
use Hash;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Mail;
use Password;
use Str;

class ResetPasswordController extends Controller
{
    public function sendResetLink(Request $request)
    {

        
        $status = Password::sendResetLink(
            $request->only('email')
        );
     
        return $status === Password::RESET_LINK_SENT
                    ? response()->json([
                        'status' => 'Reset password link sent'
                    ],200)
                    : response()->json([
                        'status' => $status == 'passwords.user' ? 'User could not be found' : $status
                    ],500);
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
     
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
     
                $user->save();
     
                event(new PasswordReset($user));
            }
        );
                    return $status === Password::PASSWORD_RESET
                    ? response()->json([
                        'message' => $status
                    ],200)
                    : response()->json([
                        'message' => $status == 'passwords.user' ? 'User not found!' : 'Invalid Token'
                    ],500);
    }
}
