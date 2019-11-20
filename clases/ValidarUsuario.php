<?php
 class ValidarUsuario {
   public function ValidadorUsuario($usuario){
     $errores = [];
     $nombre = trim($usuario->getNombre());
     if(empty($nombre)){
       $errores['nombre']= 'Campo requerido...';
     }
     $email = trim($usuario->getEmail());
     if (empty($email)){
      $errores ["email"] = "- Este campo no lo podes dejar vacío... ";
    } elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
     $errores["email"] = "- Email inválido...";
   }
    $password = trim($usuario->getPassword());
    if (empty($password)){
      $errores["password"] = "- Este campo no lo podes dejar vacío... ";
    }elseif (strlen($password) < 6) {
      $errores["password"] = "- La Contraseña debe tener como mínimo 6 caracteres";
    }
    $password2 = trim($usuario->getPassword2());
     if (empty($password2)){
      $errores["password2"] = "- Este campo no lo podes dejar vacío... ";
    } elseif($password != $password2){
        $errores["password2"] = "- Deben coincidir las dos contraseñas";
      }
      return $errores;
 }
}
