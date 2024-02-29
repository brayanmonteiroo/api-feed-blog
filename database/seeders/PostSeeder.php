<?php

namespace Database\Seeders;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'titulo' => 'Título do Post 1',
                'descricao' => 'Descrição do Post 1',
                'texto_completo' => 'Texto completo do Post 1',
                'imagem' => 'imagem1.jpg',
                'data_de_publicacao' => Carbon::now(),
            ],
            [
                'titulo' => 'Título do Post 2',
                'descricao' => 'Descrição do Post 2',
                'texto_completo' => 'Texto completo do Post 2',
                'imagem' => 'imagem2.jpg',
                'data_de_publicacao' => Carbon::now()->subDays(1),
            ],
            [
                'titulo' => 'Título do Post 3',
                'descricao' => 'Descrição do Post 3',
                'texto_completo' => 'Texto completo do Post 3',
                'imagem' => 'imagem3.jpg',
                'data_de_publicacao' => Carbon::now()->subDays(2),
            ],
            [
                'titulo' => 'Título do Post 4',
                'descricao' => 'Descrição do Post 4',
                'texto_completo' => 'Texto completo do Post 4',
                'imagem' => 'imagem4.jpg',
                'data_de_publicacao' => Carbon::now()->subDays(3),
            ],
            [
                'titulo' => 'Título do Post 5',
                'descricao' => 'Descrição do Post 5',
                'texto_completo' => 'Texto completo do Post 5',
                'imagem' => 'imagem5.jpg',
                'data_de_publicacao' => Carbon::now()->subDays(4),
            ],
            [
                'titulo' => 'Título do Post 6',
                'descricao' => 'Descrição do Post 6',
                'texto_completo' => 'Texto completo do Post 6',
                'imagem' => 'imagem6.jpg',
                'data_de_publicacao' => Carbon::now()->subDays(5),
            ],
            [
                'titulo' => 'Título do Post 7',
                'descricao' => 'Descrição do Post 7',
                'texto_completo' => 'Texto completo do Post 7',
                'imagem' => 'imagem7.jpg',
                'data_de_publicacao' => Carbon::now()->subDays(6),
            ],
            [
                'titulo' => 'Título do Post 8',
                'descricao' => 'Descrição do Post 8',
                'texto_completo' => 'Texto completo do Post 8',
                'imagem' => 'imagem8.jpg',
                'data_de_publicacao' => Carbon::now()->subDays(7),
            ],
        ];
        

        // Populando o banco de dados com os posts
        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
