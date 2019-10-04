<?php

namespace App\Controllers;

use App\Models\Bloco;
use App\Pages\View;

class BlocoController
{

    public function home()
    {
        View::render('Bloco', ['blocos' => Bloco::tudo()], true, true);
    }

    public static function create()
    {
        View::render('CriarBloco');
    }

    public function show($id)
    {
        View::render('EditarBloco', ['bloco' => Bloco::buscar($id)]);
    }

    public function store($request)
    {
        Bloco::salvar($request);
        redirecionar('/blocos');
    }

    public function update($id, $request)
    {
        Bloco::atualizar($id, $request);
        redirecionar("/blocos");
    }

    public function destroy($id)
    {
        Bloco::excluir($id);
        redirecionar('/blocos');
    }
}
