

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

<body style="padding-bottom: 100px;">
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="logo.png" width="80"></a>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                <?php
                    require 'session.php';
                ?>                
                
                
                
                <?php
                        if (isset($_SESSION['user'])) {
                            echo htmlspecialchars($_SESSION['user']) . "</strong> está logado.</p>" .'<p><a href="sair.php"class="btn btn-danger" onclick="Sair()">Sair</a></p>';
                            $logado = true;
                        } else {
                            echo '<p><a class="btn btn-success" href="Login.php">Login</a></p>';
                        }
                    ?>
                    <?php
                        if (isset($_SESSION['user'])) {
                            echo '<p><a class="btn btn-success disabled" href="Cadastro.php">Cadastro</a></p>';
                            $logado = true;
                        } else {
                            echo '<p><a class="btn btn-success" href="Cadastro.php">Cadastro</a></p>';
                        }
                    ?>
            </div>
    </nav>

    <div class="container px-10 text-center">
        <div class="card texto_centro">
            <div class="container text-center mt-5 mb-5">
                <h1>Sobre Nós</h1>
                <p>A Rede de Permutação Federal é um site inovador que facilita a busca de servidores de instituições federais
                    pelo Brasil que desejam trocar de campus de atuação. Com uma interface simples e intuitiva, o site permite
                    que os servidores se conectem e encontrem colegas dispostos a realizar permutas, tornando o processo de
                    mudança mais rápido e eficiente.</p>
                <p>Com a Rede de Permutação Federal, os servidores podem: <br>

                    • Buscar por oportunidades de permuta em todo o Brasil; <br>
                    • Conectar-se com outros servidores que desejam trocar de campus; <br>
                    • Realizar buscas personalizadas por localização, instituição e cargo; <br>
                    • Trocar informações e experiências com outros servidores. <br>
                </p>
                <p>O site é uma ferramenta valiosa para os servidores que desejam mudar de campus sem precisar passar por um
                    novo concurso público. Além disso, a Rede de Permutação Federal também pode ajudar a reduzir os custos e o
                    tempo gasto com a mudança, tornando o processo mais tranquilo e seguro.</p>
                <p>
                <h1>Nossa equipe:</h1> <br>
                <div class="card ">
                <p1>Arthur Felipe Garcia da Silva<br></p1>
                <button class="btn btn-success">Contato</button>
                </div>
                <div class="card">
                Gabriel Gaspardine Silva <br>
                <button class="btn btn-success">Contato</button>
                </div>
                <div class="card">
                João Henrique Nogueira Glória <br>
                <button class="btn btn-success">Contato</button>
                </div>
                <div class="card">
                João Miguel Pereira do Santos <br>
                <button class="btn btn-success">Contato</button>
                </div>
                <div class="card">
                João Vitor Dias Pires <br>
                <button class="btn btn-success">Contato</button>
                </div>
                <div class="card">
                João Vitor Perpetuo Teixeira Campos <br>
                <button class="btn btn-success">Contato</button>
                </div>
                <div class="card">
                Pedro Henrique Vilela Ferreira <br>
                <button class="btn btn-success">Contato</button>
                </div>
                <div class="card">
                Rafael Queiroz Maier
                <button class="btn btn-success">Contato</button>
                </div>
                </div>
                </p>
                <p>
                <h2>Orientador:</h2> Roberto Ribeiro Faria</p>
                <p>
                <h2>Co-Orientador:</h2> Laerte Mateus Rodrigues</p>
                <p>
                <h2>E-mail de Contato:</h2> rafatcheloqueirozmaier5@gmail.com</p>
            </div>
        </div>
    </div>
</div>
    <footer class="navbar bg-body-tertiary fixed">
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