<?php

use App\Http\Controllers\ApplicationFormController;
use App\Http\Controllers\CommonApplicationController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\InvestorController;
use App\Http\Controllers\InvestorProfileController;
use App\Models\Application;
use App\Models\DepartmentService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::group(['prefix' => 'investor/profile', 'middleware' => 'auth:sanctum'], function () {
    Route::get('', [InvestorProfileController::class, 'show']);
    Route::put('', [InvestorProfileController::class, 'update']);
});
Route::group(['prefix' => 'auth'], function () {
    Route::post('/register', [InvestorController::class, 'register']);
});


Route::group(['prefix' => 'auth/investor'], function () {
    Route::post('logout', [InvestorController::class, 'logout'])->middleware('auth:sanctum');
});


Route::prefix('/investor')->group(function () {
    Route::post('/store', [ApplicationFormController::class, 'store']);
});


Route::group(['prefix' => 'department'], function () {
    Route::get('services', [DepartmentController::class, 'show']);
    Route::get('{slug}', [DepartmentController::class, 'showDepartment']);
});

Route::get('attach', function () {
    // return 3;
    return Application::with('attachments')->get();
});

Route::group(['prefix' => 'investor/applications', 'middleware' => 'auth:sanctum'], function () {
    Route::get('', [InvestorController::class, 'getApplications']);
    Route::get('{application}', [InvestorController::class, 'detail'])->where('application', '[0-9]+');
});




Route::group(['prefix' => 'investor/caf', 'middleware' => 'auth:sanctum'], function () {
    Route::post('store', [InvestorController::class, 'store']);
    Route::get('{application}', [InvestorController::class, 'detail'])->where('application', '[0-9]+');
});


Route::group(['prefix' => 'investor/common-applications', 'middleware' => 'auth:sanctum'], function () {
    Route::get('', [CommonApplicationController::class, 'getCommonApplication']);
    // Route::get('{application}', [InvestorController::class, 'detail'])->where('application', '[0-9]+');
});


// Route::get('/service', function () {
//     $dept = DepartmentService::with(['category','department'])->get();
//     return $dept;
// });
