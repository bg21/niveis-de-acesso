<?php
    class Painel{
        public static function verificaPermissaoMenu($permissao){
            if($_SESSION['cargo'] >= $permissao){
                //dá pra continuar na página
                return;
            }else{
                echo 'style="display:none;"';
            }
        }
        public static function verificaPermissaoPagina($permissao){
            if($_SESSION['cargo'] >= $permissao){
                //dá pra continuar na página
                return;
            }else{
                include('negado.php');
                die();
            } 
        }
    }
?>