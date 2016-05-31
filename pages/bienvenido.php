<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>BancoApp</title>
	<link rel="stylesheet" href="css/bienvenido.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,300,700,500">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arimo">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../static/css/bootstrap.min.css">
	<link rel="stylesheet" href="../static/css/bootstrap.min366.css">
	<link rel="stylesheet" href="../static/css/hover-min.css">
	<link rel="stylesheet" href="../static/js/bootstrap.min.js">
	<link rel="stylesheet" href="../static/js/bootstrap.min336.js">
	<link rel="stylesheet" href="../static/js/jquery-1.11.3.min.js">
	<link rel="stylesheet" href="../static/js/jquery-1.12.2.min.js">
</head>
<body class="body" id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
	<div class="Major-container">

	<header>
			<div class="navbar navbar-fixed-top MainMenu" role="navigation" style="margin-bottom:0" data-spy="affix" data-offset-top="20">
				<div class="container-fluid NavbarElements-container">
					<div class="navbar-header">
						<div class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" style="border-color:none">
							<span class="icon-bar" style="background:#757575"></span>
							<span class="icon-bar" style="background:#757575"></span>
							<span class="icon-bar" style="background:#757575"></span>
						</div>
						<div class="LogoMajor-container">
							<a class="navbar-brand pull-left" href="#">
								<img alt="Brand" src="../static/images/logo4.png" class="Logo-image" style="width:100%">
							</a>
						</div>
					</div>
					<div class="navbar-collapse collapse MainMenu-listContainer">
						<ul class="nav navbar-right MainMenu-list">
							<li class="MainMenu-item"><a href="../index.php" class="MainMenu-link">Inicio</a></li>
							<li class="MainMenu-item"><a href="credito.php" class="MainMenu-link">Crédito</a></li>
							<li class="MainMenu-item"><a href="portafolioservicios.php" class="MainMenu-link">Portafolio de Servicios</a>
							<li class="MainMenu-item"><a href="contactenos.php" class="MainMenu-link">Contáctenos</a></li>
							<li ng-show="vm.isAuthenticated()" class="MainMenu-item" onclick="showOptions()"><a><span class="glyphicon glyphicon-user"></span></a>
								
								<div id="Options" class="Options z-depth-1">
									<div class="OptSelect">
										<a href="" class="MainMenu-link MainMenu-linkLogOut"  ng-click="vm.logout()" style="color:#777">Cerrar Sesion</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<section class="WelcomeHeaderMajor-container">
			<div class="container WelcomeHeaderContent">
				<div class="jumbotron">
					<h1 class="text-center WelcomeHeader-title">Bienvenido A Proveersoluciones</h1>
					<p class="text-center WelcomeHeader-text">Disfruta de todas la ventajas que te ofrecemos y solicita tus créditos desde la comodidad de tu hogar</p>
				</div>
			</div>
		</section>
		<section class="WelcomeDescMajor-container">
			<div class="container WelcomeDescContent">
				<div class="row WelcomeDescription-container" style="text-align: center;">
					<div class="col-md-3 thumbnail hvr-glow hvr-round-corners" style="text-align:center">
						<h4 class="text-center WelcomeDescription-title"><strong>Nuestra plataforma</strong></h4>
						<div class="WelcomeDescIcon-container">
							<i class="material-icons" style="font-size:90px; font-weight:100">computer</i>
						</div>
						<p class="WelcomeDescription-text">El Outsourcing Proveer Soluciones a través de la presente plataforma, nos permite crear una cuenta de usuario con su respectiva contraseña, para de esta manera realizar solicitudes de crédito en línea; o en su defecto descargar el formulario y subirlo posteriormente.</p>
					</div>
					<div class="col-md-6" style="text-align:center">
						<div class="thumbnail hvr-glow WelcomeDescSecond-container" style="padding-bottom:2em; border-bottom-left-radius:10px; border-bottom-right-radius:10px">
							<div class="WelcomeDescription-imageContainer">
								<img src="../static/images/educationn.jpg" alt="Educación" class="img-responsive hvr-round-corners WelcomeDescriptionImage">
							</div>
							<h4 class="WelcomeDescription-title"><strong>Educación Financiera</strong></h4>
							<p class="WelcomeDescription-text">Es importante promover la cultura del ahorro y la buena administración de los recursos con los que se cuente. La banca de las oportunidades pretende contribuir a ello además de promover el acceso a servicios financieros a familias en pobreza, hogares no bancarizados, microempresarios y pequeñas empresas.</p>
							<div class="WelcomeDescriptionLink-container">
								<a href="http://www.bancadelasoportunidades.gov.co/" target="_blank" class="WelcomeDescription-link btn btn-info">Saber más</a>
							</div>
						</div>
					</div>
					<div class="col-md-3 thumbnail hvr-glow hvr-round-corners" style="text-align:center">
						<h4 class="text-center WelcomeDescription-title" style="margin-bottom:1em"><strong>La idea</strong></h4>
						<div class="WelcomeDescIcon-container">
							<i class="material-icons" style="font-size:90px; font-weight:100">lightbulb_outline</i>
							<!-- <span class="glyphicon glyphicon-usd" style="font-size:90px; font-weight:100"></span> -->
						</div>
						<p class="WelcomeDescription-text">De acuerdo al estudio de mercado que se realizó, descubrimos la dificultad a la que se enfretan los clientes al momento de solicitar un crédito, pues debido al tiempo que este trámite requiere surge la idea de crear un aplicativo el cual facilite el proceso de documentación.</p>
					</div>
				</div>
			</div>
		</section>
		<section class="WelcomeCreditReqMajor-container">
			<div class="container WelcomeCreditReqContent">
				<div class="row WelcomeCreditReqDescription-container">
					<div class="col-md-4">
						<div class="thumbnail hvr-glow hvr-round-corners">
							<h4 class="text-center WelcomeCreditReq-title"><strong>Entendiendo el crédito</strong></h4>
							<p class="WelcomeCreditReq-text">El uso del crédito está integrado a la vida cotidiana; es vital usarlo prudentemente para establecer un historial de crédito sólido y mantener una buena salud financiera. Una vez que te decidas a usar el crédito, necesitarás entender qué tipo de crédito es el mejor para ti.</p>
							<div class="WelcomeCreditReqIcon-container" style="text-align:center">
								<!--<span class="glyphicon glyphicon-gbp" style="font-size:35px"></span>-->
								<span class="glyphicon glyphicon-usd" style="font-size:35px"></span>
							</div>
						</div>
					</div>
					<div class="col-md-4 WelcomeCreditReqCenter-container" style="text-align:center">
						<div class="thumbnail hvr-glow" style="width:100%; margin-bottom:0.7em;">
							<div class="DescriptionIcon-container hvr-hang">
								<i class="material-icons" style="font-size:48px">arrow_downward</i>
							</div>
							<div class="WelcomeCreditReqLink-container">
								<a href="credito.php" class="WelcomeCreditReq-link btn btn-info">Solicita tu crédito en línea</a>
							</div>
						</div>
						<div class="thumbnail hvr-glow" style="width:100%">
							<div class="DescriptionIcon-container hvr-hang">
								<i class="material-icons" style="font-size:48px">arrow_downward</i>
							</div>
							<div class="WelcomeCreditReqLink-container">
								<a href="descarga.php" class="WelcomeCreditReq-link btn btn-info">Descarga el formulario de solicitud</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="thumbnail hvr-glow hvr-round-corners">
							<h4 class="text-center WelcomeCreditReq-title"><strong>Antes de solicitar un crédito</strong></h4>
							<p class="WelcomeCreditReq-text">Requerir un préstamo en una entidad bancaria no sólo supone obtener determinada cantidad de dinero que luego se debe reponer sino que, además, conlleva ciertas responsabilidades y obligaciones. Antes de solicitar un crédito infórmate, lee antes de firmar y mantén al banco notificado.</p>
							<div class="WelcomeCreditReqIcon-container" style="text-align:center">
								<!--<span class="glyphicon glyphicon-gbp" style="font-size:35px"></span>-->
								<span class="glyphicon glyphicon-usd" style="font-size:35px"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<footer class="Footer">
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
					<a href="politicas.php" target="_blank" class="Footer-policy">Políticas y términos de uso y privacidad</a>
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
	<script src="../static/js/bootstrap.min.js"></script>
	<script src="../static/js/bootstrap.min336.js"></script>
	<script src="../static/js/jquery-1.11.3.min.js"></script>
	<script src="../static/js/jquery-1.12.2.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.12.2.min.js"></script>
	<script src="../static/js/desplegablelogout.js"></script>
</body>
</html>