<?php

session_start();


require 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$result = $conn->query($sql);

if (isset($_SESSION['popup'])) {
    pop($_SESSION['popup']);
    unset($_SESSION['popup']); // evita repetir o popup no reload
};

if ($result->num_rows > 0) {
    $usuario = $result->fetch_assoc();

    if (password_verify($senha, $usuario['senha'])) {
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['popup'] = "Login realizado com sucesso";
        $_SESSION['log'] = true;
        $_SESSION['user'] = $usuario['nome'];
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['popup'] = "Senha incorreta";
        header("Location: login.php");
        exit();
    }

} else {
    $_SESSION['popup'] = "Usuário não encontrado";
    header("Location: login.php");
    exit();
}

?>