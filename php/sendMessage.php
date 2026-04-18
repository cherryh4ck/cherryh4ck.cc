<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include_once("connect.php");
        $bytes = random_bytes(16);
        $uniqueKey = bin2hex($bytes);

        $name = htmlspecialchars($_POST["name"]);
        $message = htmlspecialchars($_POST["message"]);

        $query = "INSERT INTO messages(uniqueKey, author, message) VALUES(?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->execute([$uniqueKey, $name, $message]);
    }

    header("Location: ../sent.php?key=$uniqueKey");
    exit();
?>