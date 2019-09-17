<?php
    namespace App\Utils;

    class Database {

        public static function select($sql, $debug = false) {
            $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_BASE, DB_PORT);
            if($debug) dd($sql);
            $dados = mysqli_query($conn, $sql);
            $rows = [];
            if ($dados->num_rows) {
                while($row = mysqli_fetch_assoc($dados))
                    $rows[] = $row;
            }
            return $rows;
        }

        public static function query($sql, $debug = false) {
            $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_BASE, DB_PORT);
            if($debug) dd($sql);
            $dados = mysqli_query($conn, $sql);
            return $dados;
        }
    }