<?php

namespace App\Http\Controllers;

use App\Models\ResourceData;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class ResourceDataController extends Controller
{
    public function show(Request $request, $id)
    {
        $staff = auth('sanctum')->user();
        if (!$staff->tokenCan('master-data:read')) {
            throw new \Exception('Unauthorized access',403);
        }
        $data = ResourceData::query()->findOrFail($id);

        return response()->json(
            $data, 200);
    }

    public function index(Request $request, $type)
    {
        $staff = auth('sanctum')->user();
        if (!$staff->tokenCan('master-data:read')) {
            throw new \Exception('Unauthorized access',403);
        }
        $perPage = $request->has('rowsPerPage') ? $request->get('rowsPerPage') : 15;
        $search = $request->get('search');
        $data = ResourceData::query()
            ->where('type', $type)
            ->when(!blank($search), function ($q) use ($search) {
                return $q->where('value', 'LIKE', "$search%")->orWhere('value', 'LIKE', "$search");
            })
            ->paginate($perPage);

        return response()->json(
            $data, 200);
    }

    public function store(Request $request)
    {

        $staff = auth('sanctum')->user();
        if (!$staff->tokenCan('master-data:create')) {
            throw new \Exception('Unauthorized access',403);
        }
        ResourceData::query()->create($request->only(['type', 'value', 'label']));
        $data = ResourceData::query()
            ->where('type', $request->get('type'))
            ->paginate(15);

        return response()->json([
            'list' => $data,
            'message' => 'Data added successfully'
        ]);
    }

    public function update(Request $request, $id)
    {
        $staff = auth('sanctum')->user();
        if (!$staff->tokenCan('master-data:update')) {
            throw new \Exception('Unauthorized access',403);
        }
        $this->validate($request, ResourceData::RULES);
        ResourceData::query()->find($id)->update($request->only(['type', 'value', 'label']));
        $data = ResourceData::query()
            ->where('type', $request->get('type'))
            ->paginate(15);

        return response()->json([
            'list' => $data,
            'message' => 'Data updated successfully'
        ]);
    }

    public function destroy(Request $request, $id)
    {
        $staff = auth('sanctum')->user();
        if (!$staff->tokenCan('master-data:delete')) {
            throw new \Exception('Unauthorized access',403);
        }
        ResourceData::query()->find($id)->delete();
        $data = ResourceData::query()
            ->where('type', $request->get('type'))
            ->paginate(15);

        return response()->json([
            'list' => $data,
            'message' => 'Data removed successfully'
        ]);
    }
}

