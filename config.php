<?php
    session_start();
    date_default_timezone_set('America/Sao_Paulo');

    define('INCLUDE_PATH','http://localhost/campeonatos/');//url amigável
    define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');
    define('BASE_DIR_PAINEL',__DIR__.'/painel');
    
    //Conectar com banco de dados
    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','randplay');

    //Constantes para o painel de controle
    define('NOME_EMPRESA','randPlay');

    // Funções do Painel
    function pegaCargo($indice){
        return Painel::$cargos [$indice];
    }

    function selecionadoMenu($par){
        // <i class="fa fa-angle-double-right" aria-hidden="true"></i>
        $url = explode('/',@$_GET['url'])[0];
        if($url == $par){
            echo 'class="menu-active"';
        }
    }
    
    function verificaPermissaoMenu($permissao){
        if($_SESSION['cargo'] >= $permissao){
            return;
        }else{
            echo 'style="display: none;"';
        }
    }
    function verificaPermissaoPagina($permissao){
        if($_SESSION['cargo'] >= $permissao){
            return;
        }else{
            include('painel/pages/permissao-negada.php');
            die();
        }
    }
    function recoverPost($post){
        if(isset($_POST[$post])){
            echo $_POST[$post];
        }
    }
?>