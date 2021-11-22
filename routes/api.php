<?php

use App\Http\Controllers\ApplicationProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InvestorController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\PostingController;
use App\Http\Controllers\ProcessFlowController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicDataController;
use App\Http\Controllers\ResourceDataController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StaffAuthController;
use App\Http\Controllers\StaffController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix' => 'profile', 'middleware' => 'auth:sanctum'], function () {
    Route::get('', [ProfileController::class, 'show']);
    Route::put('', [ProfileController::class, 'update']);
});

Route::group(['prefix' => 'auth'], function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('staff-login', [StaffAuthController::class, 'login']);
    Route::post('logout', [StaffAuthController::class, 'logout'])->middleware('auth:sanctum');
});

Route::group(['prefix' => 'profile', 'middleware' => 'auth:sanctum'], function () {
    Route::get('', [ProfileController::class, 'show']);
    Route::put('', [ProfileController::class, 'update']);
});

Route::get('public-data',[PublicDataController::class,'fetchPublicData']);
Route::get('staff-data',[PublicDataController::class,'fetchStaffData']);

Route::group(['prefix' => 'roles', 'middleware' => ['auth:sanctum','staff']], function () {
    Route::get('', [RoleController::class, 'index']);
    Route::post('', [RoleController::class, 'store']);
    Route::get('{id}', [RoleController::class, 'show']);
    Route::put('{role}', [RoleController::class, 'update']);
    Route::delete('{role}', [RoleController::class, 'destroy']);
});

Route::group(['prefix' => 'office', 'middleware' => ['auth:sanctum','staff']], function () {
    Route::get('', [OfficeController::class, 'index']);
    Route::post('', [OfficeController::class, 'store']);
    Route::get('{id}', [OfficeController::class, 'show']);
    Route::put('{office}', [OfficeController::class, 'update']);
    Route::delete('{office}', [OfficeController::class, 'destroy']);
});
Route::group(['prefix' => 'staff', 'middleware' => ['auth:sanctum','staff']], function () {
    Route::get('index', [StaffController::class, 'index']);
    Route::post('/', [StaffController::class, 'store']);
    Route::get('{staff}', [StaffController::class, 'show']);
    Route::put('{staff}', [StaffController::class, 'update']);
    Route::delete('{staff}', [StaffController::class, 'destroy']);
});
Route::group(['prefix' => 'posting', 'middleware' => ['auth:sanctum','staff']], function () {
    Route::get('index', [PostingController::class, 'index']);
    Route::post('', [PostingController::class, 'postStaff']);
    Route::put('{post}', [PostingController::class, 'update']);
});
Route::group(['prefix' => 'resources', 'middleware' => ['auth:sanctum','staff']], function () {
    Route::get('{type}/index', [ResourceDataController::class, 'index']);
    Route::post('store', [ResourceDataController::class, 'store']);
    Route::put('{id}', [ResourceDataController::class, 'update']);
    Route::get('{id}', [ResourceDataController::class, 'show']);
    Route::delete('{id}/destroy', [ResourceDataController::class, 'destroy']);
});

Route::group(['prefix' => 'process-flows', 'middleware' => ['auth:sanctum','staff']], function () {
    Route::get('index', [ProcessFlowController::class, 'index']);
    Route::post('store', [ProcessFlowController::class, 'store']);
    Route::delete('{id}/destroy', [ProcessFlowController::class, 'destroy']);
});


Route::group(['prefix' => 'application-profiles'],function(){
    Route::get('index', [ApplicationProfileController::class, 'index']);
});

Route::group(['prefix' => 'investor'],function(){
    Route::post('/', [InvestorController::class, 'register']);
    Route::get('/', [InvestorController::class, 'register']);
});

base_path('routes/rj/index.php');

