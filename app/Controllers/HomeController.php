<?php

namespace app\Controllers;
use app\Models\Contact;

class HomeController extends Controller
{
  public function index()
  {
    $contactModel = new Contact();

    $contactModel->delete(9);

    return "Eliminado exitósamente!";
    // return $contactModel->update(10, [

    //   'name'  =>  'Hugo Rafael',
    //   'email' =>  'hrcf@hack.gob.ve'
    // ]);

    // return $contacModel->create([
    //   'name' => 'Hugo Andres',
    //   'email' => 'hugo@gmail.com',
    //   'phone' => '123412341234'
    // ]);

    // return $contacModel->query('SELECT * FROM contacts')->all();
    // return $contacModel->where('id', '>=', 2)->get();

    // return $this->view('home', [
    //   'title' => 'Home',
    //   'description' => 'Esta es la página Home.'
    // ]);
  }
}
