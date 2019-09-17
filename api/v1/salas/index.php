<?php  
    require("{$_SERVER['DOCUMENT_ROOT']}/kernel.php");

    use App\Controllers\SalaController;

    $controller = new SalaController;
    if (METHOD == 'GET') {
        if (!ID) {
            echo $controller->index();
        }
        else {
            echo $controller->show(ID);
        }
    }
    else if (METHOD == 'POST') {
        echo $controller->store($_POST);
    }
    else if (METHOD == 'PUT') {
        echo $controller->update(ID, $_POST);
    }
    else if (METHOD == 'DELETE') {
        echo $controller->destroy(ID);
    }