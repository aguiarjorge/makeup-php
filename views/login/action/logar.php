<?php

session_start();
require_once('../../../conexao.php');





if (isset($_POST['email']) && isset($_POST['senha'])) {

	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$sql = ("SELECT * FROM usuarios WHERE emailUsuario='$email' and senhaUsuario='$senha'");
	$consulta = mysqli_query($conexao, $sql);
	$contador = mysqli_num_rows($consulta);

	if ($contador == 1) {
		while ($dados = mysqli_fetch_array($consulta)) {

			$acesso = $dados['idAcesso'];
			$_SESSION['idUsuario'] = $dados['idUsuario'];
			$_SESSION['nomeUsuario'] = $dados['nomeUsuario'];
			$_SESSION['telefoneUsuario'] = $dados['telefoneUsuario'];
			$_SESSION['emailUsuario'] = $dados['emailUsuario'];
			$_SESSION['senhaUsuario'] = $dados['senhaUsuario'];
			$_SESSION['cpfUsuario'] = $dados['cpfUsuario'];



			if ($acesso == '1') {
				$_SESSION['admin'] = "admin";
				//alterar Rota
				header('Location:../../adm/index.php');
			} else


				if ($acesso == '2') {
				//alterar Rota
				$_SESSION['funcionario'] = "funcionario";
				header('Location:../../funcionario/index.php');
			} else


					if ($acesso == '3') {
				//alterar Rota
				$_SESSION['cliente'] = "cliente";
				if (isset($_GET['agendar'])) {
					header('Location:../../cliente/concluirAgendamento.php');
				} else {
					header('Location:../../cliente/index.php');
				}
			}
		}
	} else {
		session_start();
		$_SESSION['erro'] = true;
		header('Location:../login.php');
	}
} /* else {
	session_start();
	$_SESSION['erro'] = true;
	header('Location:../login.php');
} */
