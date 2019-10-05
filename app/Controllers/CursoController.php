<?php   
    namespace App\Controllers;

    use App\Models\Curso;
    use App\Pages\View;

    class CursoController {

        public function home() {
            View::render('Curso', ['cursos' => Curso::tudo()]);
        }

        public static function create() {
            View::render('CriarCurso');
        }

        public function show($id) {
         
            View::render('EditarCurso', ['curso' => Curso::buscar($id)]);
        }

        public function store($request) {
            Curso::salvar($request);
            redirecionar('/cursos'); 
        }

        public function update($id, $request) {
            Curso::atualizar($id, $request);
            redirecionar("/cursos"); 
        }

        public function destroy($id) {
            Curso::excluir($id);
            redirecionar('/cursos'); 
        }
    }