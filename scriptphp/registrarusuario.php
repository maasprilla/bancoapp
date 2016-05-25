<?php

include '../base_datos/conexion.php';

$name= $_POST['name'];
$lastname= $_POST['lastname'];
$tipodocumento= $_POST['tipodocumento'];
$numerodocumento= $_POST['numerodocumento'];
$email= $_POST['email'];
$password= $_POST['password'];
$adress= $_POST['adress'];
$phone= $_POST['phone'];
echo $name;
echo $lastname;
echo $tipodocumento;
echo $numerodocumento;
echo $email;
echo $password;
echo $adress;
echo $phone;


$sql = "insert into usuarios (nombres,apellidos,id_tipo_documento,dni,email,telefono,direccion,password) VALUES ('".$name."','".$lastname."','".$tipodocumento."','".$numerodocumento."','".$email."','".$phone."', '".$adress."','".$password."')";   
if (mysql_query($sql) === TRUE) {
	echo "string";

}else{
	echo "f";
}
		 

		

			
					
?>









