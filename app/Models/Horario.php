<?php   
    namespace App\Models;

    use App\Utils\Database as DB;

    class Horario {

        public static function tudo() {
            $sql = "SELECT * FROM horario";
            return DB::query($sql);
        }
    }