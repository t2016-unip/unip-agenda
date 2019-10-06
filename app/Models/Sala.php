<?php   
    namespace App\Models;

    use App\Utils\Database as DB;

    class Sala {

        public static function tudo() {
            $sql = "SELECT * FROM sala s JOIN bloco b on (b.id_bloco = s.id_bloco)";
            return DB::query($sql);
        }

        public static function disponiveis() {
            $sql = "SELECT * FROM sala where flag_status = 1";
            return DB::query($sql);
        }

        public static function salvar($request) {
            if (empty($request['id_bloco'])) $request['id_bloco'] = 1;
            $request['flag_status'] = 1;
            foreach ($request as $key => $value) {
                $values[] = "'{$value}'";
                $keys[] = $key;
            }
            $sql = "INSERT INTO sala (" . implode(', ', $keys) . ") VALUES 
                (" . implode(', ', $values) . ");";  
            return DB::query($sql);
        }

        public static function atualizar($id, $request) {
            if (empty($request['flag_status'])) $request['flag_status'] = 0;
            foreach ($request as $key => $value) $sets[] = "{$key} = '{$value}'";
            $sql = "UPDATE sala SET " . implode(', ', $sets) . " WHERE id_sala = {$id}";  
            return DB::query($sql);
        }
        

        public static function excluir($id) {
            $sql = "DELETE FROM sala WHERE id_sala = {$id}"; 
            return DB::query($sql);
        }

        public static function buscar($id) {
            $sql = "SELECT * FROM sala WHERE id_sala = {$id}"; 
            return DB::query($sql)[0];
        }
    }