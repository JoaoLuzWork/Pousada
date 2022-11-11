<?php
    require_once __DIR__ . './vendor/autoload.php';
    
    $loader = new \Twig\Loader\FilesystemLoader('./views');
    $twig = new \Twig\Environment($loader);

    include './conexoo.php';
    $db = getConexao();
    $sql = "SELECT * FROM produtos";
    $statement = $db->prepare($sql);
    $statement->execute();

    $dados = array(

        "title" => "Home",
        "Matriz2x" => "Calcular matriz 2x2:",
        "Matriz3X" => "Calcular matriz 3x3:",
        "escolha" => "Escolha qual tamanho de matriz deseja calcular:"
        
    );

    $template = $twig->load('sobre.twig');
    echo $template->render($dados);