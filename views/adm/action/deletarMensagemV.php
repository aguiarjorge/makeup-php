<?php 
    require_once('../../../conexao.php');

   $id=$_GET['id'];

    $query='DELETE FROM mensagem where idMensagem ='.$id;
    $resultado=mysqli_query($conexao,$query);

    header('location:../mensagemVisualizada.php?del=deletar');
?>