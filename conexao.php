<?php
$servidor = "localhost";   // geralmente é localhost
$usuario  = "root";        // usuário do MySQL
$senha    = "";            // senha do MySQL (vazia no XAMPP)
$banco    = "login_db";    // nome do banco que você criou

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>