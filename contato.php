<!DOCTYPE HTML>
<!--
	Theory by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Semana de Meninas e Mulheres na Ciência</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/mmcstyle.css" />
		<link rel="shortcut icon" href="images/favico.ico" type="image/x-icon">
	</head>
	<body class="subpage">

    <!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo">#MMCiência</a>
					<nav id="nav">
            <a href="index.html">Home</a>
            <a href="sobre.html">Sobre</a>
            <a href="palestras.html">Para Todos</a>
            <a href="oficinas.html">Para Meninas</a>
            <a href="contato.php">Contato</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

      <!-- Three -->
  			<section id="three" class="wrapper">
  				<div class="inner">
  					<header class="align-center">
  						<h2>Fale Conosco</h2>
  						<!-- <p>Aliquam erat volutpat nam dui </p> -->
  					</header>
            <!-- Content -->
            <div class="row">
              <div class="6u 12u$(small)">
                <div class="box">
									<p>
                    Para entrar em contato com o setor responsável pelas palestras e pela mesa redonda:
                    <strong>palestras.mmc@gmail.com</strong>
                  </p>
                </div>
                <div class="box">
									<p>
                    Para entrar em contato com o setor responsável pela divulgação do evento:
                    <strong>divulga.mmc@gmail.com</strong>
                  </p>
                </div>
                <div class="box">
									<p>
                    Para entrar em contato com o setor responsável pelas oficinas e feira de ciências:
                    <strong>oficinas.mmc@gmail.com</strong>
                  </p>
                </div>
              </div>
              <div class="6u$ 12u$(small)">
                <div class="box">
									<p>
                    Para entrar em contato com o setor responsável por apoio e patrocínio:
                    <strong>patrocinio.mmc@gmail.com</strong>
                  </p>
                </div>
                <div class="box">
									<p>
                    Para entrar em contato com o setor responsável por materiais de apoio:
                    <strong>materiaisdoevento.mmc@gmail.com</strong>
                  </p>
                </div>
                <div class="box">
									<p>
                    Para entrar em contato com o setor responsável pelo contato com as escolas:
                    <strong>contatoescolas.mmc@gmail.com</strong>
                  </p>
                </div>
              </div>
            </div>
            <hr><br><br>
            <header class="align-center">
              <h2>Deixe aqui sua mensagem</h2>
            </header>
            <div class="row">
							<?php
								$destino = 'mmciencia@gmail.com';
								$nome = $_POST["nome"];
								$email = $_POST["email"];
								$mensagem= $_POST["styled-textarea"];

								$assunto = "Contato do site do evento";
								$headers .= "From: $email\r\n";

								if ($_POST['enviar']){
									$resposta = mail("$destino", "$assunto",
									"Nome: $nome
									Email: $email

									Mensagem: $mensagem", $headers);
									if ($resposta == 1){
										echo '<script type="text/javascript">
											alert("E-mail enviado com sucesso!");
										      </script>';
									}else{
										echo '<meta http-equiv="refresh" content="5; URL=index.html" />';
									}
								} echo "
			              <form method='post' action='contato.php' class='reduced-centered'>
			                <div class='row uniform'>
			                  <div class='6u 12u$(xsmall)'>
			                    <input type='text' name='nome' id='nome' value='' placeholder='Nome' />
			                  </div>
			                  <div class='6u$ 12u$(xsmall)'>
			                    <input type='email' name='email' id='email' value='' placeholder='Email' />
			                  </div>
			                  <div class='12u$'>
			                    <textarea name='styled-textarea' id='mensagem' placeholder='Digite sua mensagem' rows='6'></textarea>
			                  </div>
			                  <div class='12u$'>
													<ul class='actions'>
			                      <li><input class='button' type='reset' value='Limpar' /><input type='hidden' name='enviar' value='mmciencia@gmail.com'></li>
				                    <li style='float: right'><input class='button special' type='submit' value='Enviar' /></li>
			                    </ul>
			                  </div>
			                </div>
			              </form>
										";
								?>
            </div>
  				</div>
  			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="flex">
						<div class="copyright">
							&copy;2018 | Semana de Meninas e Mulheres na Ciência
						</div>
						<ul class="icons">
							<li><a href="https://www.facebook.com/semanademeninasemulheresnaciencia/" target="_blank" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="https://www.instagram.com/mmciencia/" target="_blank" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<!-- <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li> -->
							<!-- <li><a href="#" class="icon fa-linkedin"><span class="label">linkedIn</span></a></li> -->
							<!-- <li><a href="#" class="icon fa-pinterest-p"><span class="label">Pinterest</span></a></li> -->
							<!-- <li><a href="#" class="icon fa-vimeo"><span class="label">Vimeo</span></a></li> -->
						</ul>
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
