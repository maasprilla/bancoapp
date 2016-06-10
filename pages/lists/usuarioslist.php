<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>BancoApp</title>
	<link rel="stylesheet" href="css/usuarioslist.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arimo">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../static/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../static/css/bootstrap.min366.css">
	<link rel="stylesheet" href="../../static/css/hover-min.css">
	<link rel="stylesheet" href="../../static/js/bootstrap.min.js">
	<link rel="stylesheet" href="../../static/js/bootstrap.min336.js">
	<link rel="stylesheet" href="../../static/js/jquery-1.11.3.min.js">
	<link rel="stylesheet" href="../../static/js/jquery-1.12.2.min.js">
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
								<img alt="Brand" src="../../static/images/logo4.png" class="Logo-image" style="width:100%">
							</a>
						</div>
					</div>
					<div class="navbar-collapse collapse MainMenu-listContainer">
						<ul class="nav navbar-right MainMenu-list">
							<li class="MainMenu-item"><a href="../bienvenido.php" class="MainMenu-link">Inicio</a></li>
							<li class="MainMenu-item"><a href="creditoslist.php" class="MainMenu-link">Listado de créditos</a></li>
							<li ng-show="vm.isAuthenticated()" class="MainMenu-item" onclick="showOptions()"  style="cursor:pointer"><a><span class="glyphicon glyphicon-user"></span></a>

								<div id="Options" class="Options z-depth-1">
									<div class="OptSelect">
										<a  class="MainMenu-link MainMenu-linkLogOut"  href="../scriptphp/login/cerrar.php" style="color:#777">Cerrar Sesion</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<section class="UsersListHeaderMajor-container">
			<div class="container">
				<div class="jumbotron">
					<div class="UsersListHeaderImage-container" style="max-width:15em">
						<img src="../../static/images/admin.png" alt="Lista Usuarios" style="width:100%">
					</div>
					<p class="text-center UsersList-text">Usuarios registrados</p>
					<div class="text-center">
						<i class="material-icons" style="font-size:48px">supervisor_account</i>
					</div>

				</div>
			</div>
		</section>
		<section class="UsersListTable-majorContainer">
			<div class="container-fluid">
				<h2 class="text-center UsersListTable-mainTitle">Listado de usuarios</h2>
				<div class="row UsersListTable-Content">
					<table class="table UsersListTable">
						<thead>
							<tr>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Teléfono</th>
								<th>Dirección</th>
								<th>Email</th>
								<th>Ciudad</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td data-title="'Nombre'"></td>
								<td data-title="'Apellido'"></td>
								<td data-title="'Teléfono'"></td>
								<td data-title="'Dirección'"></td>
								<td data-title="'Email'"></td>
								<td data-title="'Ciudad'"></td>
							</tr>
						</tbody>
					</table>
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
					<a href="../politicas.php" target="_blank" class="Footer-policy">Políticas y términos de uso y privacidad</a>
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
	<script src="../../static/js/bootstrap.min.js"></script>
	<script src="../../static/js/bootstrap.min336.js"></script>
	<script src="../../static/js/jquery-1.11.3.min.js"></script>
	<script src="../../static/js/jquery-1.12.2.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.12.2.min.js"></script>
	<script src="../../static/js/desplegablelogout.js"></script>
</body>
</html>
