<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Universidade Paulista</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?= asset('img/favicon.png') ?>" />
        <link rel="stylesheet" href="<?= asset('css/kernel/reset.css') ?>" />
        <link rel="stylesheet" href="<?= asset('css/kernel/structure.css') ?>" />
        <link rel="stylesheet" href="<?= asset('css/kernel/all.css') ?>" />
        <link rel="stylesheet" href="<?= asset('css/kernel/style.css') ?>" />
        #CSS_FILE#
    </head>
    <body>
        <div class="app">
            #MAIN#
        </div>
        <div class="js">
            <script src="<?= asset('js/jquery.min.js') ?>"></script>
            <script src="<?= asset('js/global.js') ?>"></script>
            <script src="<?= asset('js/jspdf.debug.js') ?>"></script>
            <script src="<?= asset('js/jspdf.plugin.autotable.min.js') ?>"></script>
	        <script src="<?= asset('js/pdfFromHTML.js') ?>"></script>
	        <script src="<?= asset('js/jquery-2.1.3.js') ?>"></script>
            <script src="<?= asset('js/html2canvas.js') ?>"></script>
            #JS_FILE#
        </div>
    </body>
</html>