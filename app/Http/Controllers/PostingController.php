<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostingController extends Controller
{
    public function index(Request $request)
    {
        $per_page = $request->has('per_page') ? $request->get('per_page') : 15;
        $data=Staff::query()->with('posts')->paginate($per_page);

        return response()->json($data, 200);
    }
    public function userPosts(Request $request): JsonResponse
    {
        $user = new User();
        $data=$user->posts()->paginate();
        return response()->json($data,200);
    }
}
