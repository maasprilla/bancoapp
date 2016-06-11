<?php
session_start();
include '../base_datos/conexion.php';



	if(isset($_SESSION['Usuario'])){

		$re=mysql_query("SELECT *, (TIMESTAMPDIFF(YEAR, fecha_nacimiento, CURDATE())) as edad FROM usuarios u where u.id_usuarios='".$_SESSION['Usuario']."'")or die(mysql_error());
		$f=mysql_fetch_array($re);

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
	<link rel="stylesheet" href="css/credito.css">
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
							<li class="MainMenu-item"><a href="./lists/creditoslist.php" class="MainMenu-link">Lista de Crédito</a></li>
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
		<section class="CreditHeaderMajor-container">
			<div class="container">
				<div class="jumbotron">
					<h1 class="text-center CreditHeader-title">Solicita tu crédito</h1>
					<p class="text-center CreditHeader-text">Llena el formulario para realizar una solicitud en línea</p>
					<div class="text-center">
						<i class="material-icons" style="font-size:48px">assignment</i>
					</div>
					<!-- <a href="descarga.php" target="_blank" class="DownloadLink">O prueba descargandolo aquí</a> -->
				</div>
			</div>
		</section>
		<section class="FormCreditMajor-container">
			<form action="../scriptphp/registrarcredito.php" method="post" role="form" class="FormCreditUsers" onsubmit="return validacion()">
				<h1 class="text-center FormCredit-title">Solicitud de crédito</h1>
				<label for="" class="Form-label">Banco</label>
				<div class="form-group">
					<select type="text" class="form-control" id="bank" name="bank" placeholder="Banco" required>
						<option value="" disabled selected>Banco</option>
						<?php
								$bancos=mysql_query("select * from bancos")or die(mysql_error());
								while ($fbancos=mysql_fetch_array($bancos)) {
						?>
								<option value="<?php echo $fbancos['id_banco'];?>"><?php echo $fbancos['nombre'];?></option>
	     			<?php
								}
						?>

					</select>
				</div>
				<label for="" class="Form-label">¿Autorizo al banco?</label>
				<div class="form-group">
					<label class="radio-inline"><input type="radio" id="autorizacionbancosi" name="autorizacionbanco" value="si" required>Si</label>
					<label class="radio-inline"><input type="radio" id="autorizacionbancono" name="autorizacionbanco" value="no" required>No</label>
				</div>
				<div class="form-group">
					<select type="text" class="form-control" id="typecredit" name="typecredit" placeholder="Tipo de crédito" required>
						<option value="" disabled selected>Tipo de crédito</option>
						<?php
								$tipocredito=mysql_query("select * from tipo_credito")or die(mysql_error());
								while ($ftipocredito=mysql_fetch_array($tipocredito)) {
						?>
								<option value="<?php echo $ftipocredito['id_tipo_credito'];?>"><?php echo $ftipocredito['nombre'];?></option>
	     				<?php
								}
						?>
					</select>
				</div>
				<br>
				<label for="" class="Form-label">Garantía ofrecida</label>
				<div class="form-group">
					<label class="radio-inline"><input type="radio" name="guarantee" value="codeudor" required>Firma codeudor</label>
					<label class="radio-inline"><input type="radio" name="guarantee" value="hipotecario" required>Hipotecaria</label>
					<label class="radio-inline"><input type="radio" name="guarantee" value="certificado" required>Certificado fondo nacional de garantias</label>
				</div>
				<div class="form-group">
					<textarea class="form-control textarea FormDescriptionCredit-text" id="comments" name="comments" placeholder="Descripción" rows="3" style="resize:none"></textarea>
				</div><br>
				<label for="" class="Form-label">Ciudad</label>
				<div class="form-group">
					<select type="text" class="form-control" id="city" name="city" placeholder="Ciudad" required>
						<option value="" disabled selected>Ciudad de domicilio</option>
						<?php
								$ciudades=mysql_query("select * from ciudades order by nombre asc")or die(mysql_error());
								while ($fciudades=mysql_fetch_array($ciudades)) {
						?>
								<option value="<?php echo $fciudades['id_ciudad'].'-'.$fciudades['id_departamento'];?>"><?php echo $fciudades['nombre'];?></option>
	     			<?php
								}
						?>
					</select>
				</div>
				<label for="" class="Form-label">Departamento</label>
				<div class="form-group">
					<select type="text" class="form-control" id="dpto" name="dpto" placeholder="Departamento" required>
						<option value="" disabled selected>Departamento</option>
						<?php
								$departamento=mysql_query("select * from departamentos order by nombre asc")or die(mysql_error());
								while ($fdepartamentos=mysql_fetch_array($departamentos)) {
						?>
								<option value="<?php echo $fdepartamento['id_departamento'].'-'.$fdepartamentos['id_paises'];?>"><?php echo $fdepartamentos['nombre'];?></option>
	     			<?php
								}
						?>
					</select>
				</div>
				<div class="form-group">
					<select type="text" class="form-control" id="typeid" name="typedocument" placeholder="Tipo de documento"  disabled="true"  required>
						<option value="" disabled selected>Tipo de documento</option>
						<?php
								$tipodocumento=mysql_query("select * from tipo_documentos")or die(mysql_error());
								while ($ftipodocumento=mysql_fetch_array($tipodocumento)) {
									if($ftipodocumento['id_tipo_documento']==$f['id_tipo_documento']){
						?>
								<option value="<?php echo $ftipodocumento['id_tipo_documento'];?>" disabled selected><?php echo $ftipodocumento['nombre'];?></option>
	     			<?php
									}
								}
						?>
					</select>
				</div>
				<div class="form-group">
					<input type="text" class="form-control FormCredit-input" id="id" name="documentnumber" placeholder="Número de documento" value="<?=$f['dni']?>" disabled="true" required>
				</div>
				<label for="" class="Form-label">Fecha de expedición</label>
				<div class="form-group">
					<input type="date" class="form-control FormCredit-input" id="id" name="dateexpedition" placeholder="Fecha de expedición" value="<?=$f['fecha_expedicion']?>" disabled="true" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control FormCredit-input" id="nombre" name="name" value="<?=$f['nombre1']?>" disabled="true" placeholder="Primer nombre (*)" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control FormCredit-input" id="segnombre" name="secondname" value="<?=$f['nombre2']?>" disabled="true" placeholder="Segundo nombre">
				</div>
				<div class="form-group">
					<input type="text" class="form-control FormCredit-input" id="apellido" name="lastname" value="<?=$f['apellido1']?>" disabled="true" placeholder="Primer apellido (*)" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control FormCredit-input" id="segapellido" name="secondlastname" value="<?=$f['apellido2']?>" disabled="true" placeholder="Segundo Apellido">
				</div>
				<div class="form-group">
					<input type="text" class="form-control FormCredit-input" id="age" name="age" placeholder="Edad" value="<?=$f['edad']?>" disabled="true" required>
				</div>
				<div class="form-group">
					<input type="tel" class="form-control FormCredit-input" id="phone" name="phone" placeholder="Teléfono" value="<?=$f['telefono']?>" disabled="true" required>
				</div>
				<div class="form-group">
					<input type="tel" class="form-control FormCredit-input" id="celphone" name="celphone" placeholder="Celular" value="<?=$f['celular']?>" disabled="true" required>
				</div>
				<div class="form-group">
					<input type="email" class="form-control FormCredit-input" id="email" name="email" placeholder="E-mail" value="<?=$f['email']?>" disabled="true" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control FormCredit-input" id="adress" name="adress" placeholder="Dirección de residencia" value="<?=$f['direccion']?>" disabled="true" required>
				</div>
				<div class="form-group">
					<select type="text" class="form-control" id="zone" name="zone" placeholder="Zona residencial" required>
						<option value="" disabled selected>Zona residencial</option>
						<option>Rural</option>
						<option>Urbana</option>
					</select>
				</div>
				<div class="form-group">
					<input type="text" class="form-control FormCredit-input" id="neighbor" name="neighbor" placeholder="Barrio" value="<?=$f['barrio']?>" disabled="true" required>
				</div>
				<div class="form-group">
					<select type="text" class="form-control" id="house" name="house" placeholder="Tipo de vivienda" required>
						<option value="" disabled selected>Tipo de vivienda</option>
						<option>Propia con hipoteca</option>
						<option>Propia sin hipoteca</option>
    				<option>Familiar</option>
    				<option>Arrendada</option>
					</select>
				</div>
				<div class="form-group">
					<select type="text" class="form-control" id="status" name="maritalstatus" placeholder="Estado civil" required>
						<option value="" disabled selected>Estado civil</option>
						<?php
								$estadocivil=mysql_query("select * from estadocivil")or die(mysql_error());
								while ($festadocivil=mysql_fetch_array($estadocivil)) {
						?>
								<option value="<?php echo $festadocivil['id_estadocivil'];?>"><?php echo $festadocivil['nombre'];?></option>
	     				<?php
								}
						?>
					</select>
				</div>
				<div class="form-group">
					<select type="text" class="form-control" id="peopleincharge" name="peopleincharge" placeholder="Número de personas a cargo" required>
						<option value="" disabled selected>Número de personas a cargo</option>
						<option>0</option>
						<option>1</option>
    				<option>2</option>
    				<option>3</option>
    				<option>4</option>
						<option>4 o más</option>
					</select>
				</div>
				<div class="form-group">
					<select type="text" class="form-control" id="studies" name="studies" placeholder="Último nivel de estudios terminados" required>
						<option value="" disabled selected>Último nivel de estudios terminados</option>
						<option>Primaria</option>
						<option>Secundaria</option>
    				<option>Universitaria</option>
    				<option>Postgrado</option>
    				<option>Técnico</option>
						<option>Ninguno</option>
					</select>
				</div>
				<div class="form-group">
					<input type="text" class="form-control FormCredit-input" id="Duties" name="Duties" placeholder="Profesión, ocupación u oficio" required>
				</div>
				<label for="" class="Form-label">Actividad Económica</label>
				<div class="form-group">
					<?php
							$descripcionactividad=mysql_query("select * from descripcion_actividad")or die(mysql_error());
							while ($fdescripcionactividad=mysql_fetch_array($descripcionactividad)) {
					?>
							<label class="radio text-justify" style="padding-left:3em"><input type="radio" name="descripcionactividad" value="<?php echo $fdescripcionactividad['id_descripcion_actividad'];?>" required><?php echo $fdescripcionactividad['nombre'];?></label>
							<label class="radio text-justify" style="padding-left:3em"><input type="radio" name="descripcionactividad" value="<?php echo $fdescripcionactividad['id_descripcion_actividad'];?>" required><?php echo $fdescripcionactividad['nombre'];?>Empleado</label>
							<label class="radio text-justify" style="padding-left:3em"><input type="radio" name="descripcionactividad" value="<?php echo $fdescripcionactividad['id_descripcion_actividad'];?>" required><?php echo $fdescripcionactividad['nombre'];?>Independiente</label>
							<label class="radio text-justify" style="padding-left:3em"><input type="radio" name="descripcionactividad" value="<?php echo $fdescripcionactividad['id_descripcion_actividad'];?>" required><?php echo $fdescripcionactividad['nombre'];?>Pensionado</label>
							<label class="radio text-justify" style="padding-left:3em"><input type="radio" name="descripcionactividad" value="<?php echo $fdescripcionactividad['id_descripcion_actividad'];?>" required><?php echo $fdescripcionactividad['nombre'];?>Rentista de capital</label>
							<label class="radio text-justify" style="padding-left:3em"><input type="radio" name="descripcionactividad" value="<?php echo $fdescripcionactividad['id_descripcion_actividad'];?>" required><?php echo $fdescripcionactividad['nombre'];?>Transportador</label>
							<label class="radio text-justify" style="padding-left:3em"><input type="radio" name="descripcionactividad" value="<?php echo $fdescripcionactividad['id_descripcion_actividad'];?>" required><?php echo $fdescripcionactividad['nombre'];?>Hogar</label>
							<label class="radio text-justify" style="padding-left:3em"><input type="radio" name="descripcionactividad" value="<?php echo $fdescripcionactividad['id_descripcion_actividad'];?>" required><?php echo $fdescripcionactividad['nombre'];?>Estudiante</label>
						<?php
							}
					?>
				</div>
				<div class="form-group">
					<textarea class="form-control textarea FormDescriptionCredit-text" id="comments" name="comments" placeholder="Describa su cargo, fecha de ingreso y tipo de contrato" rows="3" required style="resize:none"></textarea>
				</div><br>
				<div class="form-group">
					<input type="text" class="form-control FormCredit-input" id="org" name="org" placeholder="Nombre empresa o negocio" >
				</div>
				<div class="form-group">
					<input type="text" class="form-control FormCredit-input" id="nitorg" name="nitorg" placeholder="Nit empresa o negocio donde desarrolla actividad" >
				</div>
				<div class="form-group">
					<input type="text" class="form-control FormCredit-input" id="adressorg" name="adressorg" placeholder="Dirección empresa o negocio donde desarrolla actividad" >
				</div>
				<label for="" class="Form-label">Ciudad de empresa o negocio</label>
				<div class="form-group">
					<select type="text" class="form-control" id="city" name="city" placeholder="Ciudad de empresa o negocio">
						<option value="" disabled selected>Ciudad de domicilio</option>
						<?php
								$ciudades=mysql_query("select * from ciudades order by nombre asc")or die(mysql_error());
								while ($fciudades=mysql_fetch_array($ciudades)) {
						?>
								<option value="<?php echo $fciudades['id_ciudad'].'-'.$fciudades['id_departamento'];?>"><?php echo $fciudades['nombre'];?></option>
	     			<?php
								}
						?>
					</select>
				</div>
				<label for="" class="Form-label">Departamento de empresa o negocio</label>
				<div class="form-group">
					<select type="text" class="form-control" id="dpto" name="dpto" placeholder="Departamento de empresa o negocio">
						<option value="" disabled selected>Departamento</option>
						<?php
								$departamento=mysql_query("select * from departamentos order by nombre asc")or die(mysql_error());
								while ($fdepartamentos=mysql_fetch_array($departamentos)) {
						?>
								<option value="<?php echo $fdepartamento['id_departamento'].'-'.$fdepartamentos['id_paises'];?>"><?php echo $fdepartamentos['nombre'];?></option>
	     			<?php
								}
						?>
					</select>
				</div>
				<div class="form-group">
					<input type="text" class="form-control FormCredit-input" id="telorg" name="telorg" placeholder="Teléfono empresa o negocio" >
				</div>
				<div class="form-group">
					<select type="text" class="form-control" id="economicactivity" name="economicactivity" placeholder="Actividad económica empresa o negocio">
						<option value="" disabled selected>Actividad económica empresa o negocio</option>
						<option>Sector privado</option>
						<option>Sector público</option>
    				<option>Fuerzas armadas</option>
    				<option>Agricultura/Ganadería</option>
					</select>
				</div>
				<label for="" class="Form-label">Descripción Financiera</label>
				<div class="form-group">
					<input type="number" class="form-control FormCredit-input" id="ingresosmen" name="ingresosmen" placeholder="Total ingresos mensuales $" required>
				</div>
				<div class="form-group">
					<input type="number" class="form-control FormCredit-input" id="egresosmen" name="egresosmen" placeholder="Total egresos mensuales $" required>
				</div>
				<div class="form-group">
					<input type="number" class="form-control FormCredit-input" id="tact" name="tact" placeholder="Total activos (vehículos, inmuebles, maquinaria, etc)" required>
				</div>
				<div class="form-group">
					<input type="number" class="form-control FormCredit-input" id="tpas" name="tpas" placeholder="Total pasivos (deudas financieras, otras deudas, etc)" required>
				</div><br>
				<label for="" class="Form-label">Descripción Patrimonial</label><br><br>
				<label for="" class="Form-label">Relación de terrenos y bienes raíces</label>
				<div class="form-group">
					<select type="text" class="form-control" id="tipoinmueble" name="tipoinmueble" placeholder="Tipo de inmueble">
						<option value="" disabled selected>Tipo de inmueble</option>
						<option>Casa</option>
						<option>Apartamento</option>
    				<option>Bodega</option>
    				<option>Oficina</option>
						<option>Local</option>
						<option>Consultoría</option>
						<option>Lote</option>
					</select>
				</div>
				<div class="form-group">
					<input type="text" class="form-control FormCredit-input" id="dir" name="dir" placeholder="Dirección">
				</div>
				<div class="form-group">
					<select type="text" class="form-control" id="city" name="city" placeholder="Ciudad">
						<option value="" disabled selected>Ciudad</option>
						<?php
								$ciudades=mysql_query("select * from ciudades order by nombre asc")or die(mysql_error());
								while ($fciudades=mysql_fetch_array($ciudades)) {
						?>
								<option value="<?php echo $fciudades['id_ciudad'].'-'.$fciudades['id_departamento'];?>"><?php echo $fciudades['nombre'];?></option>
	     			<?php
								}
						?>
					</select>
				</div>
				<div class="form-group">
					<select type="text" class="form-control" id="dpto" name="dpto" placeholder="Departamento">
						<option value="" disabled selected>Departamento</option>
						<?php
								$departamento=mysql_query("select * from departamentos order by nombre asc")or die(mysql_error());
								while ($fdepartamentos=mysql_fetch_array($departamentos)) {
						?>
								<option value="<?php echo $fdepartamento['id_departamento'].'-'.$fdepartamentos['id_paises'];?>"><?php echo $fdepartamentos['nombre'];?></option>
	     			<?php
								}
						?>
					</select>
				</div>
				<div class="form-group">
					<input type="text" class="form-control FormCredit-input" id="use" name="use" placeholder="Valor comercial"><br>
				</div>
				<label for="" class="Form-label">Relación maquinaria, equipo y bienes vehículo</label>
				<div class="form-group">
					<select type="text" class="form-control" id="veh" name="veh" placeholder="Clase">
						<option value="" disabled selected>Tipo de inmueble</option>
						<option>Maquinaria</option>
						<option>Equipo</option>
    				<option>Automovil</option>
    				<option>Campero</option>
						<option>Camioneta</option>
						<option>Moto</option>
						<option>Taxi</option>
						<option>De carga</option>
						<option>De pasajeros</option>
					</select>
				</div>
				<div class="form-group">
					<input type="text" class="form-control FormCredit-input" id="model" name="model" placeholder="Modelo" >
				</div>
				<div class="form-group">
					<input type="text" class="form-control FormCredit-input" id="brand" name="brand" placeholder="Marca" >
				</div>
				<div class="form-group">
					<input type="text" class="form-control FormCredit-input" id="brand" name="brand" placeholder="Placa" >
				</div>
				<div class="form-group">
					<input type="money" class="form-control FormCredit-input" id="age" name="age" placeholder="Valor comercial" >
				</div><br>
				<label for="" class="Form-label">Fecha de solicitud</label>
				<div class="form-group">
					<input type="date" class="form-control FormCredit-input" id="id" name="date" placeholder="Fecha de solicitud" required>
				</div><br><br>
				<label for="" class="Form-label">Referencias</label><br><br>
				<label for="" class="Form-label">Referencia familiar</label>
				<div class="form-group">
					<input type="text" class="form-control FormCredit-input" id="model" name="model" placeholder="Nombres y apellidos" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control FormCredit-input" id="brand" name="brand" placeholder="Parentesco" required>
				</div>
				<div class="form-group">
					<input type="tel" class="form-control FormCredit-input" id="brand" name="brand" placeholder="Teléfono" required>
				</div>
				<div class="form-group">
					<input type="money" class="form-control FormCredit-input" id="age" name="age" placeholder="Dirección" required>
				</div>
				<label for="" class="Form-label">Ciudad</label>
				<div class="form-group">
					<select type="text" class="form-control" id="city" name="city" placeholder="Ciudad" required>
						<option value="" disabled selected>Ciudad de domicilio</option>
						<?php
								$ciudades=mysql_query("select * from ciudades order by nombre asc")or die(mysql_error());
								while ($fciudades=mysql_fetch_array($ciudades)) {
						?>
								<option value="<?php echo $fciudades['id_ciudad'].'-'.$fciudades['id_departamento'];?>"><?php echo $fciudades['nombre'];?></option>
	     			<?php
								}
						?>
					</select>
				</div>
				<label for="" class="Form-label">Departamento</label>
				<div class="form-group">
					<select type="text" class="form-control" id="dpto" name="dpto" placeholder="Departamento" required>
						<option value="" disabled selected>Departamento</option>
						<?php
								$departamento=mysql_query("select * from departamentos order by nombre asc")or die(mysql_error());
								while ($fdepartamentos=mysql_fetch_array($departamentos)) {
						?>
								<option value="<?php echo $fdepartamento['id_departamento'].'-'.$fdepartamentos['id_paises'];?>"><?php echo $fdepartamentos['nombre'];?></option>
	     			<?php
								}
						?>
					</select>
				</div><br>
				<label for="" class="Form-label">Referencia personal</label>
				<div class="form-group">
					<input type="text" class="form-control FormCredit-input" id="model" name="model" placeholder="Nombres y apellidos" required>
				</div>
				<div class="form-group">
					<input type="tel" class="form-control FormCredit-input" id="brand" name="brand" placeholder="Teléfono" required>
				</div>
				<div class="form-group">
					<input type="money" class="form-control FormCredit-input" id="age" name="age" placeholder="Dirección" required>
				</div>
				<label for="" class="Form-label">Ciudad</label>
				<div class="form-group">
					<select type="text" class="form-control" id="city" name="city" placeholder="Ciudad" required>
						<option value="" disabled selected>Ciudad de domicilio</option>
						<?php
								$ciudades=mysql_query("select * from ciudades order by nombre asc")or die(mysql_error());
								while ($fciudades=mysql_fetch_array($ciudades)) {
						?>
								<option value="<?php echo $fciudades['id_ciudad'].'-'.$fciudades['id_departamento'];?>"><?php echo $fciudades['nombre'];?></option>
	     			<?php
								}
						?>
					</select>
				</div>
				<label for="" class="Form-label">Departamento</label>
				<div class="form-group">
					<select type="text" class="form-control" id="dpto" name="dpto" placeholder="Departamento" required>
						<option value="" disabled selected>Departamento</option>
						<?php
								$departamento=mysql_query("select * from departamentos order by nombre asc")or die(mysql_error());
								while ($fdepartamentos=mysql_fetch_array($departamentos)) {
						?>
								<option value="<?php echo $fdepartamento['id_departamento'].'-'.$fdepartamentos['id_paises'];?>"><?php echo $fdepartamentos['nombre'];?></option>
	     			<?php
								}
						?>
					</select>
				</div><br><br>
				<label for="" class="Form-label">No olvides escanear y adjuntar los siguientes documentos:</label>
				<div class="form-group" style="text-align:left;">
					<li>Tu cédula al 150<a href="" class="AttachLink"> (Aquí)</a></li>
					<li>Tu firma<a href="" class="AttachLink"> (Aquí)</a></li>
					<li>Tus comprobantes de pago<a href="" class="AttachLink"> (Aquí)</a></li>
					<li>1 carta laboral<a href="" class="AttachLink"> (Aquí)</a></li>
				</div><br>
				<label for="" class="Form-label"><a href="politicas.php" target="_blank">Políticas y términos de uso y privacidad</a></label>
				<div class="form-group">
					<label class="radio-inline"><input type="radio" id="terminosycondicionessi" name="terminosycondiciones" value="" required>Acepto</label>
					<label class="radio-inline"><input type="radio" id="terminosycondicionesno" name="terminosycondiciones" value="" required>No acepto</label>
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
	<script >
	function validacion() {
		var autorizacionbanco = document.getElementById("autorizacionbancosi");
		if(autorizacionbanco.checked == false){
			alert("por favor acepte la autorizacion del banco");
			return false;
		}
		var terminosycondiciones = document.getElementById("terminosycondicionessi");
		if(terminosycondiciones.checked == false){
			alert("por favor acepte los terminos y condiciones");
			return false;
		}



	}
	</script>
</body>
</html>
