<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('data_de_publicacao', 'asc')->paginate(6);
        return response()->json($posts);
    }


    public function show($id)
    {
        $post = Post::findOrFail($id);
        return response()->json($post);
    }
}
