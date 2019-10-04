<?php

namespace App\Controllers;

use App\Models\Dispositivo;
use App\Pages\View;

class DispositivoController
{

  public function index()
  {
    View::render('Dispositivo', ['dispositivos' => Dispositivo::all()]);
  }

  public static function create()
  {
    View::render('CriarDispositivo');
  }

  public function store($request)
  {
    Dispositivo::store($request);
    redirecionar('/dispositivos');
  }

  public function show($id)
  {
    View::render('EditarDispositivo', ['dispositivo' => Dispositivo::detail($id)]);
  }

  public function update($id, $request)
  {
    Dispositivo::update($id, $request);
    redirecionar('/dispositivos');
  }

  public function delete($id)
  {
    Dispositivo::delete($id);
    redirecionar('/dispositivos');
  }
}
