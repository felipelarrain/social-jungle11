<?php
function old ($dato){
  if (isset($_POST[$dato])){
    return $_POST[$dato];
  }
}

function dd($valor){
  echo "<pre>";
  var_dump($valor);
  exit;
  echo "</pre>";
}
 ?>
