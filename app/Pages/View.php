<?php
    namespace App\Pages;

    use App\Utils\Autenticar;

    class View {
        
        public static function render($viewName, array $data = [], $autenticar = ['admin', '/'], $js = false, $css = false) {
           
            if ($autenticar) Autenticar::verificar($autenticar[0], $autenticar[1]);

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