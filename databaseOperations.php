<?php
class Db
{
    public mysqli $conn;
    public function __construct(string $hostname, string $username, string $password, string $database)
    {
        $this->conn = new mysqli($hostname, $username, $password, $database);
    }

    public static function sow_connection()
    {
        echo '<pre>';
        print_r(self::$conn);
        echo '</pre>';
    }

}

$object = new Db('localhost', 'root', '123456', 'crudteste');