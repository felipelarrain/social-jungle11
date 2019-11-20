<?php

 function validar($datos){
  $errores = [];
  $nombre = trim($datos["nombre"]);
  $email = trim($datos["email"]);
  $password = trim($datos["password"]);
  $password2 = trim($datos["password2"]);

   if ($nombre == ""){
     $errores ["nombre"] = "- Este campo no lo podes dejar vacío... ";
   }if (empty($email)){
    $errores ["email"] = "- Este campo no lo podes dejar vacío... ";
  }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
   $errores["email"] = "- Email inválido...";
 }
  if (empty($password)){
    $errores["password"] = "- Este campo no lo podes dejar vacío... ";
  }elseif (strlen($password) < 6) {
    $errores["password"] = "- La Contraseña debe tener como mínimo 6 caracteres";
  }
if (empty($password2)){
  $errores["password2"] = "- Este campo no lo podes dejar vacío... ";
}elseif($password != $password2){
    $errores["password2"] = "- Deben coincidir las dos contraseñas";
  }
   return $errores;
 }
 ?>
