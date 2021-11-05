<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\InvestorController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\PostingController;
use App\Http\Controllers\PublicDataController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StaffController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('public-data',[PublicDataController::class,'fetchPublicData']);
Route::group(['prefix' => 'role'],function(){
    Route::get('', [RoleController::class, 'index']);
    Route::post('', [RoleController::class, 'create']);
    Route::get('{role}', [RoleController::class, 'show']);
    Route::put('{role}', [RoleController::class, 'update']);
    Route::delete('{role}', [RoleController::class, 'destroy']);
});
Route::group(['prefix' => 'office'],function(){
    Route::get('', [OfficeController::class, 'index']);
    Route::post('', [OfficeController::class, 'create']);
    Route::get('{office}', [OfficeController::class, 'show']);
    Route::put('{office}', [OfficeController::class, 'update']);
    Route::delete('{office}', [OfficeController::class, 'destroy']);
    Route::get('{office}/roles', [OfficeController::class, 'officeRoles']);

});
Route::group(['prefix' => 'staff'],function(){
    Route::get('', [StaffController::class, 'index']);
    Route::post('', [StaffController::class, 'create']);
    Route::get('{staff}', [StaffController::class, 'show']);
    Route::put('{staff}', [StaffController::class, 'update']);
    Route::delete('{staff}', [StaffController::class, 'destroy']);
    Route::post('post', [StaffController::class, 'staffPosting']);
});

Route::group(['prefix' => 'postings'],function(){
    Route::get('', [PostingController::class, 'index']);
    Route::get('{staff}/posts', [PostingController::class, 'staffPostings']);
});

Route::group(['prefix' => 'auth'],function(){
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
});
Route::group(['prefix' => 'investor'],function(){
    Route::post('/', [InvestorController::class, 'register']);
    Route::get('/', [InvestorController::class, 'register']);
});

Route::name('rj')->group(base_path('routes/rj/index.php'));
