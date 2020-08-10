Sistema de Integração da clínica Exemplo com a API Feegow.

Para utilizar o código, após o clone no github, executar os seguintes passos:

- Criar no mysql o banco de dados 'agenda_clinica_exemplo', conforme as especificações no arquivo .env.
- Executar o comando php artisan migrate;

Para dar um start no servidor, executar o comando:
- php artisan serve 


Os Testes de Rotas e Classe estão nos arquivos AgendaTest.php e RouterTest.php
Para executá-los, digite no terminal o comando o seguinte código: 

- vendor\bin\phpunit  ou  php artisan test -> Executa todos os Testes

- vendor\bin\phpunit --filter {nome da função} -> Executa apenas o determinado teste.
Ex: vendor\bin\phpunit --filter testRouteStore

EDIT 2:
- Implementando o docker

- Para download da imagem docker, executar os seguintes passos:

    - Criar um novo diretório e na IDE criar o arquivo docker-compose.yaml
    
    - No arquivo, adicionar a seguinte instrução:
        version: '3'

        services: 
            laravel-app:
                image: raphalcao/laravel-clinica-exemplo:latest
                ports: 
                    - "8080:80"

    - No terminal docker, após localizar o diretório da aplicação, executar os comandos:
    - docker-compose up -d

    - Para verificar a imagem clonada, digite: 
    - docker ps

    - Caso seja necessário efetuar alguma permissão de rede ou acesso, use o comando: 
    - docker exec -it teste_laravel-app_1 bash
    