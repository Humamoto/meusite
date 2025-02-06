<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <title>Inscrição</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="refresh" content="180; URL='https://e-sportsportal.com.br'"/>

        <!-- Favicons -->
        <link href="assets/img/logo-icon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- CSS Files -->
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css?v=1" rel="stylesheet">
		
	<!-- Global site tag (gtag.js) - Google Ads: 430662096 -->
        

        <!-- Event snippet for Contato conversion page -->
       
        <!-- Global site tag (gtag.js) - Google Analytics -->
       

        <!-- Facebook Pixel Code -->
        
        <!-- End Facebook Pixel Code -->
		
		<script>
		function startTimer(duration, display) {
			var timer = duration, minutes, seconds;
			setInterval(function () {
				minutes = parseInt(timer / 60, 10);
				seconds = parseInt(timer % 60, 10);
				minutes = minutes < 10 ? "0" + minutes : minutes;
				seconds = seconds < 10 ? "0" + seconds : seconds;
				display.textContent = minutes + ":" + seconds;
				if (--timer < 0) {
					timer = duration;
				}
			}, 1000);
		}
		window.onload = function () {
			var duration = 60 * 3; // Converter para segundos
				display = document.querySelector('#timer'); // selecionando o timer
			startTimer(duration, display); // iniciando o timer
		};
		</script>
		
    </head>


    <body>
        <!-- ======= Hero Section ======= -->
        <section id="hero-tks" class="d-flex align-items-center">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-1 hero-img" data-aos="zoom-in" data-aos-delay="200">
                        <a href="index.php"><img src="assets/img/marca-branca.png" class="img-fluid animated" alt=""></a>
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-2 text-justify" data-aos="fade-up" data-aos-delay="200">
                        <?php 
                        
                        if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'erro2'){
                           echo '<h1>Houve um erro no seu cadastro, por favor tente mais tarde.</h1><br>
						   <div class="row">
						<p style="color: #fff">Você será redirecionado em <div style="margin-left: 5px; margin-right: 5px; color: #fff" id="timer"></div><p style="color: #fff"> minutos.
						</div>';
                        }
                        
                        ?>
                        
                        <?php 
                        
                        if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'sucesso'){
                        
                            echo '<h1>Agradecemos a sua participação.</h1>
                        <h2>Agora efetua seu pagamento e envie o comprovante para o seguinte endereço de e-mail: <strong style="color: #fff">contato@e-sportsportal.com.br</strong>. Em breve você receberá mais informações.</h2>
                        <h2>Não esqueça de entrar em nosso Discord clicando <a href="https://discord.gg/JanSycHtwG" target="_blank">aqui</a>.</h2>
                        
                        <h2>Faça seu pagamento escaneando o QR CODE abaixo ou copiando o código a seguir: <strong style="color: #fff">061e3a09-0658-43a8-9fbe-9ed34c0aa73c</strong></h2>
                        <h2><strong style="color: #fff">Valor R$50.00</strong></h2>
                        <div class="row justify-content-center">
                        <img style="width: 30%; height: 100%" src="assets/img/camp/qrcode_camp2.png">
                        </div><br>
						<div class="row">
						<p style="color: #fff">Você será redirecionado em <div style="margin-left: 5px; margin-right: 5px; color: #fff" id="timer"></div><p style="color: #fff"> minutos.
						</div>';
						
                        }
                        
                        ?>
                        

                    </div>

                </div>
            </div>

        </section><!-- End Hero -->
    </body>
</html>
