<?php
if (isset($_GET['loggout'])) {
    Painel::loggout();
}
?>
<html>

<head>
    <title>Painel de Controle</title>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH_PAINEL; ?>css/style.css" rel="stylesheet" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave, do, meu, site">
    <meta name="description" content="Descrição do meu website">
    <meta name="author" content="Ariel Lopes">
    <meta charset="utf-8" />
    <link rel="icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico" type="image/x-icon" />
</head>

<body>
    <div class="menu">
        <div class="menu-wraper">
            <div class="box-usuario">
                <?php
                    if ($_SESSION['img'] == '') {
                ?>
                    <div class="avatar-usuario">
                        <i class="fa fa-user"></i>
                    </div>
                    <!--avatar-usuario-->
                <?php }else { ?>
                    <div class="imagem-usuario">
                        <img src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $_SESSION['img']; ?>" />
                    </div>
                    <!--avatar-usuario-->
                <?php } ?>
                <div class="nome-usuario">
                    <p><?php echo $_SESSION['nome']; ?></p>
                    <p><?php echo pegaCargo($_SESSION['cargo']); ?></p>
                </div>
                <!--nome-usuario-->
            </div>
            <!--box-usuario-->
            <div class="items-menu">
                <h2>Cadastro</h2>
                
                <a <?php selecionadoMenu('cadastrar-depoimento');?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-depoimento">Cadastrar Depoimento</a>
                <a <?php selecionadoMenu('cadastrar-servico');?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-servico">Cadastrar Serviços</a>
                <a <?php selecionadoMenu('cadastrar-slides');?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-slides">Cadastrar Slides</a>
                <h2>Gestão</h2>
                <a <?php selecionadoMenu('listar-depoimentos');?> href="<?php echo INCLUDE_PATH_PAINEL ?>listar-depoimentos">Listar Depoimento</a>
                <a <?php selecionadoMenu('listar-servicos');?> href="<?php echo INCLUDE_PATH_PAINEL ?>listar-servicos">Listar Serviços</a>
                <a <?php selecionadoMenu('listar-slides');?> href="<?php echo INCLUDE_PATH_PAINEL ?>listar-slides">Listar Slides</a>
                <h2>Administração do Painel</h2>
                <a <?php selecionadoMenu('editar-usuario');?> href="<?php echo INCLUDE_PATH_PAINEL?>editar-usuario">Editar Usuário</a>
                <a <?php selecionadoMenu('adicionar-usuario');?> <?php verificaPermissaoMenu(2);?> href="<?php echo INCLUDE_PATH_PAINEL?>adicionar-usuario">Adicionar Usuário</a>
                <h2>Configuração Geral</h2>
                <a <?php selecionadoMenu('editar-site');?> href="<?php echo INCLUDE_PATH_PAINEL?>editar-site">Editar Site</a>
                <h2>Gestão de Notícias</h2>
                <a <?php selecionadoMenu('cadastrar-categorias');?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-categorias">Cadastrar Categorias</a>
                <a <?php selecionadoMenu('gerenciar-categorias');?> href="<?php echo INCLUDE_PATH_PAINEL ?>gerenciar-categorias">Gerenciar Categorias</a>
                <a <?php selecionadoMenu('cadastrar-noticias');?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-noticias">Cadastrar Notícias</a>
                <a <?php selecionadoMenu('gerenciar-noticias');?> href="<?php echo INCLUDE_PATH_PAINEL ?>gerenciar-noticias">Gerenciar Notícias</a>
            </div>
            <!--items-menu-->
        </div>
        <!--menu-wraper-->
    </div>
    <header>
        <div class="center">
            <div class="menu-btn">
                <i class="fa fa-bars"></i>
            </div>
            <!--menu-btn-->
            <div class="loggout">
                <a <?php if(@$_GET['url'] == ''){ ?>style="background: #60727a; padding:10px 15px;" <?php } ?> href="<?php echo INCLUDE_PATH_PAINEL ?>"><i class="fa fa-home"></i><span>   Página Inicial</span></a>
                <a href="<?php echo INCLUDE_PATH_PAINEL ?>?loggout"><i class="fa fa-sign-out"></i><span>   Sair</span></a>
            </div>
            <!--loggout-->
            <div class="clear"></div>
        </div>
        <!--center-->
    </header>
    <div class="content">
        <?php Painel::carregarPagina(); ?>
    </div>
    <!--content-->
    <script src="<?php echo INCLUDE_PATH ?>JS/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL ?>JS/jquery.mask.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL ?>JS/main.js"></script>
    <script src="<?php echo INCLUDE_PATH ?>JS/formularios.js"></script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: '.tinymce',
            plugins: "image",
            height: 300,
        })
    </script>
</body>

</html>