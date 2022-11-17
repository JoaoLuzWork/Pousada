<?php
    require_once __DIR__ . '/vendor/autoload.php';
    
    $loader = new \Twig\Loader\FilesystemLoader('./views');
    $twig = new \Twig\Environment($loader);

    include './conexoo.php';
    $db = getConexao();
    $sql = "SELECT * FROM produtos";
    $statement = $db->prepare($sql);
    $statement->execute();

    $dados = array(
    );

    $template = $twig->load('contato.twig');
    echo $template->render($dados);