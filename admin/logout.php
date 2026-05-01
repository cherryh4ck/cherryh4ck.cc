<?php
    include_once("../php/connect.php");
    if (!isset($_SESSION['user_status']) || $_SESSION['user_status'] !== "admin"){
        header("Location: ../index");
        exit();
    }

    session_unset();
    session_destroy();
    header("Location: ../index");
?>
