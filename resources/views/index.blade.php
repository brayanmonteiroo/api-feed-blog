@include('header')

<div class="container">
    <div class="row mt-5 mb-5 justify-content-center">
        <div class="col-md-6 text-center">
            <h1>Blog</h1>
        </div>
    </div>


    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mx-auto px-md-5 mb-5">
        @foreach ($posts as $post)
        <div class="col">
            <div class="card h-100">
                <img src="{{ $post['imagem'] }}" class="card-img-top" alt="{{ $post['titulo'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $post['titulo'] }}</h5>
                    <p class="card-text">{{ $post['descricao'] }}</p>
                    <a href="{{ url("/posts/{$post['id']}") }}" class="btn btn-primary">Leia mais</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div> {{-- fim container --}}

@include('paginacao')

@include('footer')
