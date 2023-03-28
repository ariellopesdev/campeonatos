<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="estilo/styles.css" rel="stylesheet" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="keywords" content="palavras-chave, do, meu, site">
    <meta name="description" content="Portfólio">
    <meta name="author" content="Ariel Lopes">
    <!-- <link rel="icon" href="favicon.ico" type="image/x-icon" /> -->
    <title>Crie seu Campeonato</title>
</head>

<body>
    <base base="<?php echo INCLUDE_PATH; ?>" />
    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        switch ($url) {
            case 'depoimentos':
                echo '<target target="depoimentos" />';
                break;
            case 'servicos':
                echo '<target target="servicos" />';
                break;
        }
    ?>
    <header>
        <div class="center">
            <div id="brand-logo" class="left">
                <a href="<?php echo INCLUDE_PATH; ?>" class="left">
                    <img src="imagens/randPlay.png" alt="">
                </a>
                <p class="left">Crie com randPlay seu próprio campeonato</p>
                <div class="clear"></div>
            </div>
            <nav id="nav-btn" class="right">
                <button><i class="fa fa-globe" aria-hidden="true"></i><i class="fa fa-caret-down" aria-hidden="true"></i></button>
                <button><a href="<?php echo INCLUDE_PATH; ?>login">Entrar <i class="fa fa-caret-right" aria-hidden="true"></i></a></button>
                <button><a href="<?php echo INCLUDE_PATH; ?>login">Cadastre-se <i class="fa fa-caret-right" aria-hidden="true"></i></a></button>
            </nav>
            <div class="clear"></div>
        </div>
    </header>
    <main>
        <?php
        if (file_exists('pages/' . $url . '.php')) {
            include('pages/' . $url . '.php');
        } else {
            if ($url != 'depoimentos' && $url != 'servicos') {
                $urlPar = explode('/', $url)[0];
                if ($urlPar != 'noticias') {
                    $pagina404 = true;
                    include('pages/404.php');
                } else {
                    include('pages/noticias.php');
                }
            } else {
                include('pages/home.php');
            }
        }
        ?>
    </main>
    <footer>
        <nav id="links">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Sobre Nós</a></li>
                <li><a href="">Novidades</a></li>
                <li><a href="">Contato</a></li>
                <li><a href="">Suporte</a></li>
            </ul>
        </nav>
        <nav id="politics">
            <ul>
                <li><a href="">Política de Privacidade</a></li>
                <li><a href="">Termos de Uso</a></li>
            </ul>
        </nav>
        <nav id="icons">
            <ul>
                <li><a href=""><i class="fa fa-facebook-official" aria-hidden="true" target="_blank"></i></a></li>
                <li><a href=""><i class="fa fa-youtube-play" aria-hidden="true" target="_blank"></i></a></li>
                <li><a href=""><i class="fa fa-twitter" aria-hidden="true" target="_blank"></i></a></li>
                <li><a href=""><i class="fa fa-google-plus" aria-hidden="true" target="_blank"></i></a></li>
            </ul>
        </nav>
        <p>&copy; randPlay 2023. Todos os direitos reservados.</p>
    </footer>
    <script src="js/scripts.js"></script>
    <script src="js/constants.js"></script>
</body>

</html>