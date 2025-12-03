<html>
    <head>
        <title>Instituições</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.7/css/bootstrap.min.css"
            integrity="sha512-fw7f+TcMjTb7bpbLJZlP8g2Y4XcCyFZW8uy8HsRZsH/SwbMw0plKHFHr99DN3l04VsYNwvzicUX/6qurvIxbxw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"/>
        <link rel="styleSheet" href="Style.css">
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
        <div>
            <p>  </p>
        </div>
        <div class="container">
            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://portal.redefederal.org.br/images/compressed/galeria/iftm/campus-uberlandia-centro.webp"
                        alt="Instituto Federal do Triângulo Mineiro">
                    <img class="overlay-image"
                        src="https://static.wixstatic.com/media/6e18d1_2a4bad2c03b840d6b6db7125f650570a~mv2.jpg/v1/fill/w_460,h_680,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/1696966847504.jpg"
                        alt="Roberto faria">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Roberto Faria</h3>
                    <p class="card-subtitle">
                        IFMG - Campus Triângulo Mineiro
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>

            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://portal.redefederal.org.br/images/compressed/galeria/ifnmg/_mg_2443.webp"
                        alt="Instituto Federal do Norte de Minas Gerais - Arinos">
                    <img class="overlay-image"
                        src="https://media-gru2-2.cdn.whatsapp.net/v/t61.24694-24/514845267_545562048637536_4438778594157357897_n.jpg?ccb=11-4&oh=01_Q5Aa2gFoqiN-bG5_83ffCxsNnnyQxaf7SPw3EITp0LRuFVbWlA&oe=68D9D338&_nc_sid=5e03e0&_nc_cat=103"
                        alt="Joãozin">
                </div>
                <div class="card-content">
                    <h3 class="card-title">Joãozin</h3>
                    <p class="card-subtitle">
                        IF Norte MG - Campus Arinos
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>

            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://www.ifmg.edu.br/portal/imagens/congonhas-novo.png/@@images/6d790c14-ffba-4f14-9d28-49b21d80d327.png"
                        alt=" CAMPUS CONGONHAS">
                    <img class="overlay-image"
                        src="https://media-gru2-2.cdn.whatsapp.net/v/t61.24694-24/458203255_3729666637349743_1186090129003612479_n.jpg?ccb=11-4&oh=01_Q5Aa2gH8oDqAMsNUhWH9BF8luZoqLGDmrrv75MvAT_BdRw0ZEg&oe=68D9A4D2&_nc_sid=5e03e0&_nc_cat=101"
                        alt="PerpetoJK">
                </div>
                <div class="card-content">
                    <h3 class="card-title">PerpetoJK</h3>
                    <p class="card-subtitle">
                          IFMG - Campus Congonhas
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>

            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://www.ifmg.edu.br/portal/imagens/IFMGCampusConselheiroLafaiete.jpg/@@images/283a5975-b008-40f0-a690-cacf5fd605a6.jpeg"
                        alt="CAMPUS CONSELHEIRO LAFAIETE">
                    <img class="overlay-image"
                        href="saitama.png"
                        alt="ArthurSTM">
                </div>
                <div class="card-content">
                    <h3 class="card-title">ArthurSTM</h3>
                    <p class="card-subtitle">
                        IFMG - Campus Conselheiro Lafaiete
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>

            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://www.ifmg.edu.br/ribeiraodasneves/noticias/2019/campus-ribeirao-das-neves-abre-inscricoes-para-curso-de-pos-graduacao-gratuito/fachada-campus-ribeirao-das-neves.jpeg/@@images/image.jpeg"
                        alt="IFMG Ribeirão das Neves">
                    <img class="overlay-image"
                        src="https://lh3.googleusercontent.com/gg-dl/ABS2GSlsxC7UCdCi6HmghcEQzRTV01xM28dXNB-b8RCFz6F-4hOJMpZ4hO-Uq2bNrNJXl-oPT2SgAvF-cJNAWg5rSkgDo2Dcfntp1dELlz-jgLFghIf6QlrSoEhNVimNI9y9n3BikT39YUq0mp0xO_tbMCzjoy-4C2kwLGc7nSg1mcVQRkIs=s1024-rj"
                        alt="DudaSantos">
                </div>
                <div class="card-content">
                    <h3 class="card-title">DudaSantos</h3>
                    <p class="card-subtitle">
                        IFMG - Campus Ribeirão das Neves
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>

            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://www.ifmg.edu.br/ouropreto/noticias/imagens-noticias-2019/fachada-predio-principal.jpg/@@images/image.jpeg"
                        alt="IFMG Ouro Preto">
                    <img class="overlay-image"
                        src="https://lh3.googleusercontent.com/gg-dl/ABS2GSkBqfuSSONzFVtq3DAj3Yd7sUyQuzKyjia0S2hrGnZqwL4SvJsj9EDKX4PlxyshOMPz5DxYZr_h0UZUZI214Y6022LbM9osecBWbAetwSHSqMFCyexenCqS2BiQYFn_1kq8BlSpXjh7XGetBuuUoowbETqiO91vIQ0PvFvKTD7sFhjFbQ=s1024-rj"
                        alt="LucasMineiro">
                </div>
                <div class="card-content">
                    <h3 class="card-title">LucasMineiro</h3>
                    <p class="card-subtitle">
                        IFMG - Campus Ouro Preto
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>

            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://www.ifmg.edu.br/portal/imagens/logomarcas-e-fotos-dos-campi/bambui/bambui_aerea2.jpg/@@images/image.jpeg"
                        alt="IFMG Bambuí">
                    <img class="overlay-image"
                        src="https://lh3.googleusercontent.com/gg-dl/ABS2GSnHwu0LuTBerY4OSszJeQiceDTFluAA4y9fecnDrO0DFNJqSQlKHoIbAruFFP4_k0ISIiubAyO7DDKYSmBuFNzrJ6zFKYbIMBU1X8_nFhGBphjcB2UedPZzaIVEX8yZ9zp0W8EPQbZ4Le68k2BBkv2N7n_XrlMADB2DWAQa6m1DaJCRzA=s1024-rj"
                        alt="AnaVet">
                </div>
                <div class="card-content">
                    <h3 class="card-title">AnaVet</h3>
                    <p class="card-subtitle">
                        IFMG - Campus Bambuí
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>

            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Cefet-mg-campus-I-pr%C3%A9dio-escolar.jpg/1200px-Cefet-mg-campus-I-pr%C3%A9dio-escolar.jpg"
                        alt="CEFET-MG Belo Horizonte">
                    <img class="overlay-image"
                        src="https://lh3.googleusercontent.com/gg-dl/ABS2GSkwhEs14v8dCfZg1Uq6fVqCaKGNGVqx_u5s0U8TsJXFgCUGHyDv5LqcMEYq7cpASA098kzsWZBuGT1XdSNbDHlOIhDWj0QyIQBvfZqr9Dw3Ufjwq3IejfB6P_XT1UxDFcuZv6YtVjlKJ7ZR1wXXTB3P2uEfN4MlmSL0kn8uuKTy25v5TQ=s1024-rj"
                        alt="RicardoTech">
                </div>
                <div class="card-content">
                    <h3 class="card-title">RicardoTech</h3>
                    <p class="card-subtitle">
                        CEFET-MG - Belo Horizonte
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>

            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://www.ifnmg.edu.br/images/montesclaros/2014/fachada.jpg"
                        alt="IFNMG Montes Claros">
                    <img class="overlay-image"
                        src="https://lh3.googleusercontent.com/gg-dl/ABS2GSn9G1Id1sob0rbbGasStTXVNxxioawJuEe2HcyPlwUOU-g1-n1hf-xdp1FKIJTAKF1ICi8YnXTkbh51lx9gGDUELKDepm50XEj9lvX0JgvErCAK-c5dB7PZezzMJufy6HmAcqsWsKEFtOR-MLUC91ArApwl8nW-Frgj30eBbz0Rwp7uTA=s1024-rj"
                        alt="CarlaNorte">
                </div>
                <div class="card-content">
                    <h3 class="card-title">CarlaNorte</h3>
                    <p class="card-subtitle">
                        IF Norte MG - Campus Montes Claros
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>

            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://www.ifnmg.edu.br/images/januaria/GALERIA_DE_FOTOS/CAMPUS/predio_escolar_I_frente.jpg"
                        alt="IFNMG Januária">
                    <img class="overlay-image"
                        src="https://ui-avatars.com/api/?name=Pedro+Agro&background=random"
                        alt="PedroAgro">
                </div>
                <div class="card-content">
                    <h3 class="card-title">PedroAgro</h3>
                    <p class="card-subtitle">
                        IF Norte MG - Campus Januária
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>

            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://portal.ifsuldeminas.edu.br/images/2021/04/campus_muzambinho.jpg"
                        alt="IFSULDEMINAS Muzambinho">
                    <img class="overlay-image"
                        src="https://ui-avatars.com/api/?name=Cafe+Zinho&background=random"
                        alt="CafeZinho">
                </div>
                <div class="card-content">
                    <h3 class="card-title">CafeZinho</h3>
                    <p class="card-subtitle">
                        IF Sul MG - Campus Muzambinho
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>

            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://portal.ifsuldeminas.edu.br/images/2021/04/campus_pouso_alegre.jpg"
                        alt="IFSULDEMINAS Pouso Alegre">
                    <img class="overlay-image"
                        src="https://ui-avatars.com/api/?name=Mariana+Eng&background=random"
                        alt="MarianaEng">
                </div>
                <div class="card-content">
                    <h3 class="card-title">MarianaEng</h3>
                    <p class="card-subtitle">
                        IF Sul MG - Campus Pouso Alegre
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>

            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://www.ifsudestemg.edu.br/juizdefora/institucional/o-campus/imagens/fachada-jf.jpg"
                        alt="IF Sudeste Juiz de Fora">
                    <img class="overlay-image"
                        src="https://ui-avatars.com/api/?name=Jota+Efe&background=random"
                        alt="JotaEfe">
                </div>
                <div class="card-content">
                    <h3 class="card-title">JotaEfe</h3>
                    <p class="card-subtitle">
                        IF Sudeste MG - Campus Juiz de Fora
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>

            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://www.ifsudestemg.edu.br/barbacena/institucional/o-campus/imagens-o-campus/predio-central.jpg"
                        alt="IF Sudeste Barbacena">
                    <img class="overlay-image"
                        src="https://ui-avatars.com/api/?name=Babi+Cena&background=random"
                        alt="BabiCena">
                </div>
                <div class="card-content">
                    <h3 class="card-title">BabiCena</h3>
                    <p class="card-subtitle">
                        IF Sudeste MG - Campus Barbacena
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>

            <div class="card">
                <div class="card-image-container">
                    <img class="main-image"
                        src="https://iftm.edu.br/midias/imagens/2019/08/campus-uberaba-1.jpg"
                        alt="IFTM Uberaba">
                    <img class="overlay-image"
                        src="https://ui-avatars.com/api/?name=Zebu+Tec&background=random"
                        alt="ZebuTec">
                </div>
                <div class="card-content">
                    <h3 class="card-title">ZebuTec</h3>
                    <p class="card-subtitle">
                        IFTM - Campus Uberaba
                    </p>
                </div>
                <div class="card-content">
                    <p><button class="btn btn-dark" disabled href="Link.com">Contatar</button></p>
                </div>
            </div>
        </div> 
        <div>
            <p> </p>
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