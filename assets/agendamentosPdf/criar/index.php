<?php
    require("{$_SERVER['DOCUMENT_ROOT']}/kernel.php");

    use App\Controllers\AgendamentoPdfController;
    
    AgendamentoPdfController::create();