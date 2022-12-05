<?php
    require_once './conexao.php';
    $db = getConexao();
    $sql = "INSERT INTO `quartos` (`id`, `estado`) VALUES ('NULL', 'livre')";
    $statement = $db->prepare($sql);
    $statement->execute();
    header('location: ./../form_Edit_Quartos.php');
?>