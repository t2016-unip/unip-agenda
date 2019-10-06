<?php   
    namespace App\Models;

    use App\Utils\Database as DB;

    class AgendaDispositivo {

        public static function usados($request) {
            $sql = "SELECT * FROM agenda_dispositivo ad 
                JOIN agenda a ON (a.id_agenda = ad.id_agenda)
                WHERE a.data = '{$request['data']}'
                AND a.id_horario = {$request['id_horario']}";

            return DB::query($sql);
        }

        public static function salvar($request){
            foreach ($request as $key => $value) {
                $values[] = "'{$value}'";
                $keys[] = $key;
            }
            $sql = "INSERT INTO agenda_dispositivo (" . implode(', ', $keys) . ") VALUES 
                    (" . implode(', ', $values) . ");";
            return DB::query($sql);
        }    
    }