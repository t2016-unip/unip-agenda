<?php   
    namespace App\Models;

    use App\Utils\Database as DB;

    class Usuario {

        public static function autenticar($email, $senha) {
            $sql = "SELECT * FROM colaborador 
                WHERE email = '{$email}' 
                AND senha = '{$senha}'";
           return DB::select($sql);
        }
    }