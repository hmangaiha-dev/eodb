<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestorProfileController extends Controller
{
    public function show(Request $request)
    {
       
        return response()->json([
            'data' => \auth('sanctum')->user(),
        ], 200);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'full_name' => 'required',
            'phone' => 'required',
            'email' =>'required'
        ]);
        $user = \auth('sanctum')->user();
        $user->full_name = $request->get('full_name');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');
        if ($request->has('password')) {
            if ($request->get('password') !== $request->get('password_confirmation')) {
                throw new \Exception('Password must match', 500);
            } else {
                $user->password = \Illuminate\Support\Facades\Hash::make($request->get('password'));
            }
        }
        $user->save();
        return response()->json([
            'message' => 'Profile updated successfully'
        ], 200);
    }
}
