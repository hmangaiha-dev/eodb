<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    public function show(Request $request,int $id)
    {
        $office=Office::query()->find($id)->with(['permissions'])->first();
        return response()->json([
            'data'=>$office,
            'message' => ''
        ], 200);
    }
    public function index(Request $request){
        $per_page = $request->has('per_page') ? $request->get('per_page') : 15;
        $data=Office::query()->paginate($per_page);
        return response()->json([
            'data'=>$data,
            'message' => ''
        ], 200);
    }
    public function store(Request $request)
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
