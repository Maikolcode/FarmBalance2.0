<?php

    try {
        $conexion = new PDO("mysql:host=localhost;port=3306;dbname=farmbalance","root","Omi32LAZ");
        
    } catch (Exception $ex) {
        echo 'parece que hay un error'. $ex->getMessage();
    }
