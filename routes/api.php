<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActRuleController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ApplicationMovementHistory;
use App\Http\Controllers\ApplicationProfileController;
use App\Http\Controllers\AttachmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DeskController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\InvestorController;
use App\Http\Controllers\NotesheetController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\PostingController;
use App\Http\Controllers\ProcessFlowController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicDataController;
use App\Http\Controllers\ResourceDataController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceController;
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
    Route::post('login', [AuthController::class, 'login']);
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
    Route::get('applications/ongoing', [OfficeController::class, 'onGoingApplications']);
    Route::get('applications/archived', [OfficeController::class, 'archivedApplications']);
    Route::get('users/{office}', [OfficeController::class, 'officeUsers']);
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

Route::group(['prefix' => 'application-profiles','middleware' => ['auth:sanctum','staff']],function(){
    // Route::get('', [ApplicationProfileController::class, 'index']);
    Route::get('index', [ApplicationProfileController::class, 'index']);
    Route::get('flows', [ApplicationProfileController::class, 'applicationFlows']);
    Route::put('{model}/toggle', [ApplicationProfileController::class, 'toggle']);
    Route::delete('process-flows/{model}', [ApplicationProfileController::class, 'destroyFlow']);
    Route::delete('{model}', [ApplicationProfileController::class, 'deleteApplicationProfile']);

    Route::post('{model}/print-template', [ApplicationProfileController::class, 'createPrintTemplate']);
    Route::get('{model}/print-template', [ApplicationProfileController::class, 'detail']);
});

Route::group(['prefix' => 'applications','middleware'=>['auth:sanctum']], function () {
//    Route::post('submit', [ApplicationController::class, 'submitApplication']);
    Route::get('me', [DeskController::class, 'myApplication']);
    Route::get('{model}', [ApplicationController::class, 'detail']);

    Route::post('{model}/states', [ApplicationController::class, 'createState']);
    Route::get('{model}/states', [ApplicationController::class, 'getStates']);

    Route::post('{model}/forward', [ApplicationController::class, 'forward']);
    Route::post('{model}/backward', [ApplicationController::class, 'backward']);

    Route::get('{model}/notes', [NotesheetController::class, 'notes']);
    Route::get('{model}/notes/{id}', [NotesheetController::class, 'detail']);
    Route::put('{model}/notes/{id}', [NotesheetController::class, 'update']);
    Route::post('{model}/notes/create', [NotesheetController::class, 'create']);
    Route::delete('{model}/notes/{id}', [NotesheetController::class, 'destroy']);


    Route::get('{model}/movements', [ApplicationMovementHistory::class, 'movements']);
    Route::post('{model}/certificate', [ApplicationController::class, 'createCertificate']);
    Route::delete('{model}/{id}/certificate', [ApplicationController::class, 'deleteCertificate']);
    Route::get('{model}/certificates', [ApplicationController::class, 'getCertificates']);

    Route::post('{model}/close', [ApplicationController::class, 'close']);
    Route::get('{model}/print', [ApplicationController::class, 'getPrint']);
    Route::get('{model}/attachments', [ApplicationController::class, 'getAttachment']);

});

Route::group(['prefix' => 'web'], function () {
    Route::get('{code}/about', [AboutController::class, 'departmentAbout']);
    Route::get('{code}/act-rule', [ActRuleController::class, 'departmentAct']);

});
Route::group(['prefix' => 'web', 'middleware' => ['auth:sanctum','staff']], function () {
    Route::get('online-services', [ServiceController::class, 'getServices']);
    Route::get('online-services/{model}', [ServiceController::class, 'detail']);
    Route::delete('online-services/{model}', [ServiceController::class, 'destroy']);
    Route::post('{model}/online-service', [ServiceController::class, 'create']);
    Route::put('{model}/online-service', [ServiceController::class, 'update']);

    Route::get('about', [AboutController::class, 'about']);
    Route::put('about', [AboutController::class, 'updateAbout']);

    Route::get('act-rule', [ActRuleController::class, 'index']);
    Route::post('act-rule', [ActRuleController::class, 'store']);
    Route::get('act-rule/{model}/download', [ActRuleController::class, 'download']);
    Route::get('act-rule/{model}', [ActRuleController::class, 'detail']);
    Route::put('act-rule/{model}', [ActRuleController::class, 'update']);
    Route::delete('act-rule/{model}', [ActRuleController::class, 'destroy']);

    Route::get('notification', [NotificationController::class, 'index']);
    Route::post('notification', [NotificationController::class, 'store']);
    Route::get('notification/{model}/download', [NotificationController::class, 'download']);
    Route::get('notification/{model}', [NotificationController::class, 'detail']);
    Route::put('notification/{model}', [NotificationController::class, 'update']);
    Route::delete('notification/{model}', [NotificationController::class, 'destroy']);

    Route::get('other', [InformationController::class, 'index']);
    Route::post('other', [InformationController::class, 'store']);
    Route::get('other/{model}/download', [InformationController::class, 'download']);
    Route::get('other/{model}', [InformationController::class, 'detail']);
    Route::put('other/{model}', [InformationController::class, 'update']);
    Route::delete('other/{model}', [InformationController::class, 'destroy']);

});
Route::post('applications/submit', [ApplicationController::class, 'submitApplication'])->middleware('auth:sanctum');
//Public routes
Route::get('attachment/{code}', [AttachmentController::class, 'getApplicationAttachments']);
// base_path('routes/rj/index.php');


