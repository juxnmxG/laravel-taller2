<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dato;

class DatosController extends Controller
{
  public function index()
  {
      $dato = dato::all();
      return $dato;
  }
  public function create()
  {
    $dato = dato::all();
    return $dato;
  }
}
