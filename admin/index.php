<?php 
    if(isset($_SESSION['']))
    {
        header('location: home.php');
    }

    require_once __DIR__ . '/../vendor/autoload.php';

    $loader = new \Twig\Loader\FilesystemLoader('./views');
    $twig = new \Twig\Environment($loader);

    $dados = array(

    );

    $template = $twig->load('./index.twig');
    echo $template->render($dados);