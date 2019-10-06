<?php  
    require("{$_SERVER['DOCUMENT_ROOT']}/kernel.php");

    response(['mensagem' => 'Sem autorização'], 401);