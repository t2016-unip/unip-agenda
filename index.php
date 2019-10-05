<?php
    require("{$_SERVER['DOCUMENT_ROOT']}/kernel.php");

    use App\Controllers\LoginController;
    
    $controller = new LoginController;
    
    if (METHOD == 'GET') {
        echo $controller->index();
    }
    else if (METHOD == 'POST') {
        echo $controller->login($_POST);
    }