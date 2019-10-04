<?php
require("{$_SERVER['DOCUMENT_ROOT']}/kernel.php");

use App\Controllers\DispositivoController;

$controller = new DispositivoController;
if (METHOD == 'GET') {
    if (!ID)
        $controller->index();
    else
        $controller->show(ID);
} else if (METHOD == 'POST') {
    $controller->store($_POST);
} else if (METHOD == 'PUT') {
    $controller->update(ID, $_POST);
} else if (METHOD == 'DELETE') {
    $controller->delete(ID);
}
