<?php
  if (isset($_POST['estado']) && $_POST['estado'] != "" && $_GET['id'] != ""){
    require_once './conexao.php';
    //To edit almost all informations in DB of one especificly id
    $db = getConexao();
    $sql = "UPDATE quartos SET estado = :estado WHERE id = :id";
    $statement = $db->prepare($sql);
    $values = array(
        'estado'=>$_POST['estado'],
        'id'=>$_GET['id']
    );
    $statement->execute($values);
    header('Location: ../form_Edit_Quartos.php');
   

} else {
    echo '<p>Incomplete data! User has not been changed.'.$_GET['id'].' aaaaaaaaaaaaa</p>';
}