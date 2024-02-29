<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Makeup Queen :: Política de Privacidade</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="apple-touch-icon" sizes="57x57" href="img/logo/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/logo/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/logo/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/logo/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/logo/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/logo/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/logo/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/logo/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/logo/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/logo/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="img/logo/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/logo/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- NAVBAR -->
    <header>
      <!-- navbar -->
      <div class="d-flex flex-column wrapper">
      <nav class="navbar position-sticky fixed-top navbar-expand-lg navbar-dark bg-dark p-md-3">
        <div class="container-fluid">
          <a href="index.php" class="navbar-brand"><img src="img/logo/apple-icon-57x57.png" alt=""></a>
          <button
            type="button"
            class="navbar-toggler"
            data-bs-target="#navbarNav"
            data-bs-toggle="collapse"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-lable="Toggle Navbar"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mx-auto"></div>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="quemsomos.php" target="_blank" class="nav-link" style="color: #FF676D;">SOBRE</a>
              </li>
              <li class="nav-item">
                <a href="servicos.php" target="_blank" class="nav-link" style="color: #FF676D;">SERVIÇOS</a>
              </li>
              <li class="nav-item">
                <a href="index.php#contact" class="nav-link" style="color: #FF676D;">CONTATO</a>
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
        <div class="container">
            <h2>Política de Privacidade</h2>
            <p>A sua privacidade é importante para nós. É política do Makeup Queen respeitar a sua privacidade em relação a qualquer informação sua que possamos coletar no site <a href=index.html>Makeup Queen</a>, e outros sites que possuímos e operamos.</p>
            <p>Solicitamos informações pessoais apenas quando realmente precisamos delas para lhe fornecer um serviço. Fazemo-lo por meios justos e legais, com o seu conhecimento e consentimento. Também informamos por que estamos coletando e como será usado. </p>
            <p>Apenas retemos as informações coletadas pelo tempo necessário para fornecer o serviço solicitado. Quando armazenamos dados, protegemos dentro de meios comercialmente aceitáveis ​​para evitar perdas e roubos, bem como acesso, divulgação, cópia, uso ou modificação não autorizados.</p>
            <p>Não compartilhamos informações de identificação pessoal publicamente ou com terceiros, exceto quando exigido por lei.</p>
            <p>O nosso site pode ter links para sites externos que não são operados por nós. Esteja ciente de que não temos controle sobre o conteúdo e práticas desses sites e não podemos aceitar responsabilidade por suas respectivas <a href='privacidade.html' target='_BLANK'>políticas de privacidade</a>.</p>
            <p>Você é livre para recusar a nossa solicitação de informações pessoais, entendendo que talvez não possamos fornecer alguns dos serviços desejados.</p>
            <p>O uso continuado de nosso site será considerado como aceitação de nossas práticas em torno de privacidade e informações pessoais. Se você tiver alguma dúvida sobre como lidamos com dados do usuário e informações pessoais, entre em contacto connosco.</p>
            <h2>Política de Cookies Makeup Queen</h2>
            <h2>O que são cookies?</h2>
            <p>Como é prática comum em quase todos os sites profissionais, este site usa cookies, que são pequenos arquivos baixados no seu computador, para melhorar sua experiência. Esta página descreve quais informações eles coletam, como as usamos e por que às vezes precisamos armazenar esses cookies. Também compartilharemos como você pode impedir que esses cookies sejam armazenados, no entanto, isso
                pode fazer o downgrade ou 'quebrar' certos elementos da funcionalidade do site.</p>
            <h2>Como usamos os cookies?</h2>
            <p>Utilizamos cookies por vários motivos, detalhados abaixo. Infelizmente, na maioria dos casos, não existem opções padrão do setor para desativar os cookies sem desativar completamente a funcionalidade e os recursos que eles adicionam a este site. É recomendável que você deixe todos os cookies se não tiver certeza se precisa ou não deles, caso sejam usados ​​para fornecer um serviço
                que você usa.</p>
            <h2>Desativar cookies</h2>
            <p>Você pode impedir a configuração de cookies ajustando as configurações do seu navegador (consulte a Ajuda do navegador para saber como fazer isso). Esteja ciente de que a desativação de cookies afetará a funcionalidade deste e de muitos outros sites que você visita. A desativação de cookies geralmente resultará na desativação de determinadas funcionalidades e recursos deste site. Portanto,
                é recomendável que você não desative os cookies.</p>
            <h2>Cookies que definimos</h2>
            <ul>
                <li> Cookies relacionados à conta<br><br> Se você criar uma conta connosco, usaremos cookies para o gerenciamento do processo de inscrição e administração geral. Esses cookies geralmente serão excluídos quando você sair do sistema, porém, em alguns casos, eles poderão permanecer
                    posteriormente para lembrar as preferências do seu site ao sair.<br><br></li>
                <li> Cookies relacionados ao login<br><br> Utilizamos cookies quando você está logado, para que possamos lembrar dessa ação. Isso evita que você precise fazer login sempre que visitar uma nova página. Esses cookies são normalmente removidos ou limpos quando você efetua logout para garantir que você possa acessar apenas a recursos e áreas restritas ao efetuar login.<br><br>
                </li>
                <li> Cookies relacionados a boletins por e-mail<br><br> Este site oferece serviços de assinatura de boletim informativo ou e-mail e os cookies podem ser usados ​​para lembrar se você já está registrado e se deve mostrar determinadas notificações válidas apenas para usuários inscritos /
                    não inscritos.<br><br> </li>
                <li> Pedidos processando cookies relacionados<br><br> Este site oferece facilidades de comércio eletrônico ou pagamento e alguns cookies são essenciais para garantir que seu pedido seja lembrado entre as páginas, para que possamos processá-lo adequadamente.<br><br> </li>
                <li> Cookies relacionados a pesquisas<br><br> Periodicamente, oferecemos pesquisas e questionários para fornecer informações interessantes, ferramentas úteis ou para entender nossa base de usuários com mais precisão. Essas pesquisas podem usar cookies para lembrar quem já participou numa pesquisa ou para fornecer resultados precisos após a alteração das páginas.<br><br> </li>
                <li> Cookies relacionados a formulários<br><br> Quando você envia dados por meio de um formulário como os encontrados nas páginas de contacto ou nos formulários de comentários, os cookies podem ser configurados para lembrar os detalhes do usuário para correspondência futura.<br><br> </li>
                <li> Cookies de preferências do site<br><br> Para proporcionar uma ótima experiência neste site, fornecemos a funcionalidade para definir suas preferências de como esse site é executado quando você o usa. Para lembrar suas preferências, precisamos definir cookies para que essas informações possam ser chamadas sempre que você interagir com uma página for afetada por suas preferências.<br> </li>
            </ul>
            <h2>Cookies de Terceiros</h2>
            <p>Em alguns casos especiais, também usamos cookies fornecidos por terceiros confiáveis. A seção a seguir detalha quais cookies de terceiros você pode encontrar através deste site.</p>
            <ul>
                <li> Este site usa o Google Analytics, que é uma das soluções de análise mais difundidas e confiáveis ​​da Web, para nos ajudar a entender como você usa o site e como podemos melhorar sua experiência. Esses cookies podem rastrear itens como quanto tempo você gasta no site e as páginas visitadas, para que possamos continuar produzindo conteúdo atraente. </li>
            </ul>
            <p>Para mais informações sobre cookies do Google Analytics, consulte a página oficial do Google Analytics.
            </p>
            <ul>
                <li> As análises de terceiros são usadas para rastrear e medir o uso deste site, para que possamos continuar produzindo conteúdo atrativo. Esses cookies podem rastrear itens como o tempo que você passa no site ou as páginas visitadas, o que nos ajuda a entender como podemos melhorar o site para você.</li>
                <li> Periodicamente, testamos novos recursos e fazemos alterações subtis na maneira como o site se apresenta. Quando ainda estamos testando novos recursos, esses cookies podem ser usados ​​para garantir que você receba uma experiência consistente enquanto estiver no site, enquanto
                    entendemos quais otimizações os nossos usuários mais apreciam.</li>
                <li> À medida que vendemos produtos, é importante entendermos as estatísticas sobre quantos visitantes de nosso site realmente compram e, portanto, esse é o tipo de dados que esses cookies rastrearão. Isso é importante para você, pois significa que podemos fazer previsões de negócios com precisão que nos permitem analizar nossos custos de publicidade e produtos para garantir o
                    melhor preço possível.
                </li>
            </ul>
            <h2>Compromisso do Usuário</h2>
            <p>O usuário se compromete a fazer uso adequado dos conteúdos e da informação que o Makeup Queen oferece no site e com caráter enunciativo, mas não limitativo:</p>
            <ul>
                <li>A) Não se envolver em atividades que sejam ilegais ou contrárias à boa fé a à ordem pública;
                </li>
                <li>B) Não divulgar conteúdo ou propaganda de natureza racista, xenofóbica, <a href='https://ondeapostar.pt/' style='color: inherit;font-weight: normal;text-decoration:none;'>casas de apostas online</a>, pornografia ilegal, de apologia ao terrorismo ou contra os direitos humanos;</li>
                <li>C) Não causar danos aos sistemas físicos (hardwares) e lógicos (softwares) do Makeup Queen, de seus fornecedores ou terceiros, para introduzir ou disseminar vírus informáticos ou quaisquer outros sistemas de hardware ou software que sejam capazes de causar danos anteriormente mencionados.</li>
            </ul>
            <h2>Mais informações</h2>
            <p>Esperemos que esteja esclarecido e, como mencionado anteriormente, se houver algo que você não tem certeza se precisa ou não, geralmente é mais seguro deixar os cookies ativados, caso interaja com um dos recursos que você usa em nosso site.</p>
            <p>Esta política é efetiva a partir de <strong>dezembro de </strong><strong>2020</strong>.</p>
        </div>
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
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
