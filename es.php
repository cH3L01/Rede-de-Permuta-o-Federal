<html>
    <head>
        <title>Instituições - ES</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.7/css/bootstrap.min.css"
            integrity="sha512-fw7f+TcMjTb7bpbLJZlP8g2Y4XcCyFZW8uy8HsRZsH/SwbMw0plKHFHr99DN3l04VsYNwvzicUX/6qurvIxbxw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="StyleSheet" href="Style.css">
    </head>
    <body>
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
            </div>
        </nav>

        <div class="container">
            
            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3a/Ifes_campus_vitoria.jpg/1200px-Ifes_campus_vitoria.jpg"
                        alt="IFES Vitória">
                    <img class="overlay-image"
                        src="https://ui-avatars.com/api/?name=Juliana+Vix&background=random"
                        alt="Ju_VixDev">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Ju_VixDev</h3>
                    <p class="card-subtitle">
                        IFES - Campus Vitória
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>

            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://vilavelha.ifes.edu.br/images/stories/Campus_Vila_Velha/fotos_aereas/Foto-area-mar-2014.jpg"
                        alt="IFES Vila Velha">
                    <img class="overlay-image"
                        src="https://ui-avatars.com/api/?name=Marcos+Praia&background=random"
                        alt="MarcosPraia">
                </div>
                <div class="card-content">
                    <h3 class="card-title">MarcosPraia</h3>
                    <p class="card-subtitle">
                        IFES - Campus Vila Velha
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>

            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://serra.ifes.edu.br/images/imagens_noticias/2019/Fachada-Bloco-Central.jpg"
                        alt="IFES Serra">
                    <img class="overlay-image"
                        src="https://ui-avatars.com/api/?name=Beatriz+Robo&background=random"
                        alt="BiaRobotica">
                </div>
                <div class="card-content">
                    <h3 class="card-title">BiaRobotica</h3>
                    <p class="card-subtitle">
                          IFES - Campus Serra
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>

            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://colatina.ifes.edu.br/images/Phoca/Fachada-CT.jpg"
                        alt="IFES Colatina">
                    <img class="overlay-image"
                        src="https://ui-avatars.com/api/?name=Rafael+Souza&background=random"
                        alt="Rafa_Interior">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Rafa_Interior</h3>
                    <p class="card-subtitle">
                        IFES - Campus Colatina
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>

            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://saomateus.ifes.edu.br/images/campus/Fachada_Predio_Principal.jpg"
                        alt="IFES São Mateus">
                    <img class="overlay-image"
                        src="https://ui-avatars.com/api/?name=Camila+NorteES&background=random"
                        alt="MilaNorte">
                </div>
                <div class="card-content">
                    <h3 class="card-title">MilaNorte</h3>
                    <p class="card-subtitle">
                        IFES - Campus São Mateus
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>

            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://guarapari.ifes.edu.br/images/Campus/fotos_campus/fachada_principal_02.jpg"
                        alt="IFES Guarapari">
                    <img class="overlay-image"
                        src="https://ui-avatars.com/api/?name=Thiago+Sol&background=random"
                        alt="ThiagoSol">
                </div>
                <div class="card-content">
                    <h3 class="card-title">ThiagoSol</h3>
                    <p class="card-subtitle">
                        IFES - Campus Guarapari
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>

            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://cachoeiro.ifes.edu.br/images/stories/noticias/2018/outubro/Fachada_Noturna.jpg"
                        alt="IFES Cachoeiro">
                    <img class="overlay-image"
                        src="https://ui-avatars.com/api/?name=Fernanda+Sul&background=random"
                        alt="Fer_SulCapixaba">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Fer_SulCapixaba</h3>
                    <p class="card-subtitle">
                        IFES - Campus Cachoeiro de Itapemirim
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>

             <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://santateresa.ifes.edu.br/images/Imagens_Not%C3%ADcias/2023/Pr%C3%A9dio_Principal_-_Sede.jpeg"
                        alt="IFES Santa Teresa">
                    <img class="overlay-image"
                        src="https://ui-avatars.com/api/?name=Joao+Agro&background=random"
                        alt="JoaoAgroES">
                </div>
                <div class="card-content">
                    <h3 class="card-title">JoaoAgroES</h3>
                    <p class="card-subtitle">
                        IFES - Campus Santa Teresa
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>

        </div> <footer class="navbar bg-body-tertiary fixed-bottom">
            <div class="container-fluid d-flex justify-content-center">
                <div class="text-center">
                    <p class="mb-0">&copy; 2025 Rede de Permutação Federal. Todos os direitos reservados.</p>
                    <p class="mb-0">
                        <a href="Contato.php">Contato</a> |
                        <a href="Sobre.php">Sobre Nós</a>
                    </p>
                </div>
            </div>
        </footer>
    </body>
</html>