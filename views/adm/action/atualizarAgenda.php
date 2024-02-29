<?php
    require_once('../../../conexao.php');
    $id = $_POST['idAgenda'];
    $data = $_POST['data'];
    $hora = $_POST['horario'];
    $maquiagem = $_POST['maquiagem'];

    $sqla = "SELECT valor FROM maquiagem WHERE nomeMaquiagem = '$maquiagem'";
    $resultado = mysqli_query($conexao, $sqla);
    $row = mysqli_fetch_assoc($resultado);
    $valor = $row['valor'];

    // Certifique-se de escapar as variáveis corretamente usando mysqli_real_escape_string ou declarações preparadas

    $sql = "UPDATE agenda SET maquiagem='$maquiagem', horario='$hora', dataAgenda='$data', valor='$valor' WHERE idAgenda  ='$id'";
    $result = mysqli_query($conexao, $sql);

    // Certifique-se de que o caminho para o arquivo "agenda.php" esteja correto
    header('Location: ../agenda.php?put=atualizar');
?>