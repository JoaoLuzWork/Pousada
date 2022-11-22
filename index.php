<?php
    require_once __DIR__ . '/vendor/autoload.php';
    require_once './src/dispositivo.php';

    $loader = new \Twig\Loader\FilesystemLoader('./views');
    $twig = new \Twig\Environment($loader);

    $dados = array(

        "dispositivo" => $dispositivo,
    );

    $template = $twig->load('index.twig');
    echo $template->render($dados);
