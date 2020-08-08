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

