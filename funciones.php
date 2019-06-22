<?php
    /*
     * Archivo de funciones compartidas para el repo.
     * 
     * 
     *
     */

    function funcionUno ($numero) {
        $numero = $numero * 4;
        return $numero + 1;
    }
    function hashing($password) {
    	return password_hash($password, PASSWORD_DEFAULT);
    }
    function esMayor ($numero) {
        if($numero>18){
            echo "es mayor de edad";
        }else{
            echo "es menor de edad";
        }
        return $numero;
    }

    ssh-keygen -t rsa -b 4096 -C "mail";

    function esPadre ($edadNiño) {
        if($edadNiño>=2){
            echo "es padre, la piba tenia razon";
        }else{
            echo "la piba tenia problemas psiquiatricos";
        }
        return $edadNiño;
    }

?>