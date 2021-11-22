<?php

namespace App\Http\Controllers;

use App\Models\ApplicationProfile;
use Illuminate\Http\Request;

class ApplicationProfileController extends Controller
{
    public function index(Request $request)
    {
        return response()->json([
            'list' => ApplicationProfile::query()->paginate(),
        ]);
    }
}
