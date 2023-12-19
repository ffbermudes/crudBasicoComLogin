<?php
defined('CONTROL') or die('Acesso Negado !');
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/criarUsuario.css">
    <title>Sistema de login -> criar usuario</title>
</head>
<body>
<form method="post" action="index.php?rota=cadastra_banco">
    <div class="login-row" >
        <label for="usuario">Email / Telefone</label>
        <input type="text" id="usuario" name="usuario" placeholder="digite: ">
    </div>
    <div class="login-row">
        <label for="password">Senha:</label>
        <input type="text" id="password" name="pass">
    </div>
    <div class="login-row">
        <label for="password">Repetir a senha:</label>
        <input type="text" id="password" name="re_pass">
    </div>
    <div class="login-row-submit">
        <input type="submit" value="Cadastrar-se">
        <a href="index.php?rota=login">voltar login</a>
    </div>
</form>

<script type="module" src="public/js/main.js"></script>
</body>
</html>