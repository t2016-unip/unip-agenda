<?php
    require("{$_SERVER['DOCUMENT_ROOT']}/kernel.php");

    use App\Controllers\CursoController;
    
    $controller = new CursoController;
    if (METHOD == 'GET') {
        if (!ID)
            $controller->home();
        else
            $controller->show(ID);
    }
    else if (METHOD == 'POST') {
        $controller->store($_POST);
    }
    else if (METHOD == 'PUT') {
        $controller->update(ID, $_POST);
    }
    else if (METHOD == 'DELETE') {
        $controller->destroy(ID);
    }