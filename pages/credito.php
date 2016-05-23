<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>BancoApp</title>
	<link rel="stylesheet" href="css/credito.css">
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
							<li class="MainMenu-item"><a href="portafolioservicios.php" class="MainMenu-link">Portafolio de Servicios</a>
							<li class="MainMenu-item"><a href="contactenos.php" class="MainMenu-link">Contáctenos</a></li>
							<li ng-show="vm.isAuthenticated()" class="MainMenu-item"><a><span class="glyphicon glyphicon-user" onclick="showOptions()"></span></a>
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
		<section class="CreditHeaderMajor-container">
			<div class="container">
				<div class="jumbotron">
					<h1 class="text-center CreditHeader-title">Solicita tu crédito</h1>
					<p class="text-center CreditHeader-text">Llena el formulario para realizar una solicitud</p>
					<div class="text-center">
						<i class="material-icons" style="font-size:48px">assignment</i>
					</div>
				</div>
			</div>
		</section>
		<section class="FormCreditMajor-container">
			<form action="" method="post" role="form" class="FormCreditUsers">
				<h1 class="text-center FormCredit-title">Solicitud de crédito</h1>
				<label for="" class="Form-label">Banco</label>
				<div class="form-group">
					<select type="text" class="form-control" id="bank" placeholder="Banco" required>
						<option value="" disabled selected>Banco</option>
						<option value="1">AV Villas</option>
						<option value="2">BBVA</option>
					</select>
				</div>
				<label for="" class="Form-label">¿Autorizo al banco?</label>
				<div class="form-group">
					<label class="radio-inline"><input type="radio" name="optradio" value="" required>Si</label>
					<label class="radio-inline"><input type="radio" name="optradio" value="" required>No</label>
				</div>
				<div class="form-group">
					<select type="text" class="form-control" id="typecredit" placeholder="Tipo de crédito" required>
						<option value="" disabled selected>Tipo de crédito</option>
						<option value="1">Vivienda</option>
						<option value="2">Estudio</option>
					</select>
				</div>
				<div class="form-group">
					<textarea class="form-control textarea FormDescriptionCredit-text" id="comments" name="comments" placeholder="Descripción" rows="3" required style="resize:none"></textarea>
				</div><br>
				<label for="" class="Form-label">Ciudad</label>
				<div class="form-group">
					<select type="text" class="form-control" id="city" placeholder="Ciudad" required>
						<option value="" disabled selected>Ciudad de domicilio</option>
						<option value="1"></option>
						<option value="2"></option>
					</select>
				</div>
				<div class="form-group">
					<select type="text" class="form-control" id="typeid" placeholder="Tipo de documento" required>
						<option value="" disabled selected>Tipo de documento</option>
						<option value="1">cédula de ciudadania</option>
						<option value="2">cédula de extranjería</option>
					</select>
				</div>
				<div class="form-group">
					<input type="text" class="form-control FormCredit-input" id="id" name="id" placeholder="Número de documento" required>
				</div>
				<label for="" class="Form-label">Fecha de expedición</label>
				<div class="form-group">
					<input type="date" class="form-control FormCredit-input" id="id" name="date" placeholder="Fecha de expedición" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control FormCredit-input" id="nombre" name="name" placeholder="Primer nombre (*)" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control FormCredit-input" id="segnombre" name="secondname" placeholder="Segundo nombre">
				</div>
				<div class="form-group">
					<input type="text" class="form-control FormCredit-input" id="apellido" name="lastname" placeholder="Primer apellido (*)" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control FormCredit-input" id="segapellido" name="secondlastname" placeholder="Segundo Apellido">
				</div>
				<div class="form-group">
					<input type="text" class="form-control FormCredit-input" id="age" name="age" placeholder="Edad" required>
				</div>
				<div class="form-group">
					<input type="tel" class="form-control FormCredit-input" id="phone" name="phone" placeholder="Teléfono" required>
				</div>
				<div class="form-group">
					<input type="email" class="form-control FormCredit-input" id="email" name="email" placeholder="E-mail" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control FormCredit-input" id="adress" name="adress" placeholder="Dirección de residencia" required>
				</div>
				<div class="form-group">
					<select type="text" class="form-control" id="status" placeholder="Estado civil" required>
						<option value="" disabled selected>Estado civil</option>
						<option value="1">Soltero (a)</option>
						<option value="2">Casado (a)</option>
						<option value="1">Unión libre</option>
						<option value="1">Viudo (a)</option>
					</select>
				</div>
				<label for="" class="Form-label">Descripción Actividad</label>
				<div class="form-group">
					<label class="radio text-justify" style="padding-left:3em"><input type="radio" name="optradio" value="" required>Empleado (a)</label>
					<label class="radio text-justify" style="padding-left:3em"><input type="radio" name="optradio" value="" required>Pensionado (a)</label>
					<label class="radio text-justify" style="padding-left:3em"><input type="radio" name="optradio" value="" required>Independiente</label>
					<label class="radio text-justify" style="padding-left:3em"><input type="radio" name="optradio" value="" required>Madre comunitaria</label>
					<label class="radio text-justify" style="padding-left:3em"><input type="radio" name="optradio" value="" required>Educador (a)</label>
					<label class="radio text-justify" style="padding-left:3em"><input type="radio" name="optradio" value="" required>Empleado con salario integral</label>
					<label class="radio text-justify" style="padding-left:3em"><input type="radio" name="optradio" value="" required>Ejercito Nacional</label>
					<label class="radio text-justify" style="padding-left:3em"><input type="radio" name="optradio" value="" required>Armada Nacional</label>
					<label class="radio text-justify" style="padding-left:3em"><input type="radio" name="optradio" value="" required>Fuerza Aerea</label>
					<label class="radio text-justify" style="padding-left:3em"><input type="radio" name="optradio" value="" required>Policia Nacional</label>
				</div>
				<label for="" class="Form-label">Descripción Financiera</label>
				<div class="form-group">
					<select type="text" class="form-control" id="income" placeholder="Ingresos mensuales" required>
						<option value="" disabled selected>Ingresos mensuales</option>
						<option value="1">< de $300.000</option>
						<option value="2">Entre $300.000 y $689.454</option>
						<option value="1">Entre $689.454 y $900.000</option>
						<option value="1">Entre $900.000 y $1.200.000</option>
						<option value="1">> de $1.200.000</option>
					</select>
				</div><br>
				<label for="" class="Form-label">Descripción Patrimonial</label><br>
				<label for="" class="Form-label">¿Vehículos?</label>
				<div class="form-group">
					<label class="radio-inline"><input type="radio" name="optradio" value="" required>Si</label>
					<label class="radio-inline"><input type="radio" name="optradio" value="" required>No</label>
				</div>
				<div class="form-group">
					<input type="text" class="form-control FormCredit-input" id="use" name="use" placeholder="Uso" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control FormCredit-input" id="age" name="age" placeholder="Marca" required>
				</div>
				<div class="form-group">
					<input type="money" class="form-control FormCredit-input" id="age" name="age" placeholder="Valor comercial" required>
				</div><br>
				<label for="" class="Form-label">Fecha de solicitud</label>
				<div class="form-group">
					<input type="date" class="form-control FormCredit-input" id="id" name="date" placeholder="Fecha de solicitud" required>
				</div><br>
				<label for="" class="Form-label">Políticas y términos</label>
				<div class="form-group">
					<label class="radio-inline"><input type="radio" name="optradio" value="" required>Acepto</label>
					<label class="radio-inline"><input type="radio" name="optradio" value="" required>No acepto</label>
				</div><br>
				<div class="form-group ButtonCredit-container">
					<input type="submit" value="ENVIAR" class="btn btn-default CreditButton">
				</div>
			</form>
		</section>
	</div>
	<footer class="Footer">
		<div class="container FooterSect-container">
			<div class="row FooterInfo-container">
				<div class="col-md-4">
					<h4 class="FooterTitle-about"><strong>Acerca de</strong></h4>
					<div class="Footer-tel">
						<span class="glyphicon glyphicon-phone-alt"></span> Tel (+57) 555 55 55<br>
					</div>
					<div class="Footer-email">
						<span class="glyphicon glyphicon-envelope"></span> E-mail: email@email.com<br>
					</div>
					<div class="Footer-place">
						<span class="glyphicon glyphicon-map-marker"></span> Calle 1000 # 50 - 1000, Palmira<br>Valle del Cauca - Colombia<br>
					</div>
				</div>
				<div class="col-md-4 FooterPolicy-container">
					<a href="" class="Footer-policy">Políticas y términos de uso</a>
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
