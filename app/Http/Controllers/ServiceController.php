<?php

namespace App\Http\Controllers;

use App\Models\ApplicationProfile;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(ApplicationProfile::query()->get());
    }
}
