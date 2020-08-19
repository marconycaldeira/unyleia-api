### Repositório back-end do teste prático do processo seletivo para desenvolvedor da UNYLEIA


#### Apresentação da solução
Para desenvolvimento do back-end, foi utilizado o [Laravel 7.x](https://laravel.com/docs/7.x "Laravel 7.x").

Além disso, optei por utilizar o [Docker](https://www.docker.com/ "Docker") como ambiente de deploy da aplicação, com o objetivo de evitar problemas de incompatibilidade bem como fornecer todo o ambiente já configurado.

#### Requisitos para instalação
- Docker e Docker Compose
- Portas 8080, 9000 e 3306 liberadas

#### Procedimentos para instalação
- Clone o projeto https://github.com/marconycaldeira/unyleia-api
- Dentro da raiz do projeto, execute os comandos 
1. `docker-compose up -d --build site`
2. `docker-compose run --rm composer update`
3. `docker-compose run --rm artisan key:generate`
4. `docker-compose run --rm artisan migrate`
5. `docker-compose run --rm artisan db:seed`
- Faça um teste acessando o end-point http://localhost:8080/api/books

#### Possiveis problemas
- Os problemas mais frequentes do ambiente giram em torno das portas configuradas pelos containers, algo que pode facilmente ser alterado no arquivo [docker-composer.yml](https://github.com/marconycaldeira/unyleia-api/blob/master/docker-compose.yml "docker-composer.yml")
- Além disso, se por ventura houver algum problema quanto as variáveis de ambiente, basta revisar o arquivo [.env](https://github.com/marconycaldeira/unyleia-api/blob/master/src/.env ".env")

#### Observações
- Optei por não utilizar a autenticação JWT e nem de implementar uma busca e paginação inteligentes por questões de disponibilidade de tempo. Caso queiram ver como eu trabalho com o JWT, podem consultar [este repositório](https://github.com/marconycaldeira/products-api "este repositório") que eu fiz referente a outro teste que fiz e que inclusive fui aprovado.

- A URL base da aplicação (caso utilizem as portas dos arquivos de configuração) é a http://localhost:8080

- Normalmente costumo utilizar o padrão [HMVC](https://www.infoworld.com/article/2076128/hmvc--the-layered-pattern-for-developing-strong-client-tiers.html "HMVC"), optei por não utilizar dessa vez devido a baixa complexidade do teste.
