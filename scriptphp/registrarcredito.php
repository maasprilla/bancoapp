<?php

include '../base_datos/conexion.php';

$bank= $_POST['bank'];
$typecredit= $_POST['typecredit'];
$comments= $_POST['comments'];
$city= $_POST['city'];
$maritalstatus= $_POST['maritalstatus'];
$anualincome= $_POST['anualincome'];
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


$sql = "insert into creditos (id_banco,id_tipo_credito,descripcion,id_ciudad,id_departamento,id_estadocivil,id_descripcion_financiera) VALUES ('".$bank."','".$typecredit."','".$comments."','".$cityanddepartment[0]."','".$cityanddepartment[1]."','".$maritalstatus."','".$anualincome."')";
if (mysql_query($sql) === TRUE) {
	header("Location: ../index.php");

}else{
	echo "f";
}








?>
