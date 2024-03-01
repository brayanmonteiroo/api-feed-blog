<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Posts</title>
</head>
<body>
    <h1>Lista de Posts</h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ url("/posts/{$post['id']}") }}">{{ $post['titulo'] }}</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
