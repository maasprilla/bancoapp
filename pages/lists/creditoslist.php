<?php
include '../../base_datos/conexion.php';
session_start();




	if(isset($_SESSION['Usuario'])){

		$re=mysql_query("
		SELECT cr.id_creditos, cr.descripcion as credito_descripcion, b.nombre as banco, u.nombre1 as usuario_nombre1, u.nombre2 as usuario_nombre2,
		u.apellido1 as usuario_apellido1, u.apellido2 as usuario_apellido2, u.dni as usuario_dni, u.fecha_expedicion as fecha_expedicion_cedula,
		u.email as usuario_email, u.telefono as usuario_telefono, u.direccion as usuario_direccion, u.fecha_nacimiento as usuario_fecha_nacimiento,
		tc.nombre as tipo_credito, ec.nombre as estadocivil, df.nombre as descripcion_financiera, da.nombre as descripcion_actividad, ci.nombre as ciudad
		FROM creditos cr join usuarios_has_creditos uc join usuarios u join tipo_credito tc
		join bancos b join estadocivil ec join descripcion_financiera df join descripcion_actividad da join ciudades ci
		where u.id_usuarios=uc.id_usuarios
		and cr.id_creditos=uc.id_creditos
		and cr.id_tipo_credito=tc.id_tipo_credito
		and b.id_banco=cr.id_banco
		and cr.id_estadocivil=ec.id_estadocivil
		and cr.id_descripcion_financiera=df.id_descripcion_financiera
		and da.id_descripcion_actividad=cr.id_descripcion_actividad
		and ci.id_ciudad=cr.id_ciudad
		and ci.id_departamento=cr.id_departamento
		")or die(mysql_error());

	}else{
		header("Location: ../index.php?Error=Acceso denegado");
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>BancoApp</title>
	<link rel="stylesheet" href="css/creditolist.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,300,700,500">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext">
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
							<li class="MainMenu-item"><a href="usuarioslist.php" class="MainMenu-link">Lista de usuarios</a></li>
							<li ng-show="vm.isAuthenticated()" class="MainMenu-item" onclick="showOptions()"><a><span class="glyphicon glyphicon-user"></span></a>

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
		<section class="CreditListHeaderMajor-container">
			<div class="container">
				<div class="jumbotron">
					<div class="CreditListHeaderImage-container" style="max-width:15em">
						<img src="../../static/images/admin.png" alt="Lista Créditos" style="width:100%">
					</div>
					<p class="text-center CreditList-text">Créditos realizados por los usuarios</p>
					<div class="text-center">
						<i class="material-icons" style="font-size:48px">list</i>
					</div>

				</div>
			</div>
		</section>
		<section class="CreditListTable-majorContainer">
			<div class="container-fluid">
				<h2 class="text-center CreditListTable-mainTitle">Listado de créditos</h2>
				<div class="row CreditListTable-Content">
					<table class="table CreditListTable">
						<thead>
							<tr>
								<th>Banco</th>
								<th>Cliente</th>
								<th>Tipo de crédito</th>
								<th>Descripción</th>
								<th>Fecha de expedición</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
							while ($f=mysql_fetch_array($re)) {
							?>
							<tr>
								<td data-title="'Banco'"><?php echo $f['banco'];?></td>
								<td data-title="'Cliente'"><?php echo $f['usuario_nombre1'].' '.$f['usuario_nombre2'].' '.$f['usuario_apellido1'].' '.$f['usuario_apellido2'];?></td>
								<td data-title="'Tipo de crédito'"><?php echo $f['tipo_credito'];?></td>
								<td data-title="'Descripción'"><?php echo $f['credito_descripcion'];?></td>
								<td data-title="'Fecha de expedición'"></td>
								<td data-title="'Ver más'"><button href="" onclick="loadDataModel(this);" class="TableLink" data-toggle="modal" data-target="#modalCredit" data-banco="<?php echo $f['banco'];?>">Ver más</button></td>
							</tr>
							<?php
									}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</section>

<!-- Modal -->
<div class="modal fade" id="modalCredit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
				<div class="form-group">
					<label>Banco</label>
					<input type="text" class="form-control FormCredit-input " id="banco" disabled="true" placeholder="Banco" required>
				</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

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
	<script src="./js/showmodalcredits.js"></script>
</body>
</html>
