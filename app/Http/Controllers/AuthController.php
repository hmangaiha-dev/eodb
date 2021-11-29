<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function staffLogin(Request $request)
    {
        $this->validate($request->only(['email', 'password']), [
            'email' => 'required|email',
            'password' => 'required:confirmed'
        ]);
        $authenticated = Auth::guard('staff')->attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ]);
        if (!$authenticated)
            throw new \Exception('Invalid credential', 402);

        $staff = Auth::guard('staff')->user();
        $abilities = Permission::extractPermissions(staff: $staff);
        $token = $staff->createToken('personal_token', $abilities)->plainTextToken;
        return response()->json([
            'currentUser' => $staff,
            'token' => $token,
            'message' => 'Login success'
        ], 200);
    }

    public function investorLogin(Request $request)
    {
        // return 'it works';
        Validator::validate($request->only(['email', 'password']), [
            'email' => 'required|email',
            'password' => 'required:confirmed'
        ]);
        $authenticated = Auth::attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ]);
        if (!$authenticated) {
            throw new \Exception('Invalid credential', 402);
        }
        $user = Auth::user();

        $personalToken = $user->createToken('personal_token')->plainTextToken;
        return response()->json([
            'currentUser' => $user,
            'token' => $personalToken,
            'message' => 'Login success'
        ], 200);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return response()->json([
            'currentUser' => null,
            'message' => 'Logout successfully'
        ], 200);
    }
}
