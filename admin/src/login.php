<?php
    if (isset($_POST['login'], $_POST['pass']) && $_POST['login'] != "" && $_POST['pass'] != ""){
        include './conexao.php';
        $db = getConexao();
        $sql = "SELECT * from admin WHERE login = :login AND pass = :pass";
        $statement = $db->prepare($sql);
        $values = array(
            'login'=>$_POST['login'],
            'pass'=>$_POST['pass']
        );
        $statement->execute($values);
        if ($statement->rowCount() > 0){
            $row = $statement->fetch();
            session_start();
            header('Location: ./../home.php');
        } else {
        }
    } else {
        echo "erro";
    }
?>