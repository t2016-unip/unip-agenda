<?php
    require("{$_SERVER['DOCUMENT_ROOT']}/kernel.php");

    use App\Controllers\AgendaController;
    
    $controller = new AgendaController;
    if (METHOD == 'GET') {
        if (!ID)
            $controller->datas();
        // else
        //     $controller->show(ID);
    }
    else if (METHOD == 'POST') {
        $controller->report($_POST);
    }
    // else if (METHOD == 'PUT') {
    //     $controller->update(ID, $_POST);
    // }
    // else if (METHOD == 'DELETE') {
    //     $controller->destroy(ID);
    // }