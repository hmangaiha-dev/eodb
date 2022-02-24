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
        //return $staff->tokenCan('office:read') ? 'yes' : 'no';
        $service = DepartmentService::query()->orderBy('department_id');
        $service->when(isset($staff->currentPost()->pivot->office_id), function ($q) use ($staff) {
            return $q->where('department_id', $staff->currentPost()->pivot->office_id);
        });

        $data = $service->paginate();
        return [
            'list' => $data,
        ];
        // $search = $request->get('search');
        // return [
        //     'list' => DepartmentService::query()->when($search, fn ($q) => $q->where('service_name', 'LIKE', "%{$search}%"))->paginate()
        // ];
    }

    public function create(Request $request, Department $model)
    {
        $service = $model->services()->create($request->only((new DepartmentService())->getFillable()));
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
