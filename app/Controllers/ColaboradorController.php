<?php

namespace App\Controllers;

use App\Pages\View;
use App\Models\Colaborador;

class ColaboradorController
{
  public function index()
  {
    View::render('Colaborador', ['colaboradores' => Colaborador::tudo()]);
  }

  public function delete($id)
  {
    Colaborador::excluir($id);
    redirecionar('/colaboradores');
  }

  public function store($dados)
  {
    Colaborador::salvar($dados);
    redirecionar('/colaboradores');
  }

  public static function show()
  {
    View::render('CriarColaborador', ['niveis' => Colaborador::$niveis]);
  }

  public static function edit($id)
  {
    View::render('EditarColaborador', ['colaborador' => Colaborador::buscar($id), 'niveis' => Colaborador::$niveis]);
  }

  public static function update($id, $dados)
  {
    Colaborador::atualizar($id, $dados);
    redirecionar('/colaboradores');
  }
}
