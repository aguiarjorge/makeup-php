<?php
    require_once('../../../conexao.php');

    $msg=false;

    if(isset($_FILES['arquivo'])){
        $extensao = strtolower(substr($_FILES['arquivo']['name'],-4));//pegar a extensao do arquivo
        $novo_nome =md5(time()). $extensao;//definir o nome do arquivo
        $diretorio ='../../../img/banner/';//definir o diretorio do arquivo

        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);//efetuar o upload


        $sql="INSERT INTO imgbanner (urlbanner) VALUES ('".$novo_nome."')";
        $mysqli=mysqli_query($conexao,$sql);
        /*if($mysqli->query($sql)){
            $msg="Arquivo enviado com sucesso";
        }else{
            $msg="Falha ao enviar";
        }*/

        header('location:../verBanner.php?add=adicionar');
    }
?>
<!--<h1>Upload de Arquivos</h1>
<?php
    //if($msg != false) echo "<p> $msg </p>";
?>
<form action="uploadBanner.php" method="POST" enctype="multipart/form-data">
    Arquivo: <input type="file" required name="arquivo">
    <input type="submit" value="salvar">
</form>
-->