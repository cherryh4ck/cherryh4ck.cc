<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="favicon.png" type="image/x-icon" />
    <title>messages</title>
</head>
<body>
    <nav>
        <img src="resources/missing.png" alt="cherryh4ck">
        <div class="nav-selection">
            <a href="messages.php" onmouseenter="showTooltip('tooltip1')" onmouseleave="hideTooltip()"><img src="resources/gifs/enchanted_bow.gif" alt=""></a>
            <a href="blog.php" onmouseenter="showTooltip('tooltip2')" onmouseleave="hideTooltip()"><img src="resources/gifs/enchanted_golden_apple.gif" alt=""></a>
            <a href="projects.php" onmouseenter="showTooltip('tooltip3')" onmouseleave="hideTooltip()"><img src="resources/gifs/enchanted_diamond_sword.gif" alt=""></a>

            <div class="tooltip" id="tooltip1" style="display: none; position: fixed; pointer-events: none; z-index: 9999;">
                <p id="enchanted-text"></p>
            </div>
        </div>

        <script>
            const tooltip = document.getElementById('tooltip1');
            const text = document.getElementById('enchanted-text');

            document.addEventListener('mousemove', (e) => {
                const offsetX = 25;
                const offsetY = -15;
                tooltip.style.left = e.clientX + offsetX + 'px';
                tooltip.style.top = e.clientY + offsetY + 'px';
            });

            function showTooltip(arg1) {
                tooltip.style.display = 'inline-block';
                if (arg1 === 'tooltip1') {
                    text.textContent = "messages (˶˃ ᗜ ˂˶)";
                }
                else if (arg1 === 'tooltip2') {
                    text.textContent = "blog ( ദ്ദി ˙ᗜ˙ )";
                }
                else if (arg1 === 'tooltip3') {
                    text.textContent = "projects (,,>﹏<,,)";
                }
            }

            function hideTooltip() {
                tooltip.style.display = 'none';
            }
        </script>
    </nav>
    <header>
        <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["key"]) && !empty($_POST["key"])) {
                    include_once("php/connect.php");
                    $query = "SELECT * FROM messages WHERE uniqueKey = ?";
                    $stmt = $conn->prepare($query);
                    $stmt->execute([$_POST["key"]]);
                    $message = $stmt->fetch(PDO::FETCH_ASSOC);
                    if ($message) {
                        $id = $message["id"];
                        echo '
                            <p id="green-text"> > ' . htmlspecialchars($message["sent_at"]) . '</p>
                            <p id="whisper">' . htmlspecialchars($message["author"]) . ' whispered: ' . htmlspecialchars($message["message"]) . '</p>
                        ';

                        $checkResponse = "SELECT * FROM responses WHERE messageId = ?";
                        $stmt = $conn->prepare($checkResponse);
                        $stmt->execute([$id]);
                        $response = $stmt->fetch(PDO::FETCH_ASSOC);
                        if ($response) {
                            echo '
                                <p id="whisper">cherry replied: ' . htmlspecialchars($response["response"]) . '</p>
                            ';
                        }
                        else{
                            echo '
                                <p id="no-reply">but no one answered... yet (╥﹏╥)</p>
                            ';
                        }
                    } else {
                        echo '
                            <p id="whisper">no message found for this key (╥﹏╥)</p>
                        ';
                    }
                    echo '<br><button id="button" onclick="window.location.href=\'messages.php\'">go back (˶˃ ᗜ ˂˶)</button>';
                    exit();
                }
            ?>
        <p>please type your key below:</p>
        <form action="messages.php" method="post">
            <input type="text" name="key" placeholder="your key" required>
            <br><br>
            <input type="submit" value="view message (˶˃ ᗜ˂˶)">
        </form>
        <button id="button" onclick="window.location.href='index.php'">go back ദ്ദി◝ ⩊ ◜.ᐟ</button>
    </header>
</body>
</html>