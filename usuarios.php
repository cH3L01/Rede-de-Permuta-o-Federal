<?php
require 'conexao.php';
session_start();

if (!isset($_POST['nome'])) {
    die("Acesso inválido.");
}

$nome          = $_POST['nome'];
$senha         = password_hash($_POST["senha"], PASSWORD_DEFAULT);
$email         = $_POST['email'];
$cpf           = $_POST['cpf'];
$campus        = $_POST['campus'];
$especialidade = $_POST['especialidade'];

$sql = "INSERT INTO usuarios (nome, senha, email, cpf, campus, especialidade)
        VALUES ('$nome', '$senha', '$email', '$cpf', '$campus', '$especialidade')";

if ($conn->query($sql)) {
    $_SESSION['popup'] = "Cadastro realizado com sucesso!";
    header("Location: index.php");
    exit();
} else {
    echo "Erro: " . $conn->error;
}
?>
