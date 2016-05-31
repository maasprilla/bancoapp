<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>BancoApp</title>
	<link rel="stylesheet" href="css/descarga.css">
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
							<li class="MainMenu-item"><a href="bienvenido.php" class="MainMenu-link">Inicio</a></li>
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
		<section class="RegisHeaderMajor-container">
			<div class="container">
				<div class="jumbotron">
					<h1 class="text-center RegisHeader-title">Para solicitar tu crédito...</h1>
					<p class="text-center RegisHeader-text">También puedes intentar descargar el formulario</p>
					<div class="text-center">
						<i class="material-icons" style="font-size:48px">file_download</i>
					</div>
					<a href="" class="DownloadForm-link">Descargalo aquí</a>
				</div>
			</div>
		</section>
		<section class="UploadMajor-container">
			<div class="container">
				<h1 class="text-center UploadMain-title">Una vez hayas descargado el formulario pordás diligenciarlo</h1>
				<div class="text-center">
					<i class="material-icons" style="font-size:48px;">assignment</i>
				</div>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<h3 class="text-center UploadSecond-title">Cuando hayas diligenciado el formulario podrás subirlo para hacer efectiva tu solicitud</h3><br>
						<a href="" class="UploadLink">Adjuntalo aquí</a>
						<div class="text-center">
							<i class="material-icons" style="font-size:48px;">file_upload</i>
						</div>
						<br>
						<h3 class="text-center UploadThird-title">No olvides adjuntar también...</h3>
						<br>
						<div class="form-group" style="text-align:center;">
							<li class="UploadItem">Tu cédula escaneada al 150<a href="" class="AttachLink"> (Aquí)</a></li>
							<li class="UploadItem">Tu firma escaneada<a href="" class="AttachLink"> (Aquí)</a></li>
							<li class="UploadItem">Tus comprobantes de pago<a href="" class="AttachLink"> (Aquí)</a></li>
						</div><br>
					</div>
					<div class="col-md-2"></div>
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