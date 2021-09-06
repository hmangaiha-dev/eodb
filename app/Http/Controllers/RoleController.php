<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(Request $request)
    {

        $data = Role::query()
            ->paginate($request->has('per_page') ? $request->get('per_page') : 15);
        return response()?->json($data, 200);
    }

    public function create(Request $request)
    {
        $request->validate(Role::RULES);

        $role = Role::query()->create($request->only(['name', 'description']));
        if ($request->has('permissions'))
            $role->permissions()->sync($request->get('permissions'));
        return response()->json([
            'data' => Role::query()
                ->paginate($request->has('per_page') ? $request->get('per_page') : 15),
            'message' => 'Role created successfully'
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate(Role::RULES);
        $role = Role::query()->findOrFail($id)->update($request->only(['name', 'description']));
        if ($request->has('permissions'))
            $role->permissions()->sync($request->get('permissions'));
        return response()->json([
            'data' => Role::query()
                ->paginate($request->has('per_page') ? $request->get('per_page') : 15),
            'message' => 'Role updated successfully'
        ], 200);
    }

    public function destroy(Request $request, $id)
    {
        Role::query()->findOrFail($id)->delete();
        return response()->json([
            'data' => Role::query()
                ->paginate($request->has('per_page') ? $request->get('per_page') : 15),
            'message' => 'Role deleted successfully'
        ], 200);
    }
}
