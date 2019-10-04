<?php

namespace App\Models;

use App\Utils\Database as DB;

class Categoria
{
  public static function all()
  {
    $sql = "SELECT * FROM categoria";
    return DB::query($sql);
  }

  public static function delete($id)
  {
    $sql = "DELETE FROM categoria WHERE id_categoria = {$id}";
    return DB::query($sql);
  }

  public static function store($dados)
  {
    $sql = "INSERT INTO categoria(nome_categoria) VALUES ('{$dados['nome_categoria']}')";
    return DB::query($sql);
  }

  public static function find($id)
  {
    $sql = "SELECT * FROM categoria WHERE id_categoria = {$id}";
    return DB::query($sql)[0];
  }

  public static function update($id, $dados)
  {
    $sql = "UPDATE categoria SET nome_categoria = '{$dados['nome_categoria']}' WHERE id_categoria = {$id}";
    return DB::query($sql)[0];
  }
}
