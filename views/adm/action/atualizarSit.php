<?php 
    require_once('../../../conexao.php');

   $id=$_POST['id'];
  
    $situacao = $_POST['situacao'];

    $query='UPDATE mensagem SET situacao ="'.$situacao.'" WHERE idMensagem ='.$id;
    $resultado=mysqli_query($conexao,$query);

  if($situacao=='Pendente'){
    header('location:../mensagemVisualizada.php?put=atualizar');
  }else{
    header('location:../mensagemPendente.php?put=atualizar');
  }
?>