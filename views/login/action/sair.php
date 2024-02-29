<?php 

session_start();
unset( $_SESSION['admin'],$_SESSION['funcionario'],$_SESSION['cliente']);
header('Location:../../../index.php');

 ?>