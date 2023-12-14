<?php
session_start();
define('CONTROL', true);

// verifica se o usuário está logado

$usuario_logado = $_SESSION['usuario'] ?? null;

if (empty($usuario_logado)) {
    $rota = 'login';
} else {
    $rota = $_GET['rota'] ?? 'login';
}

$rotas = [
    'login' => 'login.php',
    'criar_usuario' => 'criar_usuario.php'
];

require_once $rotas[$rota];