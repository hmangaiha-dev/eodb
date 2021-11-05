<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    protected Role $role;

    public function __construct(Role $role)
    {
        $this->role = $role;
    }

    public function show(Request $request, int $id)
    {
        $staff = auth('sanctum')->user();
        if (!$staff->tokenCan('role:read')) {
            throw new \Exception('Unauthorized access', 403);
        }
        $data = Role::query()->with('permissions', fn($q) => $q->select(['permissions.id as value', 'permissions.name as label']))->find($id);
        return response()->json($data, 200);

    }

    public function index(Request $request)
    {
        $staff = auth('sanctum')->user();
        if (!$staff->tokenCan('role:read')) {
            throw new \Exception('Unauthorized access', 403);
        }
        $per_page = $request->has('per_page') ? $request->get('per_page') : 15;
        $data = Role::query()->when($request->get('search'), function ($q) use ($request) {
            $q->where('name', 'LIKE', "%" . $request->get('search') . "%");
        })->paginate($per_page);
        return response()->json($data, 200);
    }

    public function store(Request $request)
    {
        $staff = auth('sanctum')->user();
        if (!$staff->tokenCan('role:create')) {
            throw new \Exception('Unauthorized access', 403);
        }
        $this->validate($request, Role::RULES);
        $role = new Role($request->only('name', 'description'));
        $role->save();
        $role->permissions()->sync($request->get('permissions'));

        return response()->json([
            'data' => $role,
            'message' => 'New role created successfully'
        ], 200);
    }

    public function update(Request $request, Role $role)
    {
        $staff = auth('sanctum')->user();
        if (!$staff->tokenCan('role:update')) {
            throw new \Exception('Unauthorized access', 403);
        }
        $this->validate($request, ['name' => 'required']);
        $role->fill($request->only($this->role->getFillable()));
        $role->save();
        $role->permissions()->sync($request->get('permissions'));

        return response()->json([
            'data' => $role,
            'message' => 'Role update successfully'
        ], 200);

    }

    public function destroy(Request $request, Role $role)
    {
        $staff = auth('sanctum')->user();
        if ($staff->tokenCan('role:delete')) {
            throw new \Exception('Unauthorized access',403);
        }
        $role->delete();
        return response()->json([
            'data' => $role,
            'message' => 'Role deleted successfully'
        ], 200);
    }
}
