<?php
    require_once __DIR__ . '/vendor/autoload.php';
    require_once './dispositivo.php';

    $loader = new \Twig\Loader\FilesystemLoader('./views');
    $twig = new \Twig\Environment($loader);

    include './conexoo.php';
    $db = getConexao();
    $sql = "SELECT * FROM produtos";
    $statement = $db->prepare($sql);
    $statement->execute();

    $dados = array(

        "dispositivo" => $dispositivo,
    );

    $template = $twig->load('index.twig');
    echo $template->render($dados);
