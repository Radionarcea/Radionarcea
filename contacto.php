<?php
// Website Contact Form Generator 
// http://www.tele-pro.co.uk/scripts/contact_form/ 
// This script is free to use as long as you  
// retain the credit link  

// get posted data into local variables
$EmailFrom = Trim(stripslashes($_POST['EmailFrom'])); 
$EmailTo = "joseantoniocangas@gmail.com";
$Subject = "Contacto  www.radionarceatv.es";
$Nombre = Trim(stripslashes($_POST['Nombre'])); 
$Apellidos = Trim(stripslashes($_POST['Apellidos'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Mensaje = Trim(stripslashes($_POST['Mensaje'])); 

// validation
$validationOK=true;
if (Trim($EmailFrom)=="") $validationOK=false;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contacto_error.html\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Nombre: ";
$Body .= $Nombre;
$Body .= "\n";
$Body .= "Apellidos: ";
$Body .= $Apellidos;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $EmailFrom;
$Body .= "\n";
$Body .= "Mensaje: ";
$Body .= $Mensaje;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contacto_ok.html\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contacto_error.html\">";
}
?>