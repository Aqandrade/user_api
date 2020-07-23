# API de Usuários.

Ao clonar o projeto, para executa-lo e efetuar algumas requisições, é necessário executar algumas etapas:

1 – Execute na raiz do projeto: </br>

     composer update

2 – Execute o DUMP sql que está na raiz do projeto com o nome de “dump_finnet_user_api.sql” no seu gerenciador de banco de dados.</br>

3 – Copie e cole o arquivo “env-example.sql” na raiz do projeto, renomeando-o como “env.php” e preencha as informações de conexão do banco de dados como: (Host, DBName, User, Password e Port).</br>

4 –Para executa-lo, rode o comando na raiz do projeto:

     php -S localhost:8000 

Exemplo de Requisições:

GET : localhost:8000/ – Retorna todos os usuários

GET: localhost:8000/user/:id – Retorna o usuário do ID.

POST: localhost:8000/user/ - Cria Usuário.
     Exemplo JSON:
          
          {
               "nome":"Walter White",
               "data_nascimento" : "07/09/1958"
          }
     
PUT: localhost:8000/user/ - Atualiza Usuário.
         Exemplo JSON:
         
          {
               "id":"2",
               "nome":"Walter White",
               "data_nascimento" : "07/09/2010"
          }
          
DELETE: localhost:8000/user/ - Deleta Usuário.
