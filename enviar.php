<?php
$mail ='joseantoniocangas@gmail.com'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$pais =  $_POST['pais'];
$mensaje =  $_POST['mensaje'];
$thank ="gracias.html";
$message = "(este es el encargado de redactar el mensaje que va hacer que sean enviados.)
nombre:" .$nombre."
email:" .$email."
telefono:" .$telefono."
pais:" .$pais."
mensaje:" .$mensaje."";
if (mail($mail, "Formulario",$message))
Header ("Location: $thank" );
?>