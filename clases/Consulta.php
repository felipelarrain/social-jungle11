<?php
class Consulta{
  public function guardarUsuario($bd, $Usuarios, $usuario){
    //dd($Usuarios);
    $sql = "insert into $Usuarios( email, password, nombre) values(:email, :password, :nombre)";
    $query = $bd->prepare ($sql);
    $query ->bindValue(':email', $usuario->getEmail());
    $query ->bindValue(':password', $usuario->getPassword());
    $query ->bindValue(':nombre', $usuario->getNombre());
    //dd($query);
    $query ->execute();
    header ("location: index.php");

  }

}
