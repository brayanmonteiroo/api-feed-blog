# Histórico de Desenvolvimento

## 28/02/24

- Instalação do Laravel Sail e conexão com o GitHub.

## 29/02/24

- Criação da API foi rápida e eficiente.

  ### Gargalos Enfrentados:

  - **2.1:** O principal desafio do dia foi criar o consumo da API. Tentei utilizar AJAX e Axios sem sucesso. Após assistir vários vídeos, percebi que estava abordando o problema da maneira errada, sem configurar rotas da web e controladores adequadamente.

  - **2.2:** Ao tentar implementar as rotas na parte web da aplicação, utilizando o controlador e seus métodos para consumir a API, me deparei com o erro "cURL error 28: Operation timed out after 60001 milliseconds with 0 bytes received", ao acessar http://localhost/api/posts.

  - **2.3:** Embora a API funcionasse corretamente no Postman, ao tentar consumi-la na aplicação web, me deparei com o erro de cURL mencionado acima.

## 01/03/24

- Implementação do consumo da API para o sistema web.

  ### Principais Atividades:

  - **3.1:** Implementei a listagem de todos os posts e o acesso individual a cada post por meio de seu ID, utilizando a função `app` para acessar internamente os métodos da API. Foi um processo desafiador, pois inicialmente não compreendi que não seria possível consumir a API via método HTTP internamente.

  - **3.2:** Iniciei a implementação do front-end utilizando o Bootstrap 5, minha escolha devido ao conhecimento e familiaridade com a ferramenta.

  - **3.3:** Implementei a paginação e refatorei os métodos index da API e do controlador frontend para garantir o funcionamento correto da paginação. Também realizei ajustes no layout da paginação utilizando o Bootstrap 5.