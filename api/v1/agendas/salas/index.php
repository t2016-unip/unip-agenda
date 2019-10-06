<?php  
    require("{$_SERVER['DOCUMENT_ROOT']}/kernel.php");

    use App\Controllers\AgendaController;

    $controller = new AgendaController;
    if (METHOD == 'GET') {
        response(['mensagem' => 'Sem autorização'], 401);
    }
    else if (METHOD == 'POST') {
        $controller->salas($_POST);
    }
    // else if (METHOD == 'PUT') {
    //     $controller->update(ID, $_POST);
    // }
    // else if (METHOD == 'DELETE') {
    //     $controller->destroy(ID);
    // }