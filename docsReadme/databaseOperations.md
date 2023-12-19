## [databaseOperations.php](databaseOperations.php)
Esse arquivo no momento só possui uma classe DB onde serão descritos todos os códigos que manipularam o banco de dados.


> Classe: Db

Atributos:

- <a id="conn">conn</a>: mysqli (privado)

Métodos:

- <a id="construct">__construct()</a>: Void
- <a id="user_exists">user_exists</a>($usuario: String): Boolean
- <a id="cad_user">cad_user</a>($usuario: String, $pass: String, $re_pass: String): Void

### Explicação dos Atributos:

[conn](#conn): atributo onde será instânciado o objeto mysqli

### Explicação dos Métodos:

[__construct](#construct): O método construtor irá instanciar o objeto que a classe mysqli constroí. os dados localhost, usuario, senha, nome do banco são inseridos internamente.

[user_exists](#user_exists): Checa no banco de dados se existe algum usuário cadastrado no banco. 

[cad_user](#cad_user): Irá inserir o novo usuário no banco. Existem algumas validações que precisam ser validadas antes, irei descrever abaixo:

1. Verifica se as senhas estão iguais.
2. Verifica se todos campos foram preenchidos.
3. Verifica se já existe o usuario cadastrado. Executando a função da classe <a id="user_exists">user_exists</a>.

