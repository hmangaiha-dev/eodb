<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    public function show(Request $request,int $id)
    {
        $office=Office::query()->find($id)->with(['roles'])->first();
        return response()->json([
            'data'=>$office,
            'message' => ''
        ], 200);
    }
    public function index(Request $request){
        $per_page = $request->has('per_page') ? $request->get('per_page') : 15;
        $data=Office::query()->paginate($per_page);
        return response()->json($data, 200);
    }

    public function officeRoles(Request $request,Office $office)
    {
        return response()->json($office->roles()->get(['roles.id as id','roles.name as label']), 200);
    }
    public function create(Request $request)
    {
        $this->validate($request, Office::RULES);
        $office = Office::query()->create($request->only((new Office())->getFillable()));

        if ($request->has('roles'))
            $office->roles()->sync($request->get('roles'));

        return response()->json([
            'data' => $office,
            'message' => 'New office created successfully'
        ],200);

    }

    public function update(Request $request,Office $office)
    {
        $this->validate($request, Office::RULES);
        $office->update($request->only((new Office())->getFillable()));
        if ($request->has('roles'))
            $office->roles()->sync($request->get('roles'));
        return response()->json([
            'data' => $office,
            'message' => 'Office updated successfully'
        ],200);
    }

    public function destroy(Request $request,Office $office)
    {
        $office->delete();
        return response()->json([
            'data' => $office,
            'message' => 'Office updated successfully'
        ],200);
    }
}
