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
    public function resetPassword(Request $request)
    {

        $request->validate(['email' => 'required|email|exists:users']);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send(['text' => 'mail'], ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return response()->json([
            'message' => 'We have e-mailed your password reset link!'
        ]);

        // return back()->with('message', 'We have e-mailed your password reset link!');
    }

    public function postResetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required',
        ]);
        // return $request->all();


        $updatePassword = DB::table('password_resets')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])
            ->first();

        // return $updatePassword;

        if (!$updatePassword) {
            return response()->json([
                'message' => 'Invalid token or email not exist'
            ],401);
        }

        $user = User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email' => $request->email])->delete();

        return response()->json([
            'message' => 'Your password has been changed!'
        ]);

        // return redirect('/login')->with('message', 'Your password has been changed!');
    }
}
