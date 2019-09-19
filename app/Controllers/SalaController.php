<?php   
    namespace App\Controllers;

    use App\Models\Sala;
    use App\Pages\View;

    class SalaController {

        public function home() {
            View::render('Sala', ['salas' => Sala::tudo()]);
        }

        public static function create() {
            View::render('CriarSala');
        }

        public function show($id) {
            View::render('EditarSala', ['sala' => Sala::buscar($id)]);
        }

        public function store($request) {
            Sala::salvar($request);
            redirecionar('/salas'); 
        }

        public function update($id, $request) {
            Sala::atualizar($id, $request);
            redirecionar("/salas/{$id}"); 
        }

        public function destroy($id) {
            Sala::excluir($id);
            redirecionar('/salas'); 
        }
    }