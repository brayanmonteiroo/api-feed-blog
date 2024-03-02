# Guia de Uso do Sistema API Feed Blog

Este guia fornece um passo a passo sobre como usar o sistema, desenvolvido no ambiente Laravel Sail. O sistema consiste em uma API para consulta de posts e um sistema interno que utiliza as informações da API para exibir os dados em uma aplicação web.

## Pré-requisitos

Antes de começar, verifique se o seguinte software está instalado em sua máquina:

- Docker
- Composer
- Postman ou cliente HTTP (opcional)

## Instalação

1. Clone o repositório do projeto para o seu ambiente local:

    ```bash
    git clone https://github.com/brayanmonteiroo/api-feed-blog
    ```

2. Navegue até o diretório do projeto:

    ```bash
    cd api-feed-blog
    ```

3. Instale as dependências do Composer:

    ```bash
    composer install
    ```

4. Instale o Laravel Sail:

    ```bash
    composer require laravel/sail --dev
    ```

5. Publique os arquivos de configuração do Sail:

    ```bash
    php artisan sail:install
    ```

6. Inicie o ambiente Sail:

    ```bash
    ./vendor/bin/sail up -d
    ```

7. Gere a chave de aplicativo:

    ```bash
    ./vendor/bin/sail artisan key:generate
    ```

8. Execute as migrações para criar as tabelas do banco de dados:

    ```bash
    ./vendor/bin/sail artisan migrate
    ```

## Uso da API

A API fornece endpoints para consulta de posts. Você pode acessar os seguintes endpoints:

- **GET /api/posts**: Retorna uma lista paginada de posts.
- **GET /api/posts/{id}**: Retorna um post específico com base no ID fornecido.

## Uso do Sistema Interno

O sistema interno utiliza as informações da API para exibir os dados em uma aplicação web. Você pode acessar os seguintes endpoints:

- **GET /**: Página inicial que lista todos os posts.
- **GET /posts/{id}**: Página que exibe um post específico com base no ID fornecido.

## Testando a API com o Postman

Se desejar, você pode testar a API usando o Postman:

1. Abra o Postman e configure o ambiente do Postman com a URL base da sua aplicação.

3. Execute as requisições para os endpoints da API para visualizar os resultados.

## Conclusão

Agora você está pronto para usar o sistema! Sinta-se à vontade para explorar os recursos da API e do sistema interno e adaptá-los às suas necessidades específicas. Se encontrar algum problema ou tiver dúvidas, consulte a documentação do Laravel Sail ou entre em contato com a equipe de desenvolvimento para obter suporte.