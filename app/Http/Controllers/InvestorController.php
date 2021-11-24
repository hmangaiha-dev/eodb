<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use App\Models\User;
use Illuminate\Http\Request;

class InvestorController extends Controller
{
    public function register(Request $request)
    {
        // return $request->all();
        $data = $request->only((new Investor())->getFillable());
        $request->validate(User::RULES);
        $investor = User::query()
            ->create($data);
        return response()->json([
            'data' => $investor,
            'message' => 'Registration success'
        ]);
    }
}
