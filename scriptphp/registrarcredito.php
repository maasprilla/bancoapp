<?php

include '../base_datos/conexion.php';

session_start();

$bank= $_POST['bank'];
$typecredit= $_POST['typecredit'];
$comments= $_POST['comments'];
$city= $_POST['city'];
$maritalstatus= $_POST['maritalstatus'];
$anualincome= $_POST['anualincome'];
$descripcionactividad= $_POST['descripcionactividad'];
$cityanddepartment = explode("-", $city);


echo 'banco';
echo $bank;
echo '$typecredit';
echo $typecredit;
echo '$comments';
echo $comments;
echo '$city';
echo $cityanddepartment[0];
echo '$department';
echo $cityanddepartment[1];
echo '$maritalstatus';
echo $maritalstatus;
echo '$anualincome';
echo $anualincome;


$sql = "insert into creditos (id_banco,id_tipo_credito,descripcion,id_ciudad,id_departamento,id_estadocivil,id_descripcion_financiera,id_descripcion_actividad) VALUES ('".$bank."','".$typecredit."','".$comments."','".$cityanddepartment[0]."','".$cityanddepartment[1]."','".$maritalstatus."','".$anualincome."','".$descripcionactividad."')";
if (mysql_query($sql) === TRUE) {
	$resultultimocredito=mysql_query("SELECT * FROM creditos order by id_creditos desc limit 1");
	$arrayultimocredito=mysql_fetch_array($resultultimocredito);
	$id_ultimocredito=$arrayultimocredito['id_creditos'];

	$sqlusuarios_has_creditos = "insert into usuarios_has_creditos (id_usuarios,id_creditos) VALUES ('".isset($_SESSION['Usuario'])."','".$id_ultimocredito."')";
	if (mysql_query($sqlusuarios_has_creditos) === TRUE) {
	header("Location: ../index.php");
	}

}else{
	echo "f";
}








?>
