<?php
    include_once("php/connect.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="favicon.png">
    <title>cherry</title>
</head>
<body>
    <div class="main-container">
        <header>
            <h1>cherryh4ck</h1>
        </header>

        <div class="content-wrapper">
            <nav>
                <ul>
                    <li id="selected"><a href="index">[ Index ]</a></li>
                    <li><a href="profile">[ Profile ]</a></li>
                    <li><a href="log">[ Log/Diary ]</a></li>
                    <li><a href="works">[ Works ]</a></li>
                    <li><a href="links">[ Links ]</a></li>
                    <?php
                        if (isset($_SESSION['user_status']) && $_SESSION['user_status'] == 'admin'){
                            echo "<li><a href='admin/index'>[ Admin Panel ]</a></li>";
                        }
                        else{
                            echo "<li><a href='admin/login'>[ Login ]</a></li>";
                        }
                    ?>
                </ul>
                <div style="margin-top: 50px; text-align: center;">
                    <img src="resources/buttons/windows20.png" alt="button" style="border: 1px solid #5a3a45;">
                    <img src="resources/buttons/yumenikki2.gif" alt="button" style="border: 1px solid #5a3a45;">
                    <img src="resources/buttons/4x3_fade.gif" alt="button" style="border: 1px solid #5a3a45;">
                    <img src="resources/buttons/ah.gif" alt="button" style="border: 1px solid #5a3a45;">
                    <img src="resources/buttons/anarchy.png" alt="button" style="border: 1px solid #5a3a45;">
                    <img src="resources/buttons/csbanner.gif" alt="button" style="border: 1px solid #5a3a45;">
                    <img src="resources/buttons/kawaiibutton.gif" alt="button" style="border: 1px solid #5a3a45;">
                    <p style="font-size: 9px; color: #5a3a45;">88x31 buttons</p>
                </div>
            </nav>

            <main>
                <h2>◆ Welcome</h2>
                <p>
                    this is my personal archive, where i store my thoughts, projects and who knows, maybe more. it's a bit of a mess and i'm still working on it, but feel free to explore.
                </p>

                <p style="color: #8a4a5f; margin-top: auto;">
                    ------------------------------------------<br>
                    <em>"Beep beep!"</em>
                </p>
            </main>
        </div>

        <footer>
            &copy; 2026 Cherryh4ck
        </footer>
    </div>
</body>
</html>