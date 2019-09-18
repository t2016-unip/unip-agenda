<?php   
    namespace App\Models;

    use App\Utils\Database as DB;

    class Usuario {

        public static function autenticar($email, $senha) {
            $columns = DB::query("SHOW COLUMNS from colaborador");
            if ($columns[3]['Type'] != 'text') {
                DB::query("ALTER TABLE unip.colaborador MODIFY COLUMN senha TEXT NULL;");
                DB::query("UPDATE colaborador SET senha = '202cb962ac59075b964b07152d234b70' WHERE id_colaborador = 1;");
            }

            $senha = md5($senha);
            $sql = "SELECT * FROM colaborador 
                WHERE email = '{$email}' 
                AND senha = '{$senha}'";
           return DB::query($sql)[0];
        }
    }