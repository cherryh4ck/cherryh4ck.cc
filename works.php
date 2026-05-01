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
                    <li><a href="index">[ Index ]</a></li>
                    <li><a href="profile">[ Profile ]</a></li>
                    <li><a href="log">[ Log/Diary ]</a></li>
                    <li id="selected"><a href="works">[ Works ]</a></li>
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
                <h2>◆ Works</h2>
                <div class="works-container">
                    <p>my projects:</p>
                    <ul class="works-list">
                        <li>
                            <a href="https://toms3.cc">toms3.cc</a>
                            <span class="description">minecraft 1.21.11 anarchy server.<br>running since 3 february 2026</span>
                        </li>
                        <li>
                            <a href="https://github.com/cherryh4ck/Toms3Core">toms3core</a>
                            <span class="description">custom plugin developed for toms3.cc<br>currently has unique functions and patches<br>still in-dev</span>
                        </li>
                        <li>
                            <a href="https://github.com/cherryh4ck/PiX-Pang">pix pang demake</a>
                            <span class="description">a demake of the arcade pang clone "pix pang", made by pix juegos<br>currently on v1.4 and considered finished</span>
                        </li>
                        <li>
                            <a href="#">toms2 <em>?</em></a>
                            <span class="description">minecraft 1.8.9 / 1.9.4 anarchy server.<br>future project, may or may not happen</span>
                        </li>
                        <li>
                            <a href="https://github.com/cherryh4ck/tachibana">tachibana <em>?</em></a>
                            <span class="description">devox clone but without being anonymous<br>unfinished<br>no plans to keep developing it</span>
                        </li>
                        <li>
                            <a href="https://github.com/cherryh4ck/Nanoboard">nanoboard <em>?</em></a>
                            <span class="description">an open source 4chan clone<br>still on the works<br>development is halted due to my lack of free time</span>
                        </li>
                    </ul>

                    <p style="margin-top: 20px;">other works:</p>
                    <ul class="works-list">
                        <li>
                            <a href="https://www.spigotmc.org/members/tomattex.889991/#resources">my spigot plugins</a>
                            <span class="description">various plugins, mostly for anarchy servers<br>currently nothing complex</span>
                        </li>
                    </ul>
                </div>

                <p style="color: #8a4a5f; margin-top: auto;">
                    ------------------------------------------<br>
                    <em>"遠坂 凛"</em>
                </p>
            </main>
        </div>

        <footer>
            &copy; 2026 Cherryh4ck
        </footer>
    </div>
</body>
</html>