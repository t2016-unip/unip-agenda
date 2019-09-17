<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Universidade Paulista</title>
        <meta charset="utf-8" />
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
            #JS_FILE#
        </div>
    </body>
</html>