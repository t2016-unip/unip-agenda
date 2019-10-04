<?php

namespace App\Models;

use App\Utils\Database as DB;

class Dispositivo
{

  public static function all()
  {
    $sql = "SELECT * FROM dispositivo";
    return DB::query($sql);
  }

  public static function store($request)
  {
    foreach ($request as $key => $value) {
      $values[] = "'{$value}'";
      $keys[] = $key;
    }
    $sql = "INSERT INTO dispositivo (" . implode(', ', $keys) . ") VALUES 
      (" . implode(', ', $values) . ");";
    return DB::query($sql);
  }

  public static function detail($id)
  {
    $sql = "SELECT * FROM dispositivo WHERE id_dispositivo={$id}";
    return DB::query($sql)[0];
  }

  public static function update($id, $request)
  {
    foreach ($request as $key => $value) $sets[] = "{$key} = '{$value}'";
    $sql = "UPDATE dispositivo SET " . implode(', ', $sets) . " WHERE id_dispositivo = {$id}";
    return DB::query($sql);
  }

  public static function delete($id)
  {
    $sql = "DELETE FROM dispositivo WHERE id_dispositivo = {$id}";
    return DB::query($sql);
  }
}
