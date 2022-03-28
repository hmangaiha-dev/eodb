<?php

namespace App\Http\Controllers;

use App\Models\ApplicationProfile;
use App\Models\Department;
use App\Models\DepartmentService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(ApplicationProfile::query()->get());
    }

    public function detail(Request $request, DepartmentService $model)
    {
        return [
            'data' => $model
        ];
    }

    public function getServices(Request $request)
    {
        $staff = auth('sanctum')->user();
        $office = $staff->currentPost();
        //return $staff->tokenCan('office:read') ? 'yes' : 'no';
        $service = DepartmentService::query()->orderBy('department_id');
        $service->when(isset($office), function ($q) use ($staff, $office) {
            return $q->where('department_id', $office->id);
        });

        // $data = $service->paginate();
        // return [
        //     'list' => $data,
        // ];
        $search = $request->get('search');
        return [
            'list' => $service->when($search, fn ($q) => $q->where('service_name', 'LIKE', "%{$search}%"))->paginate()
        ];
    }

    public function create(Request $request, Department $model)
    {
        $staff = auth('sanctum')->user();
        $office = $staff->currentPost();

        $service = [];

        $model->when(!blank($office), function ($q) use ($office, $request,$service) {
            $service =  Department::find($office->id);
            $service->services()->create($request->only((new DepartmentService())->getFillable()));
        }, function () use ($model, $request,$service) {
            $service = $model->services()->create($request->only((new DepartmentService())->getFillable()));
        });
        return [
            'data' => $service,
            'message' => 'Service added successfully',
            'list' => $model->services()->paginate()
        ];
    }
    public function update(Request $request, DepartmentService $model)
    {

        $service = $model->updateOrFail($request->only((new DepartmentService())->getFillable()));
        return [
            'data' => $service,
            'message' => 'Service updated successfully',
        ];
    }
    public function destroy(Request $request, DepartmentService $model)
    {

        $model->delete();

        return [
            'list' => DepartmentService::query()->paginate(),
            'data' => $model,
            'message' => 'Service deleted successfully',
        ];
    }
}
