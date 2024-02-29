<?php
    require_once('../../../conexao.php');
    
    $id=$_GET['id'];

    $sqla= 'DELETE FROM agenda WHERE idUsuario='.$id;
    $result= mysqli_query($conexao,$sqla);


    $sql='DELETE FROM usuarios WHERE idUsuario='.$id;
    $resultado=mysqli_query($conexao,$sql);

   
    
    header('location:../todosClientes.php?del=deletar');
        
?>