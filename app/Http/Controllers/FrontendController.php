<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class FrontendController extends Controller
{
    public function index()
    {
        // Obter os dados dos posts da sua própria API
        $response = Http::get('http://localhost/api/posts');
        $posts = $response->json();
        dd($response);

        // Retornar a view com os dados dos posts
        return view('frontend.index', compact('posts'));
    }

    public function show($id)
    {
        // Obter os dados de um post específico da sua própria API
        $response = Http::get("http://localhost/api/posts/{$id}");
        $post = $response->json();
        dd($response);

        // Retornar a view com os dados do post específico
        return view('frontend.show', compact('post'));
    }
}
