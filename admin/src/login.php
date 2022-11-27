<?php
    if (isset($_POST['login'], $_POST['pass']) && $_POST['login'] != "" && $_POST['pass'] != ""){
        include './conexao.php';
        $db = getConexao();
        $sql = "SELECT * from admin WHERE login = :login AND pass = :pass";
        $statement = $db->prepare($sql);
        $password_md5 = md5($_POST['pass']);
        $values = array(
            'login'=>$_POST['login'],
            'pass'=>$password_md5
        );
        $statement->execute($values);
        if ($statement->rowCount() > 0){
            $row = $statement->fetch();
            session_start();
            header('Location: ./../home.php');
        } else {
            header('Location: ./../index.php?msg=erro_Login');
        }
    } else {
        echo "erro";
    }
?>