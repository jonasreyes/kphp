<?php

namespace app\Controllers;

class Controller{

  public function view($route, $data = [])
  {
    // para poder pasar las variables contenidas en el array $data
    // mostrandolas fuera del array en la vista, debemos
    // Destructurar el array:
    extract($data);

    // return $description;



    // separamos los directorios con el caracter de punto o dot "."
    // y reemplazamos el caracter de punto o dot "." por un slash.
    $route = str_replace('.','/', $route);

    // almacenamos la cadena que lleva a la vista para evitar
    // fatiga en futuras modificaciones, modificando la cadena 
    // que es asignada a la variable modificaremos todas las demás
    // expresiones que usen la variable.
    $file_view = "../resources/views/{$route}.php";

    if (file_exists($file_view)) {
      ob_start();
      include $file_view;
      $content = ob_get_clean();

      return $content;
        
    } else {
      return "el archivo vista no existe.";
    }
    // fin del método view()
  }

}
