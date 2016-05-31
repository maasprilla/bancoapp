<?php
session_start();
include "../../base_datos/conexion.php";
$re=mysql_query("select * from usuarios where email='".$_POST['email']."' AND 
 					password='".$_POST['password']."'")	or die(mysql_error());
					
				
	while ($f=mysql_fetch_array($re)) {
		$id=$f['id_usuarios'];
			
	}
	
	if(isset($id)){		
		$_SESSION['Usuario']=$id;
		header("Location: ../../pages/bienvenido.php");
		
	}else{
		header("Location: ../../index.php?error=datos no validos");
	}
?>