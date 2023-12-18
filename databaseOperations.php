<?php
defined('CONTROL') or die('Acesso negado');

class Db
{
    private mysqli $conn;

    public function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '123456', 'sistema_de_login');

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function user_exists($usuario)
    {
        $stmt = $this->conn->prepare("SELECT user FROM user WHERE user = ?");
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $stmt->store_result();
        $count = $stmt->num_rows;
        $stmt->close();

        return $count > 0;
    }

    public function hash_pass()
    {

    }

    public function cad_user($usuario, $pass, $re_pass)
    {
        if ($pass !== $re_pass) {
            echo "Servidor informa: As senhas não coincidem !";
            return;
        }

        if (empty($usuario) or empty($pass) or empty($re_pass))
        {
            echo 'teste';
            return;
        }

        // Verificar se o usuário já existe
        if ($this->user_exists($usuario)) {
            echo "Usuário já cadastrado. Por favor, escolha outro nome de usuário.";
            return;
        }

        // Hash da senha
        $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

        // Preparar e executar a consulta SQL para inserção
        $stmt = $this->conn->prepare("INSERT INTO user (user, pass_sha) VALUES (?, ?)");
        $stmt->bind_param("ss", $usuario, $hashed_pass);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "Registro inserido com sucesso";
            echo 'teste' . $stmt->affected_rows;
        } else {
            echo "Erro ao inserir registro: " . $stmt->error;
        }

        $stmt->close();
        $this->conn->close();
    }
}

