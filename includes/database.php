<?php

    define("HOST", "");
    define("DB_NAME", "");
    define("USER", "");
    define("PASS", "");
    define("TABLE", "");

    try {

        $db = new PDO("mysql:host=".HOST.";dbname=".DB_NAME, USER, PASS, array( PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
        echo $e;
    }
?>