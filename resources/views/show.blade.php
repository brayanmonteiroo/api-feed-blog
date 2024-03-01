@include('header')

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mt-5">
                    <li class="breadcrumb-item"><a href="/">Início</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $post['titulo'] }}</li>
                </ol>
            </nav>
            <h2 class="mb-4 mt-4">{{ $post['titulo'] }}</h2>
            <img src="http://localhost/{{ $post['imagem'] }}" class="img-fluid mb-4" alt="{{ $post['titulo'] }}">
            <p>{{ $post['texto_completo'] }}</p>
        </div>
    </div>
</div>

@include('footer')
