<?php
    if (isset($_POST['login'], $_POST['pass']) && $_POST['login'] != "" && $_POST['pass'] != ""){
        include './conexao.php';
        $db = getConexao();
        $sql = "SELECT * from admin WHERE login = :login AND pass = :pass";
        $statement = $db->prepare($sql);
        $password_md5 = md5($_POST['pass']); 
        $values = array(
            'login'=>$_POST['login'],
            'pass'=>$_POST['pass']
        );
        $statement->execute($values);
        header('Location: ./../home.php');
    } else {
        echo "erro";
    }
?>