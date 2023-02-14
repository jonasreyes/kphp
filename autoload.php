<?php spl_autoload_register(function($clase){

  $ruta = '../' . str_replace("\\", "/", $clase) . ".php";

  // Este código genera un error si se invoca el namespace utilizando la primera letra
  // mayúscula.
  // se solventaría si se logra garantizar que la primera letra de la carpeta raíz de la ruta
  // se encuentre escrita en minúscula.
  if (file_exists($ruta)){
    require_once $ruta;
  } else {
    die("No se pudo cargar la clase $clase en la ruta $ruta");
  }
    
});
