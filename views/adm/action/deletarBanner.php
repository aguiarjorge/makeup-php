<?php
 require_once('../../../conexao.php');

 $id = $_GET['id'];
 $sql="DELETE FROM imgbanner where idBanner =".$id;
 $resultado=mysqli_query($conexao,$sql);

 header('location:../verBanner.php?del=deletar');
?>