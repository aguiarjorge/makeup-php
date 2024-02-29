<?php
    require_once('../../../conexao.php');
    $id=$_POST['id'];
    $nome=$_POST['servico'];
    $valor=$_POST['valor'];


    $sql="UPDATE maquiagem SET nomeMaquiagem='".$nome."' ,valor=".$valor." WHERE idMaquiagem=".$id;
    $result=mysqli_query($conexao,$sql);


    header('Location: ../listarServicos.php?put=atualizar');


?>