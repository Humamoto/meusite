<?php
$camp3_ativo = 'x'; //DEFINIE SE APARECE OU NÃO O BOTÃO DE INSCREVER NO CAMP (ATIVO)
$status_camp3 = 'A DEFINIR'; //TEXTUAL
$camp_3 = 'A DEFINIR';  // DEFINE NOME DO CAMP
$data_camp3 = 'A DEFINIR'; //DEFINE DATA DO CAMP
$data_insc_camp3 = 'A DEFINIR'; // DEFINE DATA DE INSCRI DO CAMP
$valor_insc_camp3 = 'A DEFINIR'; // DEFINE VALOR DO CAMP
$premio_insc_camp3 = 'A DEFINIR'; // DEFINIO O VALOR DO PREMIO DO CAMP
$battlefy_camp3 = ''; //DEFINE LINK DO BATTLEFY DO CAMP
$qrcode_camp3 = ''; //DEFINE CAMINHO DO ARQUIVO DE QRCODE DO CAMP <img src="assets/img/camp/qrcode_camp3.png">
$chavepix_camp3 = ''; // DEFINE A CHAVE PIX DO CAMP
$linkpix_camp3 = ''; // DEFINE O LINK DO PIX DO CAMP
$inscricao_camp3 = 'inscricao_camp3.php?id=1'; //DEFINE O LINK DA PAGINA DE INSCRIÇÃO E O ID DO EVENTO

//REGRAS CAMP 3

$regras_gerais_camp3 = '<br> 
    <div style="font-size: 12px" class="text-left" ">
    - Os times devem estar registrados no campeonato aqui no battlefy e entrar no nosso discord; <br>
    - Os nicks no discord devem estar igual no jogo, mas com a tag ou o nome do time antes, exemplo: Portal - Jogador#2022; <br>
    - Com os times completos, solicite a criação de uma sala privada pro seu time no nosso discord; <br>
    - Atenção ao check-in, será aberto 60 minutos antes do campeonato começar, e deverá ser feito para confirmar a participação no campeonato.
    </div>';

$regras_partida_camp3 = '<br> 
    <div style="font-size: 12px" class="text-left" ">
    - O time vencedor do 1º cara ou coroa vai começar no banimento dos mapas; <br>
    - O time vencedor do 2º cara ou coroa vai escolher se começará atacando ou defendendo;<br>
    - Não terá banimento de agentes;<br>
    - Partida padrão 5v5 com cheats desativado! <br>
    - Espectador apenas por algum ADM autorizado da organização;<br>
    - O atraso de algum jogador por mais de 10 minutos ocasionará em W.O., o time adversário será vencedor da partida;<br>
    - Eliminatória MD1, perdeu está fora da chave;<br>
    - MD3 apenas na final, para decidir o vencedor.
    </div>';

$regras_durante_camp3 = '<br> 
    <div style="font-size: 12px" class="text-left" ">
    - A organização não se responsabiliza por transmissões de terceiros, e o uso dessas para a obtenção de alguma vantagem in game (ghost); <br>
    - A transmissão de partidas pela organização do torneio terá 3 (três) minutos de delay; <br>
    - Chat de voz em grupo deverá estar desativado durante as partidas; <br>
    - O resultado será aplicado pelos Administradores após apresentar o print de vitória no Discord do torneio:<br>
    - Os jogadores são responsáveis por coletar provas ou coisas do tipo caso haja algo que não respeite as regras;<br>
    - <a href="https://discord.gg/Rtgw24qeEW">Acesse aqui nosso discord.</a>
    </div>';

$regras_banimento_camp3 = '<br> 
    <div style="font-size: 12px" class="text-left" ">
    - Qualquer atitude tóxica ou depreciativa é passível de punição, seja ela verbal ou escrita;<br>
    - Discursos de ódio serão punidos sem direito a revisão (machismo, homofobia, xenofobia, racismo, etc); <br>
    - Qualquer evento que envolva atitudes tóxicas/depreciativas/discriminatórias devem ser reportado para um ADM do Discord para que medidas sejam tomadas;<br>
    - Suspeita de trapaça ou uso de aplicativos de terceiros levará o time que estiver utilizando à desclassificação.
    </div>';

$regras_reemb_camp3 = '<br> 
    <div style="font-size: 12px" class="text-left" style"padding-left: 20px">
    - Cancelamentos de inscrição só podem ser realizadas com no mínimo 7 dias de antecendência do campeonato;<br>
    - Cancelamentos efetuados com menos de 7 dias de antecedência do campeonato serão desclassificados por W.O, sem direito a reembolso; <br>
    - Reembolsos serão aplicados somente se efetuados dentro do prazo de cancelamento de inscrição.
    </div>';
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>E-SPORTS PORTAL</title>

        <!-- Primary Meta Tags -->
        <meta name="title" content="Confira campeonatos E-Sports de várias modalidades">
        <meta content="Junte-se a nós e seja a sua superação em campeonatos de E-Sports de várias modalidades" name="description">
        <meta content="Campeonatos, E-Sports, Valorant, CSGO, CS, Free-Fire, Fortnite, Jogos competitivos" name="keywords">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://e-sportsportal.com.br">
        <meta property="og:title" content="Confira campeonatos E-Sports de várias modalidades">
        <meta property="og:description" content="Junte-se a nós e seja a sua superação em campeonatos de E-Sports de várias modalidades">
        <meta property="og:image" content="https://e-sportsportal.com.br/assets/img/logo.png">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://e-sportsportal.com.br">
        <meta property="twitter:title" content="Confira campeonatos E-Sports de várias modalidades">
        <meta property="twitter:description" content="Junte-se a nós e seja a sua superação em campeonatos de E-Sports de várias modalidades">
        <meta property="twitter:image" content="https://e-sportsportal.com.br/assets/img/logo.png">

        <!-- Favicons -->
        <link href="assets/img/logo-icon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
        <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/713085a2c2.js" crossorigin="anonymous"></script>

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css?v=10" rel="stylesheet">
        <link href="assets/css/timeline.css" rel="stylesheet">


        <!-- =======================================================
        * Template Name: Arsha - v2.2.1
        * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
    </head>

    <body>


        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top ">
            <div class="container d-flex align-items-center">

                <!-- Image logo -->
                <a href="index.php" class="logo mr-auto"><img src="assets/img/marca-branca.png" alt="" class="img-fluid"></a>

                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li class="active"><a href="index.php">Inicio</a></li>
                        <li><a href="sobre.html#cliens">Sobre</a></li>
                        <li><a href="index.php#cliens">Campeonatos</a></li>
                        <li><a href="index.php#services">Transmissões</a></li>
                        <li><a href="index.php#contact" class="scrollto">Contato</a></li>
                        <li><a href="index.php#faq" class="scrollto">Perguntas Frequentes</a></li>
                    </ul>
                </nav><!-- .nav-menu -->

            </div>

        </header><!-- End Header -->

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1 text-justify" data-aos="fade-up" data-aos-delay="200">
                        <h1>Seu Portal de E-Sports!</h1>
                        <h2>Junte-se a nós e seja a sua superação! Participe de Campeonatos Incríveis!</h2>

                        <div class="d-lg-flex">
                            <a href="#cliens" class="btn-get-started scrollto">Saiba Mais</a>
                            <!-- <a href="" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Assista o Video <i class="icofont-play-alt-2"></i></a>-->
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                        <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>

        </section><!-- End Hero -->

        <main id="main">

            <!-- ======= Cliens Section ======= -->
            <section id="cliens" class="cliens">
                <div class="container">

                    <div class="row" data-aos="zoom-in">

                        <div id="owl-demo" class="owl-carousel">

                            <div class="d-flex align-items-center justify-content-center">
                                <img src="assets/img/clients/apex_logo.png" class="img-fluid" alt="">
                            </div>

                            <div class="d-flex align-items-center justify-content-center">
                                <img src="assets/img/clients/bf2042_logo.png" class="img-fluid" alt="">
                            </div>

                            <div class="d-flex align-items-center justify-content-center">
                                <img src="assets/img/clients/fortnite_logo.png" class="img-fluid" alt="">
                            </div>

                            <div class="d-flex align-items-center justify-content-center">
                                <img src="assets/img/clients/csgo_logo.png" class="img-fluid" alt="">
                            </div>

                            <div class="d-flex align-items-center justify-content-center">
                                <img src="assets/img/clients/free-fire_logo.png" class="img-fluid" alt="">
                            </div>

                            <div class="d-flex align-items-center justify-content-center">
                                <img src="assets/img/clients/valorant_logo.png" class="img-fluid" alt="">
                            </div>

                            <div class="d-flex align-items-center justify-content-center">
                                <img src="assets/img/clients/warzone_logo.png" class="img-fluid" alt="">
                            </div>

                        </div>

                    </div>

                </div>
            </section><!-- End Cliens Section -->

            <!-- ======= About Us Section ======= -->

            <section id="modalidades" class="modalidades section-bg">
                <div class="container" data-aos="fade-up">
                    <div class="section-title-2">
                        <h2 style="color:#fff">INSTRUÇÕES</h2>
                    </div>

                    <div class="row">


                        <div class="col-lg-6" style="margin-bottom: 10px">
                            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">

                                <div class="member-info">
                                    <div class="row">
                                        <img src="assets/img/logo-icon.png">
                                        <h4 style="padding-left: 10px; padding-top: 2px"><?php echo $camp_1 ?></h4>
                                    </div>
                                    <p class="text-justify"><strong>DATA DO EVENTO:</strong> <?php echo $data_camp1 ?></p>
                                    <p class="text-justify"><strong>DATA DE INSCRIÇÃO:</strong> <?php echo $data_insc_camp1 ?> </p>
                                    <p class="text-justify"><strong>INSCRIÇÃO:</strong> <?php echo $valor_insc_camp1 ?></p>
                                    <p class="text-justify"><strong>PREMIAÇÃO:</strong> <?php echo $premio_insc_camp1 ?></p>
                                    <p class="text-justify"><strong>STATUS:</strong> <?php echo $status_camp1 ?></p>
                                    <?php
                                    if ($camp1_ativo == 'ATIVO') {
                                        echo '<div class="row">
                                    <div style="margin-left: 0px" class="mt-3 text-center"><a href="' . $inscricao_camp3 . '" target="_blank" class="plan-btn scrollto">Inscrever</a></div>
                                    </div>';
                                    } else {
                                        echo '<br><div class="row" style="margin-left: 0px">
                                    <strong>INSCRIÇÃO INDISPONÍVEL</STRONG>
                                    </div>';
                                    }
                                    ?> 

                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">

                                <div class="member-info">

                                    <div class="member-info">
                                        <div class="row">
                                            <img src="assets/img/logo-icon.png">
                                            <h4 style="padding-left: 10px; padding-top: 2px">INSCRIÇÃO</h4>
                                        </div>
                                        <p class="text-justify"><strong>1) REGISTRO:</strong> Clique no botão <strong>"INSCREVER"</strong> e efetue sua inscrição no campeonato.</p>
                                        <p class="text-justify"><strong>2) PAGAMENTO:</strong> Efetue o pagamento através do PIX abaixo:</p>
                                        <p class="text-justify"><strong>QRCODE:</strong> <?php echo $qrcode_camp1 ?></p>
                                        <p class="text-justify"><strong>CHAVE PIX:</strong> <?php echo $chavepix_camp1 ?></p>
                                        <p class="text-justify"><strong>CHAVE PIX:</strong><a href="<?php echo $linkpix_camp1 ?>"> Link Pagamento</a> </p>
                                        <p class="text-justify"><strong>3) COMPROVANTE:</strong> Após o pagamento, envie o comprovante para o e-mail <strong>contato@e-sportsportal.com.br.</strong></p>
                                        <p class="text-justify"><strong>4) CONFIRMAÇÃO:</strong> Recebemos o seu comprovante e confirmamos seu registro no Battlefy.</p>

                                    </div>


                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="row py-3">
                        <div class="col-lg-12">
                            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">

                                <div class="member-info">
                                    <div class="row">
                                        <img src="assets/img/logo-icon.png">
                                        <h4 style="padding-left: 10px; padding-top: 2px"><?php echo 'REGRAS DO CAMPEONATO' ?></h4>
                                    </div>
                                    <p class="text-justify"><strong>REGRAS GERAIS:</strong> <?php echo $regras_gerais_camp1 ?></p>
                                    <p class="text-justify"><strong>PARTIDAS:</strong> <?php echo $regras_partida_camp1 ?></p>
                                    <p class="text-justify"><strong>DURANTE O TORNEIO:</strong> <?php echo $regras_durante_camp1 ?></p>
                                    <p class="text-justify"><strong>BANIMENTO:</strong> <?php echo $regras_banimento_camp1 ?></p>
                                    <p class="text-justify"><strong>REEMBOLSOS & CANCELAMENTOS:</strong> <?php echo $regras_reemb_camp1 ?></p>

                                </div>
                            </div>
                        </div>
                    </div>
            </section><!-- End Modalidades Section -->

            <!-- ======= Cta Section ======= -->
            <section id="cta" class="cta">
                <div class="container" data-aos="zoom-in">

                    <div class="row">
                        <div class="col-lg-9 text-center text-lg-left">
                            <h3>Está com Dúvidas?</h3>
                            <p>Você pode contar com um time talentoso e dedicado para tirar as suas dúvidas. Esperamos pelo seu contato!</p>
                        </div>
                        <div class="col-lg-3 cta-btn-container text-center">
                            <a class="cta-btn align-middle" target="_blank" href="tksdiscord.html">Tirar Dúvidas <i style="margin-bottom: 2px" class="fa-brands fa-discord"></i></a>
                        </div>
                    </div>

                </div>
            </section><!-- End Cta Section -->

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Contato</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 d-flex align-items-stretch">
                            <iframe src="https://discord.com/widget?id=971725810761367552&theme=dark" width="450" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
                        </div>
                        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                            <form id="contactForm" name="sentMessage" novalidate="novalidate" class="php-email-form">
                                <div class="control-group">
                                    <div class="form-group floating-label-form-group controls mb-0 pb-2">

                                        <input class="form-control" id="name" type="text" placeholder="Nome" required="required" data-validation-required-message="Preencha seu nome." />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="form-group floating-label-form-group controls mb-0 pb-2">

                                        <input class="form-control" id="email" type="email" placeholder="Email" required="required" data-validation-required-message="Preencha seu email." />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="form-group floating-label-form-group controls mb-0 pb-2">

                                        <input class="form-control" id="phone" type="text" data-mask="(00)00000-0000" placeholder="Celular" required="required" data-validation-required-message="Preencha o numero do seu celular." />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <div class="form-group floating-label-form-group controls mb-0 pb-2">

                                        <textarea class="form-control" id="message" rows="5" placeholder="Mensagem" required="required" data-validation-required-message="Preencha a mensagem."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <br />
                                <div id="success"></div>
                                <div class="text-center"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Enviar</button></div>
                            </form>
                        </div>

                    </div>

                </div>
            </section><!-- End Contact Section -->

            <!-- ======= Frequently Asked Questions Section ======= -->
            <section id="faq" class="faq section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title-2">
                        <h2 style="color:#fff">Perguntas Frequentes</h2>
                    </div>

                    <div class="faq-list">
                        <ul>
                            <li data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapsed" href="#faq-list-1">Como funciona o pagamento da premiação? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-1" class="collapse" data-parent=".faq-list">
                                    <p class="text-justify">
                                        O pagamento da premiação é feito em sua totalidade para o capitão do time ou em valores divividos igualmente para os integrantes do time, através de transferências PIX.
                                    </p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="150">
                                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapsed" href="#faq-list-2">Como funcionam as inscrições? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                                    <p class="text-justify">
                                        As incrições são realizadas através da plataforma Battlefy, sendo necessário registrar todos os integrantes do time conforme pré-definições do campeonato. Após o pagamento é aceito a inscrição por um de nossos ADMs.
                                    </p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Como funciona o pagamento da taxa de inscrição? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                                    <p class="text-justify">
                                        O pagamento pode ser acessado através da pagina de detalhes do campeonato no site, ao qual serão disponibilizados um QRCode, Chave Pix e Link de Pagamento. O pagamento pode ser realizado de forma unica por um dos integrantes do time e/ou individual por integrante. Será necessário enviar o comprovante de pagamento para o e-mail <strong>contato@e-sportsportal.com.br</strong>. 
                                    </p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="250">
                                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Após o pagamento da taxa de inscrição, quais os proximos passos?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                                    <p class="text-justify">
                                        Após a confirmação do pagamento da taxa de inscrição por um dos nossos ADMs será realizado o aceite da inscrição no Battlefy do time inscrito. Em seguida será necessário entrar em nosso Discord.
                                    </p>
                                </div>
                            </li>

                            <li data-aos="fade-up" data-aos-delay="300">
                                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">Onde posso acessar as regras do campeonato?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                                    <p class="text-justify">
                                        As regras do campeonato podem ser acessadas através da seção de "Campeonatos" do site, clicando no botão "Saiba Mais" você poderá visualizar todas as informações do campeonato, inclusive as regras e orientações gerais.
                                    </p>
                                </div>
                            </li>


                        </ul>
                    </div>

                </div>
            </section><!-- End Frequently Asked Questions Section -->

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer">

            <div class="footer-top" style="background-color: #f3f5fa">
                <div class="container">
                    <div class="row">

                        <div class="text-center col-lg-6 col-md-6 footer-contact">
                            <img src="assets/img/marca.png">

                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Links</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="sobre.html#about" class="scrollto">Sobre Nós</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#modalidades" class="scrollto">Campeonatos</a></li>
                            </ul>

                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>Links</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="#services" class="scrollto">Transmissões</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="planos.html#faq" class="scrollto">Perguntas Frequentes</a></li>
                            </ul>
                            <div class="social-links mt-3">
                                <a href="tksdiscord.html" class="facebook" target="_blank"><i class="fa-brands fa-discord"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container footer-bottom clearfix">
                <div class="text-center">
                    <img src="assets/img/marca-branca.png">
                    &copy; Copyright <strong><span>E-SPORTS PORTAL</span></strong>. Todos os direitos reservados.
                </div>
                <div class="credits">
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                </div>

            </div>

        </footer><!-- End Footer -->

        <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
        <div id="preloader"></div>

        <!-- Modal -->


        <!-- WhatsApp Files -->
        <!--
        <a href="tkswhats.html" class="back-to-top-whats" style="position:fixed;width:41px;height:41px;bottom:60px;right:15px;background-color:#6a66d4;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px;
           z-index:1000;" target="_blank">
            <i style="margin-bottom: 2px" class="fab fa-whatsapp"></i>
        </a>
        -->
        <a href="tksdiscord.html" class="back-to-top-whats" style="position:fixed;width:41px;height:41px;bottom:60px;right:15px;background-color:#6a66d4;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px;
           z-index:1000;" target="_blank">
            <i style="margin-bottom: 2px" class="fa-brands fa-discord"></i>
        </a>

        <!-- Vendor JS Files -->
        <script src="assets/vendor/jquery/jquery.min.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/venobox/venobox.min.js"></script>
        <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>


        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
        <script src="assets/js/owl.js"></script>
        <script src="assets/js/jquery.mask.js"></script>


        <!-- Mail -->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js?version=1"></script>


    </body>

</html>