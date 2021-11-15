<?php

use App\Http\Controllers\ApplicationFormController;
use Illuminate\Support\Facades\Route;


Route::prefix('/investor')->group(function () {
    Route::post('/store',[ApplicationFormController::class,'store']);
});
