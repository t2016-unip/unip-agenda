<?php

namespace App\Controllers;

use App\Pages\View;

class AgendaController
{

    public function index()
    {
        View::render('Agenda', [], [false, '/']);
    }

    // public static function create()
    // {
    //     View::render('CriarBloco');
    // }

    // public function show($id)
    // {
    //     View::render('EditarBloco', ['bloco' => Bloco::buscar($id)]);
    // }

    // public function store($request)
    // {
    //     Bloco::salvar($request);
    //     redirecionar('/blocos');
    // }

    // public function update($id, $request)
    // {
    //     Bloco::atualizar($id, $request);
    //     redirecionar("/blocos");
    // }

    // public function destroy($id)
    // {
    //     Bloco::excluir($id);
    //     redirecionar('/blocos');
    // }
}
