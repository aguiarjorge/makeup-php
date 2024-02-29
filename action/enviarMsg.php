<?php
require_once("../conexao.php");

$nome=$_POST['nome'];
$email=$_POST['email'];
$assunto=$_POST['assunto'];
$mensagem=$_POST['mensagem'];

$query='INSERT INTO mensagem (nome,email,assunto,mensagem) VALUES ("'.$nome.'","'.$email.'","'.$assunto.'","'.$mensagem.'")';
$result=mysqli_query($conexao,$query);


header('Location:../index.php');

?>