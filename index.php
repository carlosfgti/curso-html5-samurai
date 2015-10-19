<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Curso de HTML5</title>

		<!--Link CSS Personalizado-->
		<link rel="stylesheet" href="css/especializati.css">
		<link rel="stylesheet" href="css/especializati-responsivo.css">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

		<!--Font Awesome-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

		<!--[if lt IE 9]>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<header class="header bg-black">
			<div class="container">
				<h1 class="oculto">Curso de HTML5</h1>

				<img src="imgs/logo-especializati-branca.png" alt="EspecializaTi" title="Curso de HTML5" class="logo">


				<!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-curso-html5-samurai" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			    </div>

			    <div class="collapse navbar-collapse" id="menu-curso-html5-samurai">
					<nav class="nav navbar-nav">
						<h1 class="oculto">Mais Sobre o Curso</h1>
						<ul class="menu">
							<li>
								<a href="home">Início</a>
							</li>
							<li>
								<a href="audio">Audio</a>
							</li>
							<li>
								<a href="video">Vídeo</a>
							</li>
							<li>
								<a href="formularios">Formulário</a>
							</li>
							<li>
								<a href="sobre">Sobre</a>
							</li>
						</ul>
					</nav>
				</div>

				<a class="btn-saiba-mais" href="" >Saiba Mais</a>
			</div>
		</header>
		<!--Finaliza o header-->

		<div class="clear"></div>


		<?php

		if( isset($_GET['prm']) ){
			if( file_exists("pags/{$_GET['prm']}.php") )
				include("pags/{$_GET['prm']}.php");
			else
				include('pags/404.php');
		}else{
			include('pags/home.php');
		}

		?>

		<footer class="footer color-white">
			<div class="container">
				<h1 class="oculto">Mais Detalhes sobre o Curso Web Developer</h1>

				<article class="col-md-4">
					<h1 class="titulo-footer">EspecializaTi</h1>

					<nav>
						<h1 class="oculto">Mais Sobre o Curso</h1>
						<ul class="menu-footer">
							<li>
								<a href="">Início</a>
							</li>
							<li>
								<a href="">Audio</a>
							</li>
							<li>
								<a href="">Vídeo</a>
							</li>
							<li>
								<a href="">Formulário</a>
							</li>
							<li>
								<a href="">Sobre</a>
							</li>
						</ul>
					</nav>
				</article>


				<article class="col-md-4">
					<h1 class="titulo-footer">Empresa</h1>

					<nav>
						<h1 class="oculto">Mais Sobre a Empresa</h1>
						<ul class="menu-footer">
							<li>
								<a href="">O Professor</a>
							</li>
							<li>
								<a href="">Contato</a>
							</li>
						</ul>
					</nav>
				</article>


				<article class="col-md-4">
					<h1 class="titulo-footer">Social</h1>

					<ul class="redes-sociais">
						<li>
							<a href="" target="_blank">
								<i class="fa fa-facebook"></i>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<i class="fa fa-google-plus"></i>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<i class="fa fa-twitter"></i>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<i class="fa fa-linkedin"></i>
							</a>
						</li>
					</ul>
				</article>
			</div>
		</footer>

		<div class="clear"></div>

		<div class="copyrigth">
			<p class="copyright">
				EspecializaTi <?=date('Y')?> - Todos os direitos reservados
			</p>
		</div>


		<!--jQuery-->
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</body>
</html>