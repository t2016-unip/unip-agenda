<?php   
    namespace App\Models;

    use App\Utils\Database as DB;

    class Agenda {

        public static function tudo() {
            $sql = "SELECT * FROM agenda a 
                JOIN horario h on (h.id_horario = a.id_horario)
                JOIN colaborador c on (c.id_colaborador = a.id_colaborador)
                JOIN curso co on (co.id_curso = a.id_curso)
                JOIN sala s on (s.id_sala = a.id_sala)
                ORDER BY data DESC, h.id_horario DESC";
            $agendas = DB::query($sql);

            foreach ($agendas as $agenda) $ids[] = $agenda['id_agenda'];

            if (!empty($ids)) {
                $sql = "SELECT nome_dispositivo FROM agenda_dispositivo ad
                    JOIN dispositivo d on (d.id_dispositivo = ad.id_dispositivo)
                    WHERE id_agenda in (" . implode(', ', $ids) . ")";

                foreach (DB::query($sql) as $agenda) {
                    $dispositivos[$agenda['id_agenda']] = $agenda;
                }

                foreach ($agendas as $key => $agenda) {
                    if (!empty($dispositivos[$agenda['id_agenda']])) {
                        $agendas[$key]['dispositivos'] = $dispositivos[$agenda['id_agenda']];
                    }
                }
            }

            return $agendas;
        }

        public static function salvar($request) {
            foreach ($request as $key => $value) {
                $values[] = "'{$value}'";
                $keys[] = $key;
            }
            $sql = "INSERT INTO agenda (" . implode(', ', $keys) . ") VALUES 
                (" . implode(', ', $values) . ");";  

            DB::query($sql);

            $sql = "SELECT id_agenda FROM agenda ORDER BY id_agenda DESC LIMIT 1";  
            return DB::query($sql)[0];
        }

        public static function excluir($id) {
            $sql = "DELETE FROM agenda WHERE id_agenda = {$id}"; 
            return DB::query($sql);
        }

        public static function buscar($id) {
            $sql = "SELECT * FROM agenda WHERE id_agenda = {$id}"; 
            return DB::query($sql)[0];
        }

        public static function diasAgendado($request) {
            $dI = date('Y-m-d');
            $dF = alterarData('', '+', '7', 'days', 'Y-m-d');
            $sql = "SELECT * FROM agenda 
                WHERE data BETWEEN '{$dI}' AND '{$dF}'
                AND id_sala = {$request['id_sala']}
                AND id_horario = {$request['id_horario']}";

            return DB::query($sql);
        }
    }