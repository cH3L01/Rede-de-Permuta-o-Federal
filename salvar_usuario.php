<?php
require 'conexao.php';
require 'vendor/autoload.php'; // PHPMailer

$nome = $_POST['nome'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$campus = $_POST['campus'];
$especialidade = $_POST['especialidade'];

// Salvar no banco
$sql = "INSERT INTO usuarios (nome, senha, email, cpf, campus, especialidade)
        VALUES ('$nome', '$senha', '$email', '$cpf', '$campus', '$especialidade')";
if($conn->query($sql)){

    // Envio do e-mail
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; 
    $mail->SMTPAuth = true;
    $mail->Username = 'SEU_EMAIL@gmail.com'; 
    $mail->Password = 'SUA_SENHA_DE_APP';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('SEU_EMAIL@gmail.com', 'Seu Site');
    $mail->addAddress($email, $nome);
    $mail->Subject = "Cadastro realizado!";
    $mail->Body = "Olá $nome, seu cadastro foi realizado com sucesso!";

    if($mail->send()){
        echo "Usuário cadastrado e email enviado!";
    } else {
        echo "Erro ao enviar email: ". $mail->ErrorInfo;
    }

} else {
    echo "Erro ao cadastrar: ";
}
?>