<?php
    require("{$_SERVER['DOCUMENT_ROOT']}/kernel.php");

    use App\Controllers\LoginController;
    
    $controller = new LoginController;
    
    if (METHOD == 'GET') {
        if (!ID) {
            echo $controller->index();
        }
        else {
            // echo $controller->show(ID);
        }
    }
    else if (METHOD == 'POST') {
        echo $controller->login($_POST);
    }
    // else if (METHOD == 'PUT') {
    //     echo $controller->update(ID, $_POST);
    // }
    // else if (METHOD == 'DELETE') {
    //     echo $controller->destroy(ID);
    // }