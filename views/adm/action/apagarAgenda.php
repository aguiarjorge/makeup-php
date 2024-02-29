<?php

require_once('../../../conexao.php');

$id=$_GET['id'];

$sql='DELETE FROM agenda WHERE idAgenda='.$id;
$result=mysqli_query($conexao,$sql);

header('location:../agenda.php?del=deletar');
?>