<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Notesheet;
use Illuminate\Http\Request;

class NotesheetController extends Controller
{

    public function create(Request $request, Application $model)
    {
        $note=Notesheet::query()->create([
            'note' => $request->get('body'),
            'noteable_id'=>$model->id,
            'noteable_type'=>Application::class
        ]);
        return response()->json([
            'message' => 'Note created successfully'
        ]);
    }

    public function detail(Request $request,Application $model,$id)
    {
        $note=Notesheet::query()->find($id);

        return response()->json([
            $note
        ],200);
    }
    public function notes(Request $request, Application $model)
    {
        $data=Notesheet::query()->where('noteable_id', $model->id)
            ->where('noteable_type', Application::class)
            ->get();
        return response()->json([
            'list'=>$data
        ]);
    }
}
