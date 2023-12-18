<?php
session_start();
define('CONTROL', true);

// verifica se o usuário está logado
$usuario_logado = $_SESSION['usuario'] ?? null;

if (empty($usuario_logado)) {
    $rota = $_GET['rota'] ?? 'login';

    $rotas = [
        'login' => 'login.php',
        'criar_usuario' => 'criar_usuario.php',
        'cadastra_banco' => 'dbOperations/cad_user.php'
    ];

    require_once $rotas[$rota];

} else {
    $rota = $_GET['rota'] ?? 'home';
    $rotas = [
        'home' => 'home.php',
    ];

    require_once $rotas[$rota];
}

