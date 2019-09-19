<?php   
    namespace App\Models;

    use App\Utils\Database as DB;

    class Curso {

        public static function tudo() {
            $sql = "SELECT * FROM curso";
            return DB::select($sql);
        }

        public static function salvar($request) {
            $request['flag_status'] = 1;
            foreach ($request as $key => $value) {
                $values[] = "'{$value}'";
                $keys[] = $key;
            }
            $sql = "INSERT INTO curso (" . implode(', ', $keys) . ") VALUES 
                (" . implode(', ', $values) . ");";  

            return DB::query($sql);
        }

        public static function atualizar($id, $request) {
            //if (empty($request['flag_status'])) $request['flag_status'] = 0;
            foreach ($request as $key => $value) $sets[] = "{$key} = '{$value}'";
            $sql = "UPDATE curso SET " . implode(', ', $sets) . " WHERE id_curso = {$id}";  
            
            return DB::query($sql);
        }
        

        public static function excluir($id) {
            //para excluir adicionar permição SET foreign_key_checks = 0; 
            $sql = "DELETE FROM curso WHERE id_curso = {$id}";
            return DB::query($sql);
        }

        public static function buscar($id) {
            $sql = "SELECT * FROM curso WHERE id_curso = {$id}";
            return DB::select($sql)[0];
        }
    }