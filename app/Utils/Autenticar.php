<?php
    namespace App\Utils;

    class Autenticar {

        public static function verificar($nivel = 'admin', $pagina = '/') {
            if (!$nivel) $nivel = $_SESSION['usuario']['nivel']; 
            if (
                $_SESSION['usuario']['nivel'] != $nivel || 
                !$_SESSION['usuario']['flag_status'] ||
                empty($_SESSION['usuario']['id_colaborador'])
            ) {
                redirecionar($pagina);
            }
        }
    }