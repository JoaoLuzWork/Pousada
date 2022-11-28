<?php 
    require_once __DIR__ . '/../vendor/autoload.php';

    $loader = new \Twig\Loader\FilesystemLoader('./views');
    $twig = new \Twig\Environment($loader);
    
   /*  
   if($_GET['msg']){
        switch ($_GET['msg']){
            case "erro_Login":
                $msg = "Falha no login!";
                break; 
            case "noPermission":
                $msg = "Você não tem permissão!";
                break; 
            default:
                $msg = '';
                break;
        }
    }
    */
    $dados = array(

    );

    $template = $twig->load('./index.twig');
    echo $template->render($dados);