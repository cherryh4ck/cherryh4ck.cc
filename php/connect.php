<?php
    $host = "localhost";
    $port = 3306;
    $user = "root";
    $pass = "";
    $db = "cherryh4ck";

    try{
        $conn = new PDO("mysql:host=$host;port=$port;dbname=$db", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        // cambiar por un redirect
        echo "Connection error: " . $e->getMessage();
    }
?>