<?php

namespace App\Controllers;

use App\Pages\View;
use App\Models\Categoria;

class CategoriaController
{
  public function index()
  {
    View::render('Categoria', ['categorias' => Categoria::all()]);
  }

  public function delete($id)
  {
    Categoria::delete($id);
    redirecionar('/categorias');
  }

  public function store($dados)
  {
    Categoria::store($dados);
    redirecionar('/categorias');
  }

  public static function show()
  {
    View::render('CriarCategoria');
  }

  public static function edit($id)
  {
    View::render('EditarCategoria', ['categoria' => Categoria::find($id)]);
  }

  public static function update($id, $dados)
  {
    Categoria::update($id, $dados);
    redirecionar('/categorias');
  }
}
