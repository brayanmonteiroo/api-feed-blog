<?php

namespace App\Http\Controllers;


class FrontendController extends Controller
{
    public function index()
    {
        // Obtém a resposta HTTP diretamente do controlador da API
        $response = app('App\Http\Controllers\PostController')->index();

        // Extrai os dados da resposta HTTP
        $posts = $response->original;

        // Retorna uma view com os dados dos posts
        return view('index', compact('posts'));
    }
    
    public function show($id)
    {
        // Obtém um post específico diretamente do controlador da API
        $response = app('App\Http\Controllers\PostController')->show($id);

        // Extrai os dados da resposta HTTP
        $post = $response->original;

        // Retorna uma view com os dados do post específico
        return view('show', compact('post'));
    }
}

