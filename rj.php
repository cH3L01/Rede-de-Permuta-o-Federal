<html>
    <head>
        <title>Instituições - RJ</title>
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
                        src="https://portal.ifrj.edu.br/sites/default/files/styles/noticias_internas/public/field/image/fachada_campus_maracana.jpg"
                        alt="IFRJ Maracanã">
                    <img class="overlay-image"
                        src="https://ui-avatars.com/api/?name=Gabriel+Carioca&background=random"
                        alt="Gabs_RJ">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Gabs_RJ</h3>
                    <p class="card-subtitle">
                        IFRJ - Campus Rio de Janeiro
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>

            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Cefet-rj-maracan%C3%A3-frente.jpg/1200px-Cefet-rj-maracan%C3%A3-frente.jpg"
                        alt="CEFET/RJ Maracanã">
                    <img class="overlay-image"
                        src="https://ui-avatars.com/api/?name=Roberto+Eng&background=random"
                        alt="Beto_Engenharia">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Beto_Engenharia</h3>
                    <p class="card-subtitle">
                        CEFET/RJ - Unidade Maracanã
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>

            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://portal.ifrj.edu.br/sites/default/files/styles/noticias_internas/public/field/image/fachada_nilopolis_1.jpg"
                        alt="IFRJ Nilópolis">
                    <img class="overlay-image"
                        src="https://ui-avatars.com/api/?name=Dani+Quimica&background=random"
                        alt="DaniQuimica">
                </div>
                <div class="card-content">
                    <h3 class="card-title">DaniQuimica</h3>
                    <p class="card-subtitle">
                          IFRJ - Campus Nilópolis
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>

            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://portal1.iff.edu.br/nossos-campi/campos-centro/imagens/fachada-do-campus-centro.jpg/@@images/image.jpeg"
                        alt="IFF Campos dos Goytacazes">
                    <img class="overlay-image"
                        src="https://ui-avatars.com/api/?name=Mariana+Norte&background=random"
                        alt="Mari_Campos">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Mari_Campos</h3>
                    <p class="card-subtitle">
                        IFF - Campus Campos Centro
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>

            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://portal1.iff.edu.br/nossos-campi/cabo-frio/noticias/2019/iff-cabo-frio-divulga-nota-sobre-bloqueio-orcamentario/fachada-cabo-frio-aerea.jpg/@@images/image.jpeg"
                        alt="IFF Cabo Frio">
                    <img class="overlay-image"
                        src="https://ui-avatars.com/api/?name=Andre+Surf&background=random"
                        alt="AndrePraia">
                </div>
                <div class="card-content">
                    <h3 class="card-title">AndrePraia</h3>
                    <p class="card-subtitle">
                        IFF - Campus Cabo Frio
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>

            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://www.cefet-rj.br/images/stories/unidades/petropolis/fachada_campus_petropolis.jpg"
                        alt="CEFET Petrópolis">
                    <img class="overlay-image"
                        src="https://ui-avatars.com/api/?name=Pedro+Imperial&background=random"
                        alt="PedroImperial">
                </div>
                <div class="card-content">
                    <h3 class="card-title">PedroImperial</h3>
                    <p class="card-subtitle">
                        CEFET/RJ - Campus Petrópolis
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>

            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://portal.ifrj.edu.br/sites/default/files/styles/noticias_internas/public/field/image/duque_de_caxias.jpg"
                        alt="IFRJ Duque de Caxias">
                    <img class="overlay-image"
                        src="https://ui-avatars.com/api/?name=Lucas+Baixada&background=random"
                        alt="LucasBaixada">
                </div>
                <div class="card-content">
                    <h3 class="card-title">LucasBaixada</h3>
                    <p class="card-subtitle">
                        IFRJ - Campus Duque de Caxias
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>

             <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://portal1.iff.edu.br/nossos-campi/macae/imagens/imagens-das-noticias/aerea-campus-macae/@@images/image.jpeg"
                        alt="IFF Macaé">
                    <img class="overlay-image"
                        src="https://ui-avatars.com/api/?name=Clara+Oil&background=random"
                        alt="Clara_Macae">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Clara_Macae</h3>
                    <p class="card-subtitle">
                        IFF - Campus Macaé
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>

            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://portal.ifrj.edu.br/sites/default/files/styles/noticias_internas/public/field/image/arraial_do_cabo.jpg"
                        alt="IFRJ Arraial do Cabo">
                    <img class="overlay-image"
                        src="https://ui-avatars.com/api/?name=Solange+Mar&background=random"
                        alt="Sol_Arraial">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Sol_Arraial</h3>
                    <p class="card-subtitle">
                        IFRJ - Campus Arraial do Cabo
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