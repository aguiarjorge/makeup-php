<?php
require_once("../../../conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['telefone'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];

// Verificar se o CPF já existe no banco de dados
$consultaCpf = "SELECT * FROM usuarios WHERE cpfUsuario = '$cpf'";
$resultadoCpf = mysqli_query($conexao, $consultaCpf);

if (mysqli_num_rows($resultadoCpf) > 0) {
    // CPF já cadastrado, faça o tratamento adequado, exiba uma mensagem de erro, etc.
    $mensagem = "CPF já cadastrado. Por favor, tente novamente.";
// Redirecionar para a página de cadastro com a mensagem de erro
header('Location: ../login.php?mensagem=' . urlencode($mensagem));
exit();
} else {
    // CPF não encontrado, realizar a inserção no banco de dados
    $query = 'INSERT INTO usuarios (nomeUsuario, emailUsuario, telefoneUsuario, senhaUsuario, cpfUsuario) VALUES ("' . $nome . '","' . $email . '","' . $tel . '","' . $senha . '","' . $cpf . '")';
    $result = mysqli_query($conexao, $query);

    if ($result) {
        // Inserção bem-sucedida, redirecionar para a página de login
        header('Location: ../login.php');
    } else {
        // Tratar possíveis erros na consulta de inserção
        echo "Ocorreu um erro ao cadastrar. Por favor, tente novamente.";
    }
}
?>