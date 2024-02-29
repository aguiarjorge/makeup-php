<?php
require_once('../../../conexao.php');

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$nivel = $_POST['nivel'];

// Verificar se o CPF já existe no banco de dados
$consultaCpf = "SELECT * FROM usuarios WHERE cpfUsuario = '$cpf'";
$resultadoCpf = mysqli_query($conexao, $consultaCpf);

if (mysqli_num_rows($resultadoCpf) > 0) {
    // CPF já cadastrado, faça o tratamento adequado, exiba uma mensagem de erro, etc.
    $mensagem = "CPF já cadastrado. Por favor, tente novamente.";
    // Redirecionar para a página de cadastro com a mensagem de erro
    header('Location: ../FormularioInserirNovoAdm.php?mensagem=' . urlencode($mensagem));
    exit();
} else {


    $query = 'INSERT INTO usuarios (nomeUsuario,telefoneUsuario,emailUsuario,senhaUsuario,cpfUsuario,idAcesso) 
    VALUES ("' . $nome . '","' . $telefone . '","' . $email . '","' . $senha . '","' . $cpf . '","' . $nivel . '")';

    $result = mysqli_query($conexao, $query);

    if ($nivel == 1) {
        header('location:../todosAdm.php?add=Adicionar');
    } else
        if ($nivel == 2) {
        header('location:../todosFuncionario.php?add=Adicionar');
    } else {
        header('location:../todosClientes.php?add=Adicionar');
    }
}
