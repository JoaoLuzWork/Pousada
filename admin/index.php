<?php 
    require_once __DIR__ . '/../vendor/autoload.php';

    $loader = new \Twig\Loader\FilesystemLoader('./views');
    $twig = new \Twig\Environment($loader);

    if(isset($_GET['msg'])){
        switch ($_GET['msg']){
            case "erro_Login":
                $msg = "Falha no login!";
                break; 
            default:
                $msg = '<Erro!';
                break;
        }
    }
    $dados = array(
        'msg' => $msg
    );

    $template = $twig->load('./index.twig');
    echo $template->render($dados);