<?php
    namespace App\Pages;

    class View {
        
        public static function render($viewName, array $data = [], $autenticar = true, $js = false, $css = false) {
            if ($autenticar && empty($_SESSION['usuario']['id_colaborador'])) {
                redirecionar('/');
            }

            ob_start();
            require_once("TemplateView.php");
            $page = ob_get_clean();

            ob_start();
            if($viewName !== null){
                extract($data);
                require_once("{$_SERVER['DOCUMENT_ROOT']}/app/Pages/{$viewName}View.php");    
            }
            $page = str_replace("#MAIN#", ob_get_clean(), $page);
            
            $page = str_replace("#JS_FILE#", (!$js ? '' : 
                "<script src='" . asset('js/' . strtolower($viewName) . '.js') . "'></script>"), $page);
            $page = str_replace("#CSS_FILE#", (!$css ? '' : 
                "<script src='" . asset('css/' . strtolower($viewName) . '.css') . "'></script>"), $page);
            
            echo $page;
        }
    }