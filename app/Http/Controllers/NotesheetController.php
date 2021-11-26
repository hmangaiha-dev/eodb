<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Notesheet;
use Illuminate\Http\Request;

class NotesheetController extends Controller
{

    public function create(Request $request, Application $model)
    {
        $staff = auth('sanctum')->user();
        $note = new Notesheet($request->only(['title','body']));
        $note->staff()->associate($staff);
        $note->noteable()->associate($model);
        $note->save();
        return response()->json([
            'data'=>$note,
            'list'=>$model->notesheets()->get(),
            'message' => 'Note created successfully'
        ]);
    }

    public function detail(Request $request,Application $model,$id)
    {
        $note=Notesheet::query()->find($id);

        return response()->json($note,200);
    }
    public function update(Request $request,Application $model,$id)
    {
        $note=Notesheet::query()->find($id);
        $note->update($request->only(['title', 'body']));
        return response()->json([
            'data'=>$note,
            'list'=>$model->notesheets()->get(),
            'message' => 'Note updated successfully'
        ]);
    }

    public function destroy(Request $request,Application $model,$id)
    {

        $note=Notesheet::query()->find($id)->delete();
        return response()->json([
            'data'=>$note,
            'list'=>$model->notesheets()?->get(),
            'message' => 'Note deleted successfully'
        ]);
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
