<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationMovementHistory extends Controller
{
    public function movements(Request $request,Application $model)
    {
        return response()->json($model->movements()->oldest()->get(), 200);
    }
}
