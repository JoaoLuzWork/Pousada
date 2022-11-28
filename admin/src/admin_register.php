<?php
    if (isset($_POST['login'], $_POST['password'], $_POST['admin']) && $_POST['login'] != "" && $_POST['pass'] != "" && $_POST['admin'] != ""){
        include './conexao.php';
        $db = getConexao();
        $sql = "INSERT INTO admin (login, pass, admin_cond) VALUES (:login, :pass, :admin_cond)";
        $statement = $db->prepare($sql);
        $password_md5 = md5($_POST['pass']);
        $values = array(
            'login'=>$_POST['login'],
            'pass'=>$password_md5,

        );
        $statement->execute($values);
        header('Location: ./../home.php');
    } else {
        header('Location: form_admin_register.php?msg=need');
    }
?>