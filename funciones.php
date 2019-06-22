<?php
    /*
     * Archivo de funciones compartidas para el repo.
     * 
     * 
     *
     */

    function hashing($password) {
    	return password_hash($password, PASSWORD_DEFAULT);
    }

?>