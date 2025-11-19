<?php
session_start();
require 'usuarios.php'; // importa o array de usuários

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['email'];
    $password = $_POST['password'];

    if (isset($usuarios[$username]) && password_verify($password, $usuarios[$username])) {
        $_SESSION['user'] = $username;
        header("Location: index.php");
        exit;
    } else {
        echo "Usuário ou senha inválidos.";
    }
}
?>





<html>

<head>
    <title>Rede de Permutação</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.7/css/bootstrap.min.css"
        integrity="sha512-fw7f+TcMjTb7bpbLJZlP8g2Y4XcCyFZW8uy8HsRZsH/SwbMw0plKHFHr99DN3l04VsYNwvzicUX/6qurvIxbxw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="StyleSheet" href="Style.css">
</head>

<script>
    let lastScrollTop = 0;
    window.addEventListener("scroll", function () {
        let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
        const footer = document.querySelector("footer");

        if (currentScroll > lastScrollTop) {

            footer.style.transform = "translateY(100%)";
        } else {

            footer.style.transform = "translateY(0)";
        }
        lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
    }, false);
</script>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="logo.png" width="80"></a>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                <p><a class="btn btn-success disabled" href="Login.php">Login</a></p>
                <p><a class="btn btn-success me-md-2" href="Cadastro.php">Cadastro</a></p>
            </div>
    </nav>


    <div class="form-container">
        <form class="form" method="POST" action="login.php">
            <span class="heading">Login</span>
            <span class="c1">Encontre seu novo campus agora</span>

            <input class="input" type="text" name="email" placeholder="Email" required>
            <input class="input" type="password" name="password" placeholder="Senha" required>


            <span class="c2">Encontre um colega de profissão</span>
                <div class="button-container">
                    <button class="btn send-button" type="submit">Login</buttonm>
                </div>
        </form>
    </div>
    </div>

    <footer class="navbar bg-body-tertiary fixed-bottom">
        <div class="container-fluid d-flex justify-content-center">
            <div class="text-center">
                <p class="mb-0">&copy; 2025 Rede de Permutação Federal. Todos os direitos reservados.</p>
                <p class="mb-0">

                    <a href="Sobre.php">Sobre Nós</a>
                </p>
            </div>
        </div>
    </footer>
</body>

</html>