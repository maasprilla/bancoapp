<?php
session_start();
include '../base_datos/conexion.php';

if(isset($_SESSION['Usuario'])){

	$re=mysql_query("SELECT * FROM usuarios u where u.id_usuarios='".$_SESSION['Usuario']."'")or die(mysql_error());
	$f=mysql_fetch_array($re);

}


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>BancoApp</title>
	<link rel="stylesheet" href="css/registro.css">
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
							<?php
									if(isset($_SESSION['Usuario'])==null){
							?>
							<li class="MainMenu-item"><a href="../index.php" class="MainMenu-link">Inicio</a></li>
							<?php
									}
							?>
							<!-- <li class="MainMenu-item"><a onclick="showForm()" class="MainMenu-link" style="cursor:pointer">Iniciar Sesión <i class="fa fa-caret-down" style="cursor:pointer"></i></a>
								<form id="PanelLogin" role="form" class="FormSingUp-Container">
									<div class="FormTitle-container">
										<h3 class="text-center FormTitle">Iniciar Sesión</h3>
									</div>
									<div class="form-group">
										<input type="email" placeholder="Email" class="form-control" required="true">
									</div>
									<div class="form-group">
										<input type="password" placeholder="Contraseña" class="form-control" required="true">
									</div>
									<div class="form-group">
										<input type="submit" value="Login" class="btn btn-default">
									</div>
								</form>
							</li> -->
							<?php
									if(isset($_SESSION['Usuario'])!=null){
							?>
							<li class="MainMenu-item"><a href="bienvenido.php" class="MainMenu-link">Inicio</a></li>
							<?php
									}
							?>
							<?php
									if(isset($_SESSION['Usuario'])==null){
							?>
							<li class="MainMenu-item"><a href="iniciarsesion.php"	class="MainMenu-link" style="cursor:pointer">Iniciar Sesión</a></li>
							<?php
									}
							?>

							<li class="MainMenu-item"><a href="portafolioservicios.php" class="MainMenu-link">Portafolio de Servicios</a>
							<li class="MainMenu-item"><a href="contactenos.php" class="MainMenu-link">Contáctenos</a></li>

							<?php
									if(isset($_SESSION['Usuario'])!=null){
							?>
							<li id="OptionsDesktop" class="MainMenu-item" onclick="showOptions()" style="cursor:pointer"><a><span class="glyphicon glyphicon-user"> <?php echo $f['nombre1'].' '.$f['nombre2'] ?></span></a>

								<div id="Options" class="Options z-depth-1">
									<div class="OptSelect">
										<a  class="MainMenu-link MainMenu-linkLogOut"  href="../scriptphp/login/cerrar.php" style="color:#777">Cerrar Sesion</a>
									</div>
								</div>
							</li>
							<?php
									}
							?>
							<?php
									if(isset($_SESSION['Usuario'])!=null){
							?>
							<li id="OptionsMobile" class="MainMenu-item" style="cursor:pointer"><a><span class="glyphicon glyphicon-user"> <?php echo $f['nombre1'].' '.$f['nombre2'] ?></span></a></li>
							<li id="OptionsMobile"class="MainMenu-item" style="cursor:pointer"><a  class="MainMenu-link MainMenu-linkLogOut"  href="../scriptphp/login/cerrar.php" style="color:#777">Cerrar Sesion</a></li>
							<?php
									}
							?>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<section class="RegisHeaderMajor-container">
			<div class="container">
				<div class="jumbotron">
					<h1 class="text-center RegisHeader-title">¿Aún no tienes cuenta?</h1>
					<p class="text-center RegisHeader-text">Resgistrate ahora</p>
					<div class="text-center">
						<i class="material-icons" style="font-size:48px">account_circle</i>
					</div>

				</div>
			</div>
		</section>
		<section class="RegisFormMajor-container">
			<!-- <div class="container">
				<div class="row">
				<div class="col-md-12"> -->
					<form action="../scriptphp/registrarusuario.php" method="post" role="form" class="FormRegisUsers">
						<h2 class="text-center FormRegis-title">Registro De Usuarios</h2>
						<div class="form-group">
							<input type="text" class="form-control FormRegis-input" id="nombre1" name="name1" placeholder="Primer nombre" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control FormRegis-input" id="nombre2" name="name2" placeholder="Segundo nombre" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control FormRegis-input" id="apellido1" name="lastname1" placeholder="Primer apellido" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control FormRegis-input" id="apellido2" name="lastname2" placeholder="Segundo apellido" required>
						</div>
						<label for="" class="Form-label">Fecha de nacimiento</label>
						<div class="form-group">
							<input type="date" class="form-control FormRegis-input" id="id" name="fechanacimiento" placeholder="Fecha de Nacimiento" required>
						</div>
						<div class="form-group">
							<!-- <label for="typeid"></label> -->
							<select type="text" class="form-control FormRegis-input" id="typeid" name="tipodocumento" placeholder="Tipo de documento" required>
								<option class="InputOption" value="" disabled selected>Tipo de documento</option>
								<option class="InputOption" value="1">cédula de ciudadania</option>
								<option class="InputOption" value="2">cédula de extranjería</option>
							</select>
							<!-- <input type="text" class="form-control FormRegis-input" id="id" name="id" placeholder="Tipo de documento" required> -->
						</div>
						<div class="form-group">
							<input type="text" class="form-control FormRegis-input" id="id" name="numerodocumento" placeholder="Número de documento" required>
						</div>
						<label for="" class="Form-label">Fecha de expedición</label>
						<div class="form-group">
							<input type="date" class="form-control FormRegis-input" id="id" name="fechaexpediciondni" placeholder="Fecha de Expedicion de documento" required>
						</div>
						<div class="form-group">
							<input type="email" class="form-control FormRegis-input" id="email" name="email" placeholder="E-mail" required>
						</div>
						<div class="form-group">
							<input type="password" class="form-control FormRegis-input" id="password" name="password" placeholder="Contraseña" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control FormRegis-input" id="adress" name="adress" placeholder="Dirección" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control FormRegis-input" id="neighbor" name="neighbor" placeholder="Barrio" required>
						</div>
						<div class="form-group">
							<input type="tel" class="form-control FormRegis-input" id="phone" name="phone" placeholder="Telefono" required>
						</div>
						<div class="form-group">
							<input type="tel" class="form-control FormRegis-input" id="celphone" name="celphone" placeholder="Celular" required>
						</div>
						<div class="form-group Button-container">
							<input type="submit" value="GUARDAR" class="btn btn-default RegisButton">
						</div>
					</form>
				<!-- </div>
			</div>
			</div> -->
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
	<script src="../static/js/desplegablesingup.js"></script>
	<script src="../static/js/desplegablelogout.js"></script>
</body>
</html>
