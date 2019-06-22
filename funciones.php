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

?>