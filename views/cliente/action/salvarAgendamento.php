<?php
 require_once('../../../conexao.php');
$id=$_POST['id'];
$selectFunc=$_POST['selectFunc'];
$dataAgenda=$_POST['dataAgenda'];
$horario=$_POST['horario'];
$maquiagem=$_POST['maquiagem'];


$dataAtual = date('Y-m-d');

$query_valor='SELECT valor FROM maquiagem WHERE nomeMaquiagem="'.$maquiagem.'"';
$res=mysqli_query($conexao,$query_valor);
$rest=mysqli_fetch_assoc($res);
$num=$rest['valor'];

$data = date('d/m/Y', strtotime($dataAgenda));




if(isset($_FILES['atual'])){
    $extensao = strtolower(substr($_FILES['atual']['name'],-4));//pegar a extensao do arquivo
    $novo_name =md5(time()). $extensao;//definir o nome do arquivo
    $diretorio ='../img/';//definir o diretorio do arquivo

    move_uploaded_file($_FILES['atual']['tmp_name'], $diretorio.$novo_name);//efetuar o upload


   // $sqlA="INSERT INTO agenda (fotoAtual) VALUES ('".$novo_nome."')  WHERE idUsuario= ".$id." AND dataAgenda='".$dataAgenda."'";
   // $mysqliA=mysqli_query($conexao,$sqlA);


}
require_once('../../../conexao.php');
 if(isset($_FILES['previa'])){
    $extensao = strtolower(substr($_FILES['previa']['name'],-4));//pegar a extensao do arquivo
    $novo_nome =md5(time().'1'). $extensao;//definir o nome do arquivo
    $diretorio ='../img/';//definir o diretorio do arquivo

    move_uploaded_file($_FILES['previa']['tmp_name'], $diretorio.$novo_nome);//efetuar o upload


   // $sqlD="INSERT INTO agenda (fotoDesejo) VALUES ('".$novo_nome."')  WHERE idUsuario= ".$id." AND dataAgenda='".$dataAgenda."'";
   // $mysqliD=mysqli_query($conexao,$sqlD);
 }

 if ($dataAgenda >= $dataAtual) {
   $sql = 'INSERT INTO agenda (idUsuario, funcionario, dataAgenda, horario, fotoAtual, fotoDesejo, maquiagem, valor) VALUES ("' . $id . '","' . $selectFunc . '","' . $data . '","' . $horario . '","' . $novo_name . '","' . $novo_nome . '","' . $maquiagem . '","' . $num . '")';
   $resultado = mysqli_query($conexao, $sql);

   header('location: ../agendamento.php?add=adicionar');
   exit(); // Certifique-se de usar exit() para interromper a execução do código após o redirecionamento
} else {
    // A data escolhida é inválida, exiba um alerta para o usuário
    echo '<script>alert("A data escolhida é inválida. Por favor, escolha uma data futura.");</script>';
    echo '<script>window.location.href = "../ConcluirAgendamento.php";</script>';
}
?>