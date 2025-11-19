<html>

    <head>
        <title>Instituições</title>
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
                        src="https://tse4.mm.bing.net/th/id/OIP.uLryY6laK2LzbGH9EZonxgHaE5?r=0&rs=1&pid=ImgDetMain&o=7&rm=3"
                        alt="Instituto Federal Baiano">
                    <img class="overlay-image"
                        src="https://static.wixstatic.com/media/6e18d1_2a4bad2c03b840d6b6db7125f650570a~mv2.jpg/v1/fill/w_460,h_680,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/1696966847504.jpg"
                        alt="Roberto faria">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Roberto Faria</h3>
                    <p class="card-subtitle">
                        Instituto Federal Baiano
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>
            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://portal.ifba.edu.br/euclides-da-cunha/fotos-campus-euclides/imagem_campus_euclides.jpg"
                        alt="Instituto Federal da Bahia - Campus Euclides da Cunha">
                    <img class="overlay-image"
                        src="https://media-gru2-2.cdn.whatsapp.net/v/t61.24694-24/514845267_545562048637536_4438778594157357897_n.jpg?ccb=11-4&oh=01_Q5Aa2gFoqiN-bG5_83ffCxsNnnyQxaf7SPw3EITp0LRuFVbWlA&oe=68D9D338&_nc_sid=5e03e0&_nc_cat=103"
                        alt="Joãozin">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Joãozin</h3>
                    <p class="card-subtitle">
                        Instituto Federal da Bahia - Campus Euclides da Cunha
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>


            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://th.bing.com/th/id/R.b8ab2544d60b1498fc7f878761a2b43f?rik=4yr0K9NgfCh5JQ&riu=http%3a%2f%2f3.bp.blogspot.com%2f_qMjUxW6_I7E%2fSfOp6GixxYI%2fAAAAAAAAAfM%2fSomWnFYRNCg%2fw1200-h630-p-k-no-nu%2f74990.jpg&ehk=cdbLLoqKEDhGTixbXyXPaHiC249NrKaFrS9vNWIoYLc%3d&risl=&pid=ImgRaw&r=0"
                        alt="Campus CEFET-BA">
                    <img class="overlay-image"
                        src="https://media-gru2-2.cdn.whatsapp.net/v/t61.24694-24/458203255_3729666637349743_1186090129003612479_n.jpg?ccb=11-4&oh=01_Q5Aa2gH8oDqAMsNUhWH9BF8luZoqLGDmrrv75MvAT_BdRw0ZEg&oe=68D9A4D2&_nc_sid=5e03e0&_nc_cat=101"
                        alt="PerpetoJK">
                </div>
                <div class="card-content">
                    <h3 class="card-title">PerpetoJK</h3>
                    <p class="card-subtitle">
                        CEFET-BA
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>
        </div>
        <footer class="navbar bg-body-tertiary fixed-bottom">
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