<?php 
    require_once('../../../conexao.php');

   $id=$_POST['id'];
   $nome=$_POST['nome'];
   $telefone=$_POST['telefone'];
   $email=$_POST['email'];
   $senha=$_POST['senha'];
   $nivel=$_POST['nivel'];

    $query='UPDATE usuarios SET nomeUsuario ="'.$nome.'",telefoneUsuario="'.$telefone.'",
    emailUsuario="'.$email.'",senhaUsuario="'.$senha.'",idAcesso="'.$nivel.'" WHERE idUsuario ='.$id;
    $resultado=mysqli_query($conexao,$query);

    if($nivel==='1'){
        header('location:../todosAdm.php?put=atualizar');
    }else
        if($nivel==='2'){
           
            header('location:../todosFuncionario.php?put=atualizar');
            exit();
        }else{
    header('location:../todosClientes.php?put=atualizar');
}
?>