<?php
    $key = $_GET["key"];
    if (empty($key) || !isset($key)) {
        header("Location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="favicon.png" type="image/x-icon" />
    <title>sent!!1</title>
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
        <p style="font-style: italic; text-align: center;">
            your message has been sent.
            <br>
            your key is <b><?php echo $_GET["key"]; ?></b>.
            <br><br>
            use this key to view if i replied to your message.
        </p>
        <p style="text-align: center;">thanks!! >ᴗ<</p>
        <button id="button" onclick="window.location.href='index.php'">go back ദ്ദി◝ ⩊ ◜.ᐟ</button>
    </header>
</body>
</html>