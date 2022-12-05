<?php 
    require_once __DIR__ . '/../vendor/autoload.php';

    $loader = new \Twig\Loader\FilesystemLoader('./views');
    $twig = new \Twig\Environment($loader);
   
    $dados = array(
        
    );
    
    $template = $twig->load('./novas_reservas.twig');
    echo $template->render($dados);