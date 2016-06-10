<?php
  $sendTo = "lakathevanegas@gmail.com";
  $subject = "Mensaje de contacto";
  $titulo = "Alguien se ha contactado con usted";
  $name = $_POST["name"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];
  $comment = $_POST["comments"];
  $message = "\nAlguien se ha contactado con usted:" . "\nNombre" . $name . "\nApellido" . $lastname . "\nEmail" . $email . "\nComentario" . $comment;
  mail($sendTo, $subject, $message);
  header('Location: ../pages/contactenos.php');
?>
