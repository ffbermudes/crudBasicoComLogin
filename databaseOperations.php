<?php
defined('CONTROL') or die('Acesso negado');

class Db
{
    private mysqli $conn;

    public function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '123456', 'crudteste');

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        echo('Database conectado com sucesso!');
    }

    public function cadUser()
    {

    }
}