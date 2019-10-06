<?php
    namespace App\Utils;

    use PDO;

    class Database {

        public static function query($sql, $debug = false) {
            $conn = new PDO(DB_TYPE . 
                ':host=' . DB_HOST . ';
                port=' . DB_PORT . ';
                dbname=' . DB_BASE, DB_USER, DB_PASS);
            // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            if($debug) dd($sql);
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }