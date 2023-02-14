<?php

// Es muy importate que la invocación a las carpetas del namespace se declaren con la primera letra 
// en minúscula. 
use lib\Route;

use app\Controllers\HomeController;

Route::get('/', [HomeController::class,'index']);

// Route::get('/', function(){
//   return HomeController::class;
// });

Route::get('/contact', function(){

  return "Hola desde la página de contacto";
   
});

Route::get('/about', function(){
  return "Hola desde la página Acerca De..";
});

Route::get('/courses/prueba', function(){

  return 'Hola desde Courses Prueba...'; 
});

Route::get('/courses/:slug', function($slug){
 return "El curso es: $slug";
});

// Fin de Route
Route::dispatch();
