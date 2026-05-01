<?php
    include_once("../php/connect.php");
    if (!isset($_SESSION['user_status']) || $_SESSION['user_status'] !== "admin"){
        header("Location: ../index");
        exit();
    }

    if ($_SERVER["REQUEST_METHOD"] == 'POST'){
        $author = $_SESSION['user_name'];
        $title = htmlspecialchars($_POST['title']);
        $text = htmlspecialchars($_POST['text']);

        $sql = $conn->prepare("INSERT INTO articles(author, title, text) VALUES (?, ?, ?)");
        $sql->execute([$author, $title, $text]);
    
        $sql = $conn->prepare("SELECT * FROM articles ORDER BY published_at DESC");
        $sql->execute();
        $fetch = $sql->fetchAll(PDO::FETCH_ASSOC);

        $json_data = json_encode($fetch, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        file_put_contents('../data/posts.json', $json_data);
    }
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles.css">
    <link rel="icon" href="../favicon.png">
    <title>cherry - new entry</title>
    <style>
        .admin-form { display: flex; flex-direction: column; gap: 15px; }
        .admin-form input, .admin-form textarea {
            background-color: #0d0a0b;
            border: 1px solid #5a3a45;
            color: #e0c0cc;
            padding: 8px;
            font-family: inherit;
        }
        .admin-form textarea { height: 200px; resize: none; width: 100%; box-sizing: border-box;}
        .admin-form input:focus, .admin-form textarea:focus { border-color: #ff85a2; outline: none; }
        .submit-btn {
            width: fit-content;
            background-color: #2a1a20;
            color: #ff85a2;
            border: 1px solid #ff85a2;
            padding: 5px 20px;
            cursor: pointer;
            transition: 0.2s;
        }
        .submit-btn:hover { background-color: #ff85a2; color: #0d0a0b; }
    </style>
</head>
<body>
    <div class="main-container">
        <header>
            <h1>cherryh4ck // admin panel</h1>
        </header>

        <div class="content-wrapper">
            <nav>
                <ul>
                    <li><a href="index">[ Dashboard ]</a></li>
                    <li id="selected"><a href="#">[ New Entry ]</a></li>
                    <li><a href="../index">[ View Site ]</a></li>
                    <li><a href="logout">[ Logout ]</a></li>
                </ul>
            </nav>

            <main>
                <h2>◆ New Entry</h2>
                <form action="new_entry.php" method="post" class="admin-form">
                    <div class="login-field" style="margin:0;">
                        <label>Title</label>
                        <input type="text" placeholder="Entry title..." style="width: 96%;" name="title">
                    </div>
                    
                    <div class="login-field" style="margin:0;">
                        <label>Content</label>
                        <textarea placeholder="Write your thoughts here..." name="text"></textarea>
                    </div>

                    <button type="submit" class="login-button">Publish</button>
                </form>

                <p style="color: #8a4a5f; margin-top: 20px;">
                    ------------------------------------------<br>
                    <em>"Alpha's Stacked 32k's"</em>
                </p>
            </main>
        </div>

        <footer>
            &copy; 2026 Cherryh4ck
        </footer>
    </div>
</body>
</html>