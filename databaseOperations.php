<?php
defined('CONTROL') or die('Acesso negado');
class Db
{
    public static mysqli $conn;

    public static function conectar(string $hostname, string $username, string $password, string $database)
    {
        self::$conn = new mysqli($hostname, $username, $password, $database);

        if (self::$conn->connect_error) {
            die("Connection failed: " . self::$conn->connect_error);
        }

        echo "Connection successful!";
    }

}

Db::conectar('localhost', 'root', '123456', 'crudteste');