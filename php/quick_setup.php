<?php
    include_once("connect.php");
    $sql = $conn->prepare("
        CREATE TABLE IF NOT EXISTS users(id INT AUTO_INCREMENT PRIMARY KEY, username VARCHAR(50) NOT NULL, password TEXT NOT NULL);
        CREATE TABLE IF NOT EXISTS articles(id INT AUTO_INCREMENT PRIMARY KEY, author VARCHAR(50) NOT NULL, title TEXT NOT NULL, text TEXT NOT NULL, published_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);
    ");

    $sql->execute();
    echo "done";
?>