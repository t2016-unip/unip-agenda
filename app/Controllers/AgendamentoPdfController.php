<?php   
    namespace App\Controllers;

    use App\Models\Sala;
    use App\Models\Agenda;
    use App\Pages\View;

    class AgendamentoPdfController {

        public function home() {
            View::render('Agenda', ['agendasPdf' => Agenda::tudo()], [false, '/']);
            
        }

        public static function create() {
            View::render('CriarExport', ['blocos' => Bloco::tudo()]);
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