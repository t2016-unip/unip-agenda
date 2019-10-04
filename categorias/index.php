<?php
require("{$_SERVER['DOCUMENT_ROOT']}/kernel.php");

use App\Controllers\CategoriaController;

$controller = new CategoriaController();

if (METHOD == 'GET') {
  if (!ID)
    $controller->index();
  else
    $controller->edit(ID);
} else if (METHOD == 'POST') {
  $controller->store($_POST);
} else if (METHOD == 'DELETE') {
  $controller->delete(ID);
} else if (METHOD == 'PUT') {
  $controller->update(ID, $_POST);
}
