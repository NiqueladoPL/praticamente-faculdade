<?php

class Login{
    private $conn;

    public function __construct($conn){
        $this->conn = $conn;
    }

    public function autenticarUsuario($email, $senha){
        $sql = "SELECT * FROM usuarios WHERE email_usu = '$email'";
        $result = $this->conn->query($sql);

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            $hashedPassword = $row['senha_usu'];

            if (password_verify($senha, $hashedPassword)) {
                session_start();
                $_SESSION['email_usu'] = $row['email_usu'];
                $_SESSION['nome_usu'] = $row['nome_usu'];
                return true; 
            }
        }
        return false;
    }
    public function encerrarSessao()
    {
        session_start();
        session_destroy();
    }
}
?>