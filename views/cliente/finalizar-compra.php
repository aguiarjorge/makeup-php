<?php

session_start();

if (!$_SESSION['cliente']) {
  header('Location:../login/login.php');
}

require_once('../../conexao.php');

$id = $_SESSION['idUsuario'];
//$query = 'SELECT * FROM  usuarios where idUsuario=' . $id;
///$result = mysqli_query($conexao, $query);
//$rowc = mysqli_fetch_assoc($result);




//$cpf_usuario = @$_SESSION['cpf_usuario'];
$hora_atual = date("H:i");
$ida = $_GET['id'];

$sql = "SELECT * from agenda where idAgenda = '$ida' ";
$res = mysqli_query($conexao, $sql);
$row = mysqli_fetch_array($res);



$id_venda = $ida;
$nome_de_produto = $row["maquiagem"] ;
$total_venda = $row["valor"]/2;
$url_site = "http://localhost/makeup6/index.php";

//echo '<script> console.log("' . $res["situacao"] . '"); </script>';

//includes para o mercado pago
include_once("mercadopago/lib/mercadopago.php");
include_once("mercadopago/PagamentoMP.php");

$pagar = new PagamentoMP;

?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="pt-br">

<head>
  <title>Food Express</title>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <meta name="description" content="Distribuição, Rio de Janeiro, Alimentos">
  <meta name="author" content="Food Express">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8">


  <link rel="stylesheet" href="css/bootstrap.css">

  <link rel="stylesheet" href="css/style.css">



  <link rel="icon" href="images/logo.png" type="image/x-icon">
  <!-- Stylesheets-->
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500">
  <link rel="stylesheet" href="css/checkout.css">



  <script src="checkout.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>


  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


  <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
  <![endif]-->
</head>

<body>



<div class="mt-2">

          <?php
          //botao do mercado pago

          $btn = $pagar->PagarMP($id_venda, $nome_de_produto, (float)$total_venda, $url_site);
          echo $btn;
          ?>


        </div>


</body>

</html>


