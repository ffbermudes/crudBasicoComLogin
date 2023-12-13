<?php
session_start();
define('CONTROL', true);

// verifica se o usuário está logado
$usuario_logado = $_SESSION['usuario'] ?? null;

if (empty($usuario_logado)) {
    $rota = 'login';
} else {
    $rota = $_GET['rota'] ?? 'home';
}

$rotas = [
    'login' => 'login.php',
    'home' => 'home.php',
    'outra_pagina' => 'outra_pagina.php'
];

require_once $rotas[$rota];