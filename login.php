<?php
defined('CONTROL') or die('Acesso Negado !');
?>

<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de login -> Logar-se</title>
</head>
<body>
    <form method="post">
        <div class="login-row">
            <label for="usuario">Email / Telefone</label><br>
            <input type="text" id="usuario" name="usuarios"><br>
        </div>
        <div class="login-row">
            <label for="password">Senha:</label><br>
            <input type="text" id="password" name="pass"><br>
        </div>
        <div class="login-row">
            <input type="submit" value="Cadastrar-se">
        </div>
        <div class="login-row">
            <a href="index.php?rota=criar_usuario">Login in</a>
        </div>
    </form>
</body>
</html>

