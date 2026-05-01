<?php
    include_once("../php/connect.php");
    if (!isset($_SESSION['user_status']) || $_SESSION['user_status'] !== "admin"){
        header("Location: ../index");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles.css">
    <link rel="icon" href="../favicon.png">
    <title>cherry - admin</title>
</head>
<body>
    <div class="main-container">
        <header>
            <h1>cherryh4ck // admin panel</h1>
        </header>

        <div class="content-wrapper">
            <nav>
                <ul>
                    <li id="selected"><a href="index">[ Dashboard ]</a></li>
                    <li><a href="new_entry">[ New Entry ]</a></li>
                    <li><a href="../index">[ View Site ]</a></li>
                    <li><a href="logout">[ Logout ]</a></li>
                </ul>
                <div style="margin-top: 50px; text-align: center; opacity: 0.5;">
                    <p style="font-size: 9px; color: #5a3a45;">ADMIN MODE</p>
                </div>
            </nav>

            <main>
                <h2>◆ Dashboard</h2>
                <div class="status-box">
                    <strong>Logged in as:</strong> <span style="color: #ff85a2;"><?php echo $_SESSION['user_name']; ?></span><br>
                    <strong>Database:</strong> <span style="color: #c0a0ac;">Connected</span>
                </div>

                <p>command center!!!!</p>
                
                <div>
                    <p>stats:</p>
                    <ul class="works-list">
                        <li>total log entries: 12</li>
                    </ul>
                </div>

                <p style="color: #8a4a5f; margin-top: auto;">
                    ------------------------------------------<br>
                    <em>"/op @a"</em>
                </p>
            </main>
        </div>

        <footer>
            &copy; 2026 Cherryh4ck
        </footer>
    </div>
</body>
</html>