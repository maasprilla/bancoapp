<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>BancoApp</title>
	<link rel="stylesheet" href="static/css/estilos.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,300,700,500">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arimo">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="static/css/bootstrap.min.css">
	<link rel="stylesheet" href="static/css/bootstrap.min366.css">
	<link rel="stylesheet" href="static/css/hover-min.css">
	<link rel="stylesheet" href="static/js/bootstrap.min.js">
	<link rel="stylesheet" href="static/js/bootstrap.min336.js">
	<link rel="stylesheet" href="static/js/jquery-1.11.3.min.js">
	<link rel="stylesheet" href="static/js/jquery-1.12.2.min.js">
</head>
<body class="body" id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	<div class="Major-container">

	<header>
			<div class="navbar navbar-fixed-top MainMenu" role="navigation" style="margin-bottom:0" data-spy="affix" data-offset-top="20"> <!-- agregar luego: navbar-fixed-top -->
				<div class="container-fluid NavbarElements-container">
					<div class="navbar-header">
						<div class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" style="border-color:none">
							<span class="icon-bar" style="background:#757575"></span>
							<span class="icon-bar" style="background:#757575"></span>
							<span class="icon-bar" style="background:#757575"></span>
						</div>
						<div class="LogoMajor-container">
							<a class="navbar-brand pull-left" href="#"><!-- Estilo para logo // style="max-width:120px; margin-top:-35px;"-->
							<img alt="Brand" src="static/images/logo4.png" class="Logo-image" style="width:100%">
						</a>
						</div>
						
					</div>
					<div class="navbar-collapse collapse MainMenu-listContainer">
						<ul class="nav navbar-right MainMenu-list"><!-- navbar-nav -->
							<li class="MainMenu-item"><a onclick="showForm()" class="MainMenu-link" style="cursor:pointer">Iniciar Sesión <i class="fa fa-caret-down" style="cursor:pointer"></i></a>
								<form id="PanelLogin" role="form" class="FormSingUp-Container" action="./scriptphp/login/verificar.php" method="post">
									<div class="FormTitle-container">
										<h3 class="text-center FormTitle">Iniciar Sesión</h3>
									</div>
									<!--<form action="" role="form" class="SingUp-form">-->
									<div class="form-group">
										<input type="email"  name="email" placeholder="Email" class="form-control" required="true">
									</div>
									<div class="form-group">
										<input type="password" name="password" placeholder="Contraseña" class="form-control" required="true">
									</div>
									<div class="form-group">
										<input type="submit" value="Login" class="btn btn-default">
									</div>
									<!--</form>-->
								</form>
							</li>
							<li class="MainMenu-item"><a href="pages/registro.php" class="MainMenu-link">Registrarse</a></li>
							<li class="MainMenu-item"><a href="pages/portafolioservicios.php" class="MainMenu-link">Portafolio de Servicios</a></li>
							<li class="MainMenu-item"><a href="pages/contactenos.php" class="MainMenu-link">Contáctenos</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>

		<section class="Slider-container">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="static/images/1.jpg" alt="ProveerSolucionesApp">
					</div>
					<div class="item">
						<img src="static/images/2.jpg" alt="ProveerSolucionesApp">
					</div>
					<div class="item">
						<img src="static/images/3.jpg" alt="ProveerSolucionesApp">
					</div>
					<div class="item">
						<img src="static/images/4.jpg" alt="ProveerSolucionesApp">
					</div>
				</div>
				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</section>
		<section class="CreditRequestMajor-container">
			<div class="container CreditRequestContainer">
				<div class="row CreditRequestInfo-container">
					<div class="col-md-6">
						<h1 class="CreditRequestTitle">Solicita tus créditos desde la comodidad de tu casa.</h1>
					</div>
					<div class="col-md-6" style="text-align:center">
						<div class="CreditRequestImage-container">
							<img src="static/images/creditreq.jpg" alt="CreditRequest" class="img-responsive thumbnail hvr-glow hvr-round-corners CreditRequestImage" style="max-width:100%">
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="DescriptionMajor-container">
			<div class="container DescriptionContainer">
				<div class="row DescriptionInfo-container">
					<div class="col-md-4 DescriptionInfoContent-container">
						<h2 class="DescriptionTitle">¿Qué es?</h2>
						<p class="DescriptionText">ProveeersolucionesApp es una aplicativo creado para facilitar y agilizar los estudios de créditos mediante el envio de la comunicación requerida por medio del mismo.</p>
						<div class="DescriptionIcon-container1 hvr-sink">
							<i class="material-icons" style="font-size:48px">account_balance</i>
						</div>
					</div>
					<div class="col-md-4 DescriptionInfoCenter-container">
						<h2 class="DescriptionTitle">¿Cómo funciona?</h2>
						<p class="DescriptionText">Se puede acceder desde la plataforma web o descargandolo en un teléfono móvil. Inicialmente el usuario realizará un registro con datos básico, un correo y una contraseña con los que posteriormente accederá al sistema.</p>
						<div class="DescriptionIcon-container hvr-sink">
							<i class="material-icons" style="font-size:48px">desktop_windows</i>
						</div>
					</div>
					<div class="col-md-4 DescriptionInfoContent-container">
						<h2 class="DescriptionTitle">Ventajas</h2>
						<p class="DescriptionText">ProveeersolucionesApp permite llenar solicitudes de crédito en línea y evita el traslado innecesario de los clientes al banco, disminuyendo el tiempo usado a la hora de entregar documentación.</p>
						<div class="DescriptionIcon-container hvr-sink">
							<i class="material-icons" style="font-size:48px">tag_faces</i>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<footer class="Footer"> <!-- agregar luego: navbar-nav navbar-fixed-bottom  -->
		<div class="container FooterSect-container">
			<div class="row FooterInfo-container">
				<div class="col-md-4">
					<h4 class="FooterTitle-about"><strong>Acerca de</strong></h4>
					<div class="Footer-tel">
						<span class="glyphicon glyphicon-phone-alt"></span> Tel (+57) 318 787 02 16<br>
					</div>
					<div class="Footer-tel">
						<span class="glyphicon glyphicon-phone-alt"></span> Tel (+57) 317 523 57 08<br>
					</div>
					<div class="Footer-email">
						<span class="glyphicon glyphicon-envelope"></span> E-mail: lakathevanegas@gmail.com<br>
					</div>
					<div class="Footer-email">
						<span class="glyphicon glyphicon-envelope"></span> E-mail: nataly_1014@hotmail.com<br>
					</div>
					<div class="Footer-place">
						<span class="glyphicon glyphicon-map-marker"></span> Carrera 42a # 52 - 21, Palmira<br>Valle del Cauca - Colombia<br>
					</div>
				</div>
				<div class="col-md-4 FooterPolicy-container">
					<a href="pages/politicas.php" target="_blank" class="Footer-policy">Políticas y términos de uso y privacidad</a>
				</div>
				<div class="col-md-4 FooterSocial-container">
					<div class="FooterIcons-container">
						<a href="https://www.facebook.com/" target="_blank" class="icon-facebook FooterIncon-f hvr-float"></a>
						<a href="https://www.twitter.com/" target="_blank" class="icon-twitter FooterIncon-t hvr-float"></a>
						<a href="https://www.linkedin.com/" target="_blank" class="icon-linkedin2 FooterIncon-i hvr-float"></a>
						<a href="" target="_blank" class="icon-envelop FooterIncon-c hvr-float"></a>
					</div>
					<div class="FooterLink-container">
						<a href="http://www.bancadelasoportunidades.gov.co/" target="_blank" class="FooterLink">Educación Financiera</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="static/js/bootstrap.min.js"></script>
	<script src="static/js/bootstrap.min336.js"></script>
	<script src="static/js/jquery-1.11.3.min.js"></script>
	<script src="static/js/jquery-1.12.2.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.12.2.min.js"></script>
	<script src="static/js/desplegablesingup.js"></script>
</body>
</html>
