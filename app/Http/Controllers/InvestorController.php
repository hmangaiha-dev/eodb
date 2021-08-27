<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use Illuminate\Http\Request;

class InvestorController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->only((new Investor())->getFillable());
        $request->validate(Investor::RULES);
        $investor = Investor::query()
            ->create($data);
        return response()->json([
            'data' => $investor,
            'message' => 'Registration success'
        ]);
    }
}
