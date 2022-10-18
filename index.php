<?php
    require_once __DIR__ . '/vendor/autoload.php';
    
    $loader = new \Twig\Loader\FilesystemLoader('./views');
    $twig = new \Twig\Environment($loader);

    include './conexoo.php';
    $db = getConexao();
    $sql = "SELECT * FROM produtos";
    $statement = $db->prepare($sql);
    $statement->execute();


   /*  while ($row = $statement->fetch()) {
        $produtos[] = new Produto($row["name"], $row["value"], $row["custo"], $row["estoque"]); 
    }
     */
    $parametros = [];
    $template = $twig->load('index.twig');
    echo $template->render($parametros);


