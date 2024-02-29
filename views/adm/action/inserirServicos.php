<?php
    require_once('../../../conexao.php');
    $nome=$_POST['servico'];
    $valor=$_POST['valor'];


    $sql="INSERT INTO maquiagem (nomeMaquiagem,valor) VALUES ('".$nome."',".$valor.")";
    $result=mysqli_query($conexao,$sql);

 
    header('Location: ../listarServicos.php?add=Adicionar' );

    
    

  
?>