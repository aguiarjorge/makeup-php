<?php
    require_once('../../../conexao.php');
    
    $id=$_GET['id'];

    $query="SELECT idAcesso FROM usuarios WHERE idUsuario=".$id;
    $result=mysqli_query($conexao,$query);


    $sql='DELETE FROM usuarios WHERE idUsuario='.$id;
    $resultado=mysqli_query($conexao,$sql);

   
   
   header('location:../todosFuncionario.php?del=deletar');
    
?>