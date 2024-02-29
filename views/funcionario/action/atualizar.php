<?php
require_once('../../../conexao.php');


    $idUsuario = $_POST['idUsuario'];
    $nomeUsuario = $_POST['nomeUsuario'];
    $telefoneUsuario = $_POST['telefoneUsuario'];
    $emailUsuario = $_POST['emailUsuario'];
    $senhaUsuario = $_POST['senhaUsuario'];
    

$sql="UPDATE usuarios set nomeUsuario='".$nomeUsuario."', telefoneUsuario='".$telefoneUsuario."',emailUsuario='".$emailUsuario."', senhaUsuario='".$senhaUsuario."'  WHERE idUsuario=".$idUsuario;
$result=mysqli_query($conexao,$sql);





if ($error!= '') {
    $_SESSION['msg_error']= $error;
}else{
    $_SESSION['msg_success'] = 'Usuario atualizado com sucesso';
}
header('location:../editarFuncionario.php?put=atualizar');
