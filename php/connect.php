<?php
    $host = "localhost";
    $port = 3306;
    $db = "cherry";
    $user = "root";
    $pass = "";
    try{
        $conn = new PDO("mysql:host=$host:$port;dbname=$db", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        session_start();
    }
    catch (PDOException $e){
        echo "errorr!!!! -> $e";
    }
?>