<?php
    require_once('../../../conexao.php');
    $id=$_GET['id'];
 
    $sql="DELETE FROM maquiagem WHERE idMaquiagem=".$id;
    $result=mysqli_query($conexao,$sql);


    header('Location: ../listarServicos.php?del=delete?del=deletar');


?>