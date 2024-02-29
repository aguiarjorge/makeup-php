<?php


include_once('conexao.php');

$query_banner ="SELECT * FROM imgbanner ";
  $resultado_banner= mysqli_query($conexao,$query_banner);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Makeup Queen :: Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link rel="apple-touch-icon" sizes="57x57" href="img/logo/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="img/logo/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/logo/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/logo/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/logo/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/logo/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="img/logo/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/logo/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/logo/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/logo/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="img/logo/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/logo/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <link rel="stylesheet" href="css/style.css" />
  
</head>

<body>
  <!-- NAVBAR -->
  <header>
    <!-- navbar -->
    <div class="d-flex flex-column wrapper">
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container-fluid">
          <a href="index.php" class="navbar-brand"><img src="img/logo/apple-icon-60x60.png" alt=""></a>
          <button type="button" class="navbar-toggler" data-bs-target="#navbarNav" data-bs-toggle="collapse" aria-controls="navbarNav" aria-expanded="false" aria-lable="Toggle Navbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="collapse navbar-collapse" id="navbarNav">
              <div class="mx-auto"></div>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a href="#contact" class="nav-link">CONTATO</a>
                </li>
                <li class="nav-item">
                  <a href="quemsomos.php" target="_blank" class="nav-link">SOBRE</a>
                </li>
                <li class="nav-item">
                  <a href="servicos.php" target="_blank" class="nav-link">SERVIÇOS</a>
                </li>

                <?php
                session_start();

                if (isset($_SESSION['admin'])) {
                ?>
                  <li class="nav-item">
                    <a href="views/adm/index.php" target="_blank" class="nav-link">AREA</a>
                  </li>
                  <li class="nav-item">
                    <a href="views/login/action/sair.php" target="_blank" class="nav-link">SAIR</a>
                  </li>
                <?php
                } else if (isset($_SESSION['cliente'])) {
                ?>
                  <li class="nav-item">
                    <a href="views/cliente/index.php" target="_blank" class="nav-link">AREA</a>
                  </li>
                  <li class="nav-item">
                    <a href="views/login/action/sair.php" target="_blank" class="nav-link">SAIR</a>
                  </li>
                <?php
                } else if (isset($_SESSION['funcionario'])) {
                ?>
                  <li class="nav-item">
                    <a href="views/funcionario/index.php" target="_blank" class="nav-link">AREA</a>
                  </li>
                  <li class="nav-item">
                    <a href="views/login/action/sair.php" target="_blank" class="nav-link">SAIR</a>
                  </li>
                <?php
                } else{
                ?>
                  <li class="nav-item">
                    <a href="views/login/login.php" target="_blank" class="nav-link">LOGIN</a>
                  </li>
                <?php } ?>
              </ul>
            </div>
          </div>
      </nav>
      <!-- BANNER IMAGE -->
      <main class="flex-fill">
        <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">

          <div class="content text-center">
            <a href="views/login/login.php?agendar=agendamento" class="btn69 mt-4" style="margin-top: 150px !important">Agende já</a>
          </div>
        </div>
  </header>
  <!-- SECTION CONTENT AREA -->
  <section class="product aos-init aos-animate">
    <div class="container aos-init aos-animate cards" data-aos="fade-up">
      <header class="section-header">
        <h2>Alguns dos produtos usados</h2>
        <p>Sempre os melhores do mercado</p>
      </header>
      <div class="container-card d-flex justify-content-center align-items-center">
        <div class="card aos-init aos-animate cards" data-aos="fade-up" data-aos-delay="200" style="width: 18rem;">
          <div class="card-center">
            <img src="https://sdcdn.io/mac/br/mac_sku_M6JC09_1x1_0.png?width=1440&height=1440" class="card-img-top" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title">MAC Studio Fix Fluid Foundation</h5>
            <p class="card-text">Este é uma base líquida que oferece uma cobertura média a alta, ajudando a uniformizar
              a pele e dar um acabamento matte.</p>
          </div>
        </div>
        <div class="card aos-init aos-animate cards" data-aos="fade-up" data-aos-delay="500" style="width: 18rem;">
          <div class="card-center">
            <img src="https://www.sephora.com.br/dw/image/v2/BFJC_PRD/on/demandware.static/-/Sites-masterCatalog_Sephora/pt_BR/dwf7cf2b88/images/hi-res-BR/nars_su19_mini_rcc_soldier_1975_creme_brule_sep_withwand_a_k_1500px.jpg?sw=1200&sh=1200&sm=fit" class="card-img-top" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title">NARS Radiant Creamy Concealer</h5>
            <p class="card-text">Um corretivo cremoso e hidratante da marca NARS, que ajuda a disfarçar olheiras,
              manchas e imperfeições da pele.</p>
          </div>
        </div>
        <div class="card aos-init aos-animate cards" data-aos="fade-up" data-aos-delay="800" style="width: 18rem;">
          <div class="card-center">
            <img src="https://http2.mlstatic.com/D_NQ_NP_2X_664704-MLA48751283091_012022-F.webp" class="card-img-top" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title">Stila Stay All Day Waterproof Liquid Eye Liner</h5>
            <p class="card-text">Ele é um delineador líquido de longa duração que é altamente pigmentado e oferece um
              acabamento mate.</p>
          </div>
        </div>
      </div>
  </section>
  <!-- About Us -->
  <section class="about aos-init aos-animate">
    <header class="section-header aos-init aos-animate" data-aos="fade-up">
      <h2>SOBRE NÓS</h2>
      <p>Conheça um pouco sobre nossa história</p>
    </header>
    <div class="container aos-init aos-animater" data-aos="fade-up">
      <div class="row gx-0">
        <div class="col-lg-6 col-sm-12 d-flex flex-column justify-content-center aos-init aos-animate content-row" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h1>SOBRE NÓS</h1>
            <p>
              Nós somos um time de maquiadoras apaixonadas pelo que fazemos. Todas nós fizemos o curso de maquiagem no
              SENAC de Nova Iguaçu, onde aprendemos técnicas avançadas e nos aprimoramos para oferecer o melhor serviço
              possível para nossas clientes.(...)
            </p>
            <div class="text-center text-lg-start">
              <a href="quemsomos.html" target="_blank" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Saiba mais</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                </svg>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6  d-flex align-items-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
          <img src="img/mulheres.jpg" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </section>
  <section class="services aos-init aos-animate">
    <div class="container aos-init aos-animate cards" data-aos="fade-up">
      <header class="section-header">
        <h2>Serviços</h2>
        <p>Os nossos mais requisitados</p>
      </header>
      <div class="container-card d-flex justify-content-center align-items-center">
        <div class="card aos-init aos-animate cards" data-aos="fade-up" data-aos-delay="200" style="width: 18rem;">
          <div class="card-center">
            <img src="https://i.pinimg.com/736x/ba/8a/f4/ba8af4b34bf9b3290b562562f230cdd5--gorgeous-makeup-pretty-makeup.jpg" class="card-img-top" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title">Maquiagem Social</h5>
            <p class="card-text">Um serviço para quem deseja um look elegante e sofisticado para eventos formais, como
              casamentos, formaturas ou jantares de gala.</p>
          </div>
        </div>
        <div class="card aos-init aos-animate cards" data-aos="fade-up" data-aos-delay="500" style="width: 18rem;">
          <div class="card-center">
            <img src="https://i.pinimg.com/736x/13/c3/d3/13c3d3b1c73d72a2bd80548b6c4cd3ea.jpg" class="card-img-top" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title">Maquiagem Artística</h5>
            <p class="card-text">Se você está se preparando para uma ocasião que exija um toque único, criativo e
              fantasioso, nossa maquiagem artística é perfeita para você.</p>
          </div>
        </div>
        <div class="card aos-init aos-animate cards" data-aos="fade-up" data-aos-delay="800" style="width: 18rem;">
          <div class="card-center">
            <img src="https://www.stylesweekly.com/wp-content/uploads/2015/05/brides.jpg" class="card-img-top" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title">Maquiagem para Noiva</h5>
            <p class="card-text">Realce sua beleza no dia mais especial da sua vida com nossa maquiagem para noivas.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="carousel">
    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
        <?php 
                  $controle_slide_um=1;
                    while($row_banner=mysqli_fetch_assoc($resultado_banner)){ 
                       
                ?>
            <div class="carousel-item <?php if($controle_slide_um == '1'){ echo 'active'; $controle_slide_um = 2;} ?>">
                
                <img src="IMG/BANNER/<?php echo $row_banner["urlbanner"];  ?>" class="d-block w-100" alt="<?php echo $row_banner["urlbanner"]; ?>">
            </div>
            <?php } ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>

  <section class="services aos-init aos-animate">
    <div class="container aos-init aos-animate cards" data-aos="fade-up">
      <header class="section-header">
        <h2>Nossa Equipe</h2>
        <p>Rede social da nossa equipe</p>
      </header>
      <div class="container-card d-flex justify-content-center align-items-center">
        <div class="card aos-init aos-animate cards" data-aos="fade-up" data-aos-delay="200" style="width: 18rem;">
          <div class="card-center">
            <img src="https://yt3.googleusercontent.com/a1GggJZoWQDCW0Eme1bGlsof_F8SeubtEOEVFz33vVkoiMXpqIyweG6TMaNA8qjaqoOIp1DukA=s900-c-k-c0x00ffffff-no-rj" class="card-img-top" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title">Mariângela Sertório</h5>
            <p class="card-text">Maquiadora/Fundadora</p>
            <div class="media-icons">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
          </div>
        </div>
        <div class="card aos-init aos-animate cards" data-aos="fade-up" data-aos-delay="500" style="width: 18rem;">
          <div class="card-center">
            <img src="https://yt3.googleusercontent.com/a1GggJZoWQDCW0Eme1bGlsof_F8SeubtEOEVFz33vVkoiMXpqIyweG6TMaNA8qjaqoOIp1DukA=s900-c-k-c0x00ffffff-no-rj" class="card-img-top" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title">Joanna da Silva</h5>
            <p class="card-text">Maquiadora/Co-fundadora</p>
            <div class="media-icons">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
          </div>
        </div>
        <div class="card aos-init aos-animate cards" data-aos="fade-up" data-aos-delay="800" style="width: 18rem;">
          <div class="card-center">
            <img src="https://lede-admin.blockclubchicago.org/wp-content/uploads/sites/5/2022/03/Mercado-Headshot.jpg?w=1200" class="card-img-top" alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title">Vanessa Monsinho</h5>
            <p class="card-text">Maquiadora</p>
            <div class="media-icons">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <section class="contact m-0" id="contact">
    <h1 class="section-header">Fale conosco</h1>
    <div class="row m-0">
      <div class="contact-in fist col-6">
        <h1>Informações de contato</h1>
        <h2><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
          </svg> Telefone</h2>
        <p>(21) 94002-8922</p>
        <h2><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.820L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
          </svg>Email</h2>
        <p>suporte@makeup.com</p>
        <h2><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
          </svg>Endereço</h2>
        <p>R. Cel. Carlos Matos, 86 - Centro, Nova Iguaçu - RJ, 26210-200</p>
        <div class="media-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
      <div class="contact-in second col-6 input">
        <h1>Envie sua mensagem</h1>
        <form method="post" action="action/enviarMsg.php">
          <div class="mb-3 ">
            <input type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="Nome Completo" required>
          </div>
          <div class="mb-3">
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" required>
          </div>
          <div class="mb-3">
            <input type="text" name='assunto' class="form-control" id="exampleFormControlInput1" placeholder="assunto" required>
          </div>
          <div class="mb-3">
            <textarea class="form-control" name="mensagem" id="exampleFormControlTextarea1" rows="3" placeholder="Menssagem" required></textarea>
          </div>
          <div class="button-contato contatos">
            <button type="submit" class="btn button-contatos ">Enviar</button>
          </div>
        </form>
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
                          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                        </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                        </svg></a>
                        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                          <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                        </svg></a>
                      </div>
                  </div>
                  <div class="col-12 col-md-4 text-center">
                      <a href="privacidade.php" class="text-decoration-none text">
                          Política de Privacidade
                      </a><br>
                      <a href="quemsomos.php" class="text-decoration-none text">
                          Quem Somos
                      </a><br><br>
                      <img src="img/Google-Play.png" alt="">
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
  </div>
  <script src="js/navbar.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>