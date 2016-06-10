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
	<link rel="stylesheet" href="css/politicas.css">
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
							<?php
									if(isset($_SESSION['Usuario'])!=null){
							?>
							<li class="MainMenu-item"><a href="bienvenido.php" class="MainMenu-link">Inicio</a></li>
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
		<section class="PolicyHeaderMajor-container">
			<div class="container">
				<div class="jumbotron">
					<h1 class="text-center PolicyHeader-title">Políticas y términos de uso y privacidad</h1>
					<p class="text-center PolicyHeader-text">Conoce nuestras condiciones antes de tomar cualquier decisión.</p>
					<div class="text-center">
						<i class="material-icons" style="font-size:48px">vpn_key</i>
						<i class="material-icons" style="font-size:48px">lock</i>
					</div>

				</div>
			</div>
		</section>
		<section class="PolicyContent-container">
			<div class="container">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8" style="text-align:justify">
						<h1 class="text-center PolicyMain-title">ProveersolucionesApp</h1>
						<br><br>
						<div class="SecondTitle-container" style="text-align:center">
							<h3 class="text-center PolicySecond-title">Políticas y términos</h3>
						</div>
						<br>
						<li class="PolicyText">Al utilizar la aplicación, aceptara automáticamente estos términos. Asegúrese de leerlos atentamente antes de utilizar la aplicación.</li>
						<br>
						<li class="PolicyText">Le ofrecemos esta aplicación para su uso personal sin ningún costo, pero debe saber que no está autorizado a enviársela a otra persona ni a copiar o modificar la aplicación, así como ninguna parte de esta, ni nuestras marcas comerciales de ningún modo.</li>
						<br>
						<li class="PolicyText">No deberá intentar extraer el código fuente de la aplicación, traducir la aplicación a otros idiomas ni crear versiones derivadas.</li>
						<br>
						<li class="PolicyText">La aplicación y todas las marcas comerciales, los derechos de autor, los derechos sobre bases de datos y demás derechos de propiedad intelectual relacionados continuarán siendo propiedad de los administradores.</li>
						<br>
						<li class="PolicyText">Pretende garantizar que la aplicación sea siempre lo más útil y eficiente posible. Por este motivo, nos reservamos el derecho de efectuar cambios, en cualquier momento y por cualquier motivo.</li>
						<br>
						<li class="PolicyText">En ningún caso se aplicarán cargos por la aplicación o sus servicios.</li>
						<br>
						<li class="PolicyText">Toda información y datos relacionados con clientes y/o usuarios será confidencial y por ningún motivo ninguna persona puede acceder a ellos sin autorización.</li>
						<br>
						<li class="PolicyText">Estos datos no serán usados con fines judiciales o investigativos.</li>
						<br>
						<li class="PolicyText">En cuanto al registro de usuarios, es indispensable que la información o documentación suministrada sea verídica de lo contrario se procederá a eliminar y bloquear al usuario.</li><br><br>
						<h4 class="text-left" style="font-weight:bold">A considerar:</h4>
						<li class="PolicyText">Para realizar visitas y verificaciones comerciales con el fin de comprobar la información y documentación suministrada.</li>
						<li class="PolicyText">Para destruir todos los documentos entregados, en caso de que la presente solicitud no sea aceptada por el banco.</li>
						<li class="PolicyText">Para otorgar el crédito por un menor valor al solicitado, teniendo en cuenta el análisis de crédito que realice la entidad.</li>
						<li class="PolicyText">Para tomar las medidas que considere necesarias y que las normas legales los exijan, en caso de que el solicitante reúna las características de las personas públicamente expuestas.</li><br>
						<h4 class="text-left" style="font-weight:bold">AUTORIZACIÓN PARA CONSULTA Y REPORTE A LAS CENTRALES DE RIESGO:</h4>
						<p>Autorizo de manera expresa e irrevocable al Outsourcing proveer soluciones S.A, a quien represente sus derechos o a sus  sucesores a cualquier título a:</p>
						<ol>1. Reportar, procesar, solicitar y divulgar a cualquier operador de base de datos e información financiera, crediticia, comercial, de servicios y proveniente de terceros países, toda la información referente a mi comportamiento como cliente de las entidades financieras, de conformidad con los reglamentos a los cuales se sujeten las entidades antes mencionadas y la normatividad vigente sobre base de datos.</ol>
						<ol>2. Consultar ante cualquier operador de base de datos e información financiera, crediticia, comercial, de servicios y proveniente de terceros países mi endeudamiento directo o indirecto con las entidades financieras del país así como la información disponible sobre el cumplimiento o manejo dado a mis compromisos y obligaciones cono dicho sector.</ol>
						<ol>3. Conservar, tanto en el Outsourcing proveer soluciones S.A, en quien represente sus derechos o en sus sucesores a cualquier título como en los operadores de base de datos en información financiera, crediticia, comercial, de servicios, y proveniente de terceros países, con las debidas actualizaciones y durante el periodo necesario señalado en las disposiciones generales o en su reglamentos, la información indicada en los numerales 1 y 2 anteriores.</ol>
						<ol>4. Suministrar a cualquier operador de base de datos e información financiera, crediticia, com3ercialm, de servicios y provenientes de terceros países información requerida a mi solicitud de crédito así como datos atinentes a mis relaciones comerciales, financieras en general socioeconómicas que haya entregado o que consten en registros públicos, base de datos públicos o documentos públicos.</ol>
						<ol>5. Suministrar toda la información consultada y almacenada por proveer soluciones S.A a las matrices, filiales o subordinadas de la matriz y demás entidades vinculadas al mismo grupo, así como a terceros para fines comerciales. Declaro que conozco y acepto que los reporte negativos que las entidades financieras realice a cualquier operador de base de datos e información financiera, crediticia, comercial, de servicios y proveniente de terceros países pueden generar consecuencias negativas en acceso al crédito y demás servicios financieros, así como conozco el derecho que me asiste de solicitar rectificación y actualización de la información cuando eta no corresponda con la realidad crediticia, sin que tal derecho implique revocatoria alguna de las autorizaciones que se confieren a proveer soluciones. </ol>
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
					<a href="politicas.php" class="Footer-policy">Políticas y términos de uso y privacidad</a>
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
