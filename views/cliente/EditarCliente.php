<?php

session_start();

if (!$_SESSION['cliente']) {
    header('Location:../login/login.php');
}

require_once('../../conexao.php');


$id = $_SESSION['idUsuario'];
$querySelect = "SELECT * FROM usuarios WHERE idUsuario =" .$id;
$resultadoSelect = mysqli_query($conexao, $querySelect);
$dados = mysqli_fetch_assoc($resultadoSelect);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <link rel="stylesheet" href="../../css/editarCliente.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/area.css">
    <link rel="apple-touch-icon" sizes="57x57" href="../../img/logo/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="57x57" href="../../img/logo/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../../../../img/logo/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../../img/logo/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../../img/logo/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../../img/logo/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../../img/logo/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="../../img/logo/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../../img/logo/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../../img/logo/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../img/logo/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../../img/logo/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../img/logo/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
    <title>Document</title>
</head>

<body>
    <!-- menu -->

    <div class="d-flex flex-column wrapper">
        <!-- navbar -->
        <nav class="navbar position-sticky fixed-top navbar-expand-lg navbar-dark bg-dark p-md-3">
            <div class="container-fluid">
                <a href="../../index.php" class="navbar-brand"><img src="../../img/logo/apple-icon-60x60.png" alt=""></a>
                <button type="button" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" aria-controls="navbarNav" aria-expanded="false" aria-lable="Toggle Navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mx-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="../../quemsomos.php" target="_blank" class="nav-link" style="color: #FF676D;">SOBRE</a>
                        </li>
                        <li class="nav-item">
                            <a href="../../servicos.php" target="_blank" class="nav-link" style="color: #FF676D;">SERVIÇOS</a>
                        </li>
                        <li class="nav-item">
                            <a href="../../index.php#contact" class="nav-link" style="color: #FF676D;">CONTATO</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php" target="_blank" class="nav-link" style="color: #FF676D;">AREA</a>
                        </li>
                        <li class="nav-item">
                            <a href="../login/action/sair.php" class="nav-link" style="color: #FF676D;">SAIR</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- menu -->
        <main class="flex-fill">
            <section data-current-page="perfil" id="profile">
                <div class="container">
                    <div class="row">
                        <div class="col-12 my-4">
                            <div class="row p-3">
                                <!-- menu lateral come�o -->

                                <div class="col-lg-4 col-md-12 profile-menu mb-4 m-lg-0">
                                    <ul class="nav flex-column">
                                        <li class="nav-item perfil-link">
                                            <a href="index.php" class="nav-link perfil-link active">
                                                <span>Meu Perfil</span>
                                                <i>
                                                    <ion-icon name="person-outline"></ion-icon>
                                                </i>
                                            </a>
                                        </li>
                                        <li class="nav-item seguranca-link">
                                            <a href="agendamento.php" class="nav-link">
                                                <span>Agendamento</span>
                                                <i>
                                                    <ion-icon name="alarm-outline"></ion-icon>
                                                </i>
                                            </a>
                                        </li>
                                        <li class="nav-item atendimento-link">
                                            <a href="Atendimento.php" class="nav-link">
                                                <span>Atendimento</span>
                                                <i>
                                                    <ion-icon name="headset-outline"></ion-icon>
                                                </i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-8 col-md-12 content m-lg-0 a">
                                    <div class="row p-3">
                                        <div class="col">
                                            <h3 class="text-center">Editar Perfil</h3>
                                            <?php
                                            if (isset($_GET['add'])) {
                                                echo '<div class="alert alert-success" role="alert">
                                                Serviço quase com agendado, falta realizar o pagamento!!
                                                </div>';
                                            } else
                                        if (isset($_GET['put'])) {
                                                echo '<div class="alert alert-primary" role="alert">
                                            Serviço atualizado com sucesso!
                                            </div>';
                                            } else
                                        if (isset($_GET['del'])) {
                                                echo '<div class="alert alert-danger" role="alert">
                                            Serviço excluído com sucesso!
                                            </div>';
                                            }

                                            ?>

                                            <form action="action/atualizar.php" method="POST" class="simple-form edit_user">

                                                <input type="text" hidden name="idUsuario" value="<?php echo $dados['idUsuario']; ?>">

                                                <div class="col-12">
                                                    <div class="input-box nome">
                                                        <label for="firstname">Nome</label> <input id="firstname" type="text" name="nomeUsuario" required value="<?php echo $dados['nomeUsuario']; ?>">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="input-box nome">
                                                            <label for="firstname">CPF</label> <input id="firstname" type="text" name="cpfUsuario" required value="<?php echo $dados['cpfUsuario']; ?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 input-box data">
                                                        <label for="data">Telefone</label> <input type="text" placeholder="Data de nascimento" name="telefoneUsuario" required value="<?php echo $dados['telefoneUsuario']; ?>" onkeypress="$(this).mask('(00) 0000-00009')">
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="input-box">
                                                    <label for="email">E-mail</label> <input id="email" type="email" name="emailUsuario" placeholder="Digite seu e-mail" required value="<?php echo $dados['emailUsuario']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="input-box">
                                                    <label for="number">Senha</label> <input id="number" type="tel" name="senhaUsuario" placeholder="Somente Números" required value="<?php echo $dados['senhaUsuario']; ?>">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="perfil">
                                            <button type="submit" class="perfil">Atualizar dados</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
            </section>
        </main>



        <footer class="border-top text-muted" style="background-color:#222529;">
            <div class="container text">
                <div class="row py-3">
                    <div class="col-12 col-md-4 text-center as">
                        &copy; 2020 - MakeUP Ltda ME<br>
                        Rua Virtual Inexistente, 171, Compulândia/PC <br>
                        CPNJ 99.999.999/0001-99<br>
                        Siga-nos
                        <div class="icons">
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg></a>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                </svg></a>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                </svg></a>
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                    <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                                </svg></a>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        <a href="../../privacidade.php" class="text-decoration-none text">
                            Política de Privacidade
                        </a><br>
                        <a href="../../quemsomos.php" class="text-decoration-none text">
                            Quem Somos
                        </a><br><br>
                        <img src="../../img/Google-Play.png" alt="">
                    </div>
                    <div class="col-12 col-md-4 text-center">
                        E-mail: <a href="mailto:email@dominio.com" class="text-decoration-none text">
                            email@dominio.com
                        </a><br>
                        Telefone: <a href="phone:28999990000" class="text-decoration-none text">
                            (28) 99999-0000
                        </a>

                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>