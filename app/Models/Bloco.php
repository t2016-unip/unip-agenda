<?php

namespace App\Models;

use App\Utils\Database as DB;

class Bloco
{

    public static function tudo()
    {
        $sql = "SELECT * FROM bloco";
        return DB::query($sql);
    }

    public static function salvar($request){
        foreach ($request as $key => $value) {
            $values[] = "'{$value}'";
            $keys[] = $key;
        }
        $sql = "INSERT INTO bloco (" . implode(', ', $keys) . ") VALUES 
                (" . implode(', ', $values) . ");";
        return DB::query($sql);
    }

    public static function atualizar($id, $request)
    {
        foreach ($request as $key => $value) $sets[] = "{$key} = '{$value}'";
        $sql = "UPDATE bloco SET " . implode(', ', $sets) . " WHERE id_bloco = {$id}";
        return DB::query($sql);
    }


    public static function excluir($id)
    {
        $sql = "DELETE FROM bloco  WHERE id_bloco = {$id}";
        return DB::query($sql);
    }

    public static function buscar($id)
    {
        $sql = "SELECT * FROM bloco WHERE id_bloco = {$id}";
        return DB::query($sql)[0];
    }
}
