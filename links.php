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
                    <li><a href="works">[ Works ]</a></li>
                    <li  id="selected"><a href="links">[ Links ]</a></li>
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
                <h2>◆ Links</h2>
                
                <div class="links-container">
                    <p>social media:</p>
                    <ul class="works-list">
                        <li>
                            <a href="https://github.com/cherryh4ck" target="_blank">github</a>
                            <span class="description">see my horrible code here!111</span>
                        </li>
                        <li>
                            <a href="https://twitter.com/cherryh4ck" target="_blank">twitter / x</a>
                            <span class="description">random thoughs</span>
                        </li>
                        <li>
                            <a href="https://steamcommunity.com/id/cherryh4ck" target="_blank">steam</a>
                            <span class="description">games i play</span>
                        </li>
                        <li>
                            <a href="https://youtube.com/@cherryh4ck" target="_blank">youtube</a>
                            <span class="description">random videos, mostly about toms3.cc</span>
                        </li>
                    </ul>

                    <p style="margin-top: 25px;">contact info:</p>
                    <ul class="works-list">
                        <li>
                            <span style="color: #c0a0ac;">discord:</span> 
                            <span style="color: #ff85a2; font-weight: bold;">@cherryh4ck</span>
                            <span class="description">feel free to add me<br>i dont really judge</span>
                        </li>
                        <li>
                            <span style="color: #c0a0ac;">email:</span> 
                            <span style="color: #ff85a2; font-weight: bold;">cherry@toms3.cc</span>
                            <span class="description">for any inquiries</span>
                        </li>
                    </ul>
                </div>

                <p style="color: #8a4a5f; margin-top: auto;">
                    ------------------------------------------<br>
                    <em>"keep yourself safe!"</em>
                </p>
            </main>
        </div>

        <footer>
            &copy; 2026 Cherryh4ck
        </footer>
    </div>
</body>
</html>