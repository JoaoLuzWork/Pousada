<?php
  if (isset($_POST['estado']) && $_POST['estado'] != ""){
        require_once './conexao.php';
        //To edit almost all informations in DB of one especicly id
        $db = getConexao();
        $sql = "UPDATE quartos SET estado = :estado";
        $statement = $db->prepare($sql);
        $values = array(
            'estado'=>$_POST['estado'],
        );
        
        $statement->execute($values);
        header('Location: ');
    } else {
        echo '<p>Incomplete data! User has not been changed.</p>';
    }