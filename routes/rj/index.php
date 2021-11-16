<?php

use App\Http\Controllers\ApplicationFormController;
use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;


Route::prefix('/investor')->group(function () {
    Route::post('/store',[ApplicationFormController::class,'store']);
});


Route::get('/department/{slug}',[DepartmentController::class,'showDepartment']);
