<?php
class BaseMysql{
static public function conexion(){
  try {
  $dsn = "mysql:host=localhost;dbname=social-jungle1;port=8889;charset=utf8mb4";
  $usuario = "root";
  $password= "root";
  $opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
  $bd = new PDO($dsn,$usuario,$password,$opt);
  return $bd;

} catch(PDOException $error) {
  echo "<h2> No me puedo conectar a la Base de datos...<br> </h2>".$error->getMessage();
  exit;
}
}
}
 ?>
