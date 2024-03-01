<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Post</title>
</head>
<body>
    <h1>Detalhes do Post</h1>
    <ul>
        <li>ID: {{ $post['id'] }}</li>
        <li>Título: {{ $post['titulo'] }}</li>
        <li>Descrição: {{ $post['descricao'] }}</li>
        <li>Texto Completo: {{ $post['texto_completo'] }}</li>
        <li>Imagem: {{ $post['imagem'] }}</li>
        <li>Data de Publicação: {{ $post['data_de_publicacao'] }}</li>
        <li>Criado em: {{ $post['created_at'] }}</li>
        <li>Atualizado em: {{ $post['updated_at'] }}</li>
    </ul>
</body>
</html>
