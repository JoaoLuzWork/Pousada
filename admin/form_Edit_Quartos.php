<?php
    require_once __DIR__ . '/../vendor/autoload.php';
    require_once './src/conexao.php';
    require_once "./src/Quarto.php";

    $loader = new \Twig\Loader\FilesystemLoader('./views');
    $twig = new \Twig\Environment($loader);

    $db = getConexao();
    $sql = "SELECT * FROM quartos";
    $statement = $db->prepare($sql);
    $statement->execute();

    while ($row = $statement->fetch()) {
        $quartos[] = new Quartos($row["id"], $row["estado"]); 
    }

     if ($_SESSION['admin_cond'] == 1){
        
        header('Location:index.php?msg=noPermission');

    } 
    
    $parametros = ['quartos' => $quartos];
    $template = $twig->load('./form_Edit_Quartos.twig');
    echo $template->render($parametros);
?>