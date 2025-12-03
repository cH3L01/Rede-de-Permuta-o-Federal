<?php
    $logado = false;
?>

<html>

<!-- HEAD -->

    <head>
        <title>Rede de Permutação</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.7/css/bootstrap.min.css"
            integrity="sha512-fw7f+TcMjTb7bpbLJZlP8g2Y4XcCyFZW8uy8HsRZsH/SwbMw0plKHFHr99DN3l04VsYNwvzicUX/6qurvIxbxw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="StyleSheet" href="Style.css">

        <style>
            @font-face {
                font-family: 'FonteRedePermutacao';
                src: url('fonte.otf') format('opentype');
            }

            .fonte-customizada {
                font-family: 'FonteRedePermutacao', sans-serif;
            }
        </style>
    </head>

<!-- JAVASCRIPT -->

    <!-- Footer JAVASC -->
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

<!-- BODY -->

    <body>

        <?php
            session_start();
            $logado = false;

            function pop($mensagem) {
                echo "
                <div id='popup-msg' style='
                    position: fixed;
                    top: 20px;
                    right: 20px;
                    background: #333;
                    color: #fff;
                    padding: 15px 20px;
                    border-radius: 10px;
                    box-shadow: 0 0 15px rgba(0,0,0,0.3);
                    opacity: 0;
                    transition: opacity 0.4s ease;
                    z-index: 9999;
                    font-family: Arial;
                '>
                    $mensagem
                </div>

                <script>
                    const pop = document.getElementById('popup-msg');
                    pop.style.opacity = '1';

                    setTimeout(() => {
                        pop.style.opacity = '0';
                    }, 2500);

                    setTimeout(() => {
                        pop.remove();
                    }, 3000);
                </script>
                ";
            };

        ?>

        <!-- POP UP -->

        <?php
            if (isset($_SESSION['popup'])) {
                pop($_SESSION['popup']);
                unset($_SESSION['popup']); // evita repetir o popup no reload
            };
        ?>

        <?php
            if (isset($_SESSION['log'])) {
                $logado = $_SESSION['log'];
                unset($_SESSION['logado']); // evita repetir o popup no reload
            };
        ?>
        

        <!-- NavBar -->
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="logo.png" width="80"></a>
                <!-- Botoes -->
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <?php
                        if ($logado) {
                            echo htmlspecialchars($_SESSION['user']) . "</strong> está logado.</p>" .'<p><a href="sair.php"class="btn btn-danger" onclick="Sair()">Sair</a></p>';
                        } else {
                            echo '<p><a class="btn btn-success" href="Login.php">Login</a></p>';
                        }
                    ?>
                    <?php
                        if ($logado) {
                            echo '<p><a class="btn btn-success disabled" href="Cadastro.php">Cadastro</a></p>';
                        } else {
                            echo '<p><a class="btn btn-success" href="Cadastro.php">Cadastro</a></p>';
                        }
                    ?>
                    
                </div>
            </div>
        </nav>

        <!-- Botoes -->
        <div class="espaco">
            <p></p>
            <p><a class="btn btn-light" href="Transferencias.php">Transferências</a></p>
            <p><a class="btn btn-light" href="Sobre.php">Sobre Nós</a></p>
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
        <div style="max-width: 400px; margin: 20px auto;">
            <div id="br_mine"></div>
        </div>
        <script src="brmap.js"></script>
        <script>
             document.addEventListener('DOMContentLoaded', () => {
                BrMap.Draw({
                    wrapper: '#br_mine',
                    // Opcional: se a lib usa selectStates apenas para estilo/seleção visual
                    selectStates: ['BA'],
                    callbacks: {
                        click: async (element, uf) => {
                            const state = (uf || '').toLowerCase();
                            const file = state + '.php';

                            try {
                                const response = await fetch(file, { method: 'HEAD' });

                                if (response.ok) {
                                    // Arquivo existe → redireciona
                                    window.location.href = file;
                                } else {
                                    // Arquivo não existe
                                    console.log("Arquivo não encontrado:", file);
                                }
                            } catch (err) {
                                console.log("Erro ao baixar arquivo:", err);
                            }
                        },
                    },
                });
            });
        </script>
    























        <!-- <script>
            document.addEventListener('DOMContentLoaded', () => {
            BrMap.Draw({
                wrapper: '#br_mine',

                selectStates: ['BA'],
                callbacks: {
                click: (element, uf) => {

                    const state = (uf || '').toUpperCase();

                    if (state === 'BA') {
                    window.location.href = state.toLowerCase() + '.php'; 
                    return;
                    }


                    return false;
                },
                },
            });
        }); 
        </script> -->
    </body>

</html>