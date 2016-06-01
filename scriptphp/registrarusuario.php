<?php

include '../base_datos/conexion.php';

$name1= $_POST['name1'];
$name2= $_POST['name2'];
$lastname1= $_POST['lastname1'];
$lastname2= $_POST['lastname2'];
$fechanacimiento= $_POST['fechanacimiento'];
$tipodocumento= $_POST['tipodocumento'];
$numerodocumento= $_POST['numerodocumento'];
$fechaexpediciondni= $_POST['fechaexpediciondni'];
$email= $_POST['email'];
$password= $_POST['password'];
$adress= $_POST['adress'];
$phone= $_POST['phone'];



$sql = "insert into usuarios (nombre1,nombre2,apellido1,apellido2,fecha_nacimiento,id_tipo_documento,dni,fecha_expedicion,email,telefono,direccion,password) VALUES ('".$name1."','".$name2."','".$lastname1."','".$lastname2."','".$fechanacimiento."','".$tipodocumento."','".$numerodocumento."','".$fechaexpediciondni."','".$email."','".$phone."', '".$adress."','".$password."')";
if (mysql_query($sql) === TRUE) {
	header("Location: ../index.php");

}else{
	echo "f";
}






?>
