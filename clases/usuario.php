<?php
class Usuario{
    private $nombre;
    private $email;
    private $password;
    private $password2;

    public function __construct($email, $password, $nombre=null,$password2=null){
      $this->nombre = $nombre;
      $this->email = $email;
      $this->password = $password;
      $this->password2 = $password2;

    }
    public function getNombre(){
      return $this->nombre;
    }
    public function getEmail(){
      return $this->email;
    }
    public function getPassword(){
      return $this->password;
    }
    public function getPassword2(){
      return $this->password2;
    }

    public function setNombre($nombre){
     $this->nombre =  $nombre;
    }
    public function setEmail($email){
     $this->email = $email;
    }
    public function setPassword($password){
     $this->password = $password;
    }
    public function setPassword2($password2){
      $this->password2 = $password2;
    }

}
