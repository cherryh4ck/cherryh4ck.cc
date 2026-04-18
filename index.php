<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="favicon.png" type="image/x-icon" />
    <title>cherryh4ck</title>
</head>
<body>
    <nav>
        <img src="resources/missing.png" alt="cherryh4ck">
        <div class="nav-selection">
            <a href="" onmouseenter="showTooltip('tooltip1')" onmouseleave="hideTooltip()"><img src="resources/gifs/enchanted_bow.gif" alt=""></a>
            <a href="" onmouseenter="showTooltip('tooltip2')" onmouseleave="hideTooltip()"><img src="resources/gifs/enchanted_golden_apple.gif" alt=""></a>
            <a href="" onmouseenter="showTooltip('tooltip3')" onmouseleave="hideTooltip()"><img src="resources/gifs/enchanted_diamond_sword.gif" alt=""></a>

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
                    text.textContent = "messages";
                }
                else if (arg1 === 'tooltip2') {
                    text.textContent = "blog";
                }
                else if (arg1 === 'tooltip3') {
                    text.textContent = "projects";
                }
            }

            function hideTooltip() {
                tooltip.style.display = 'none';
            }
        </script>
    </nav>
    <header>
        <p style="font-style: italic;">
            welcome home, traveler.
            <br><br>
            you are now free to rest.
        </p>
        <br>
        <p>
            this site is still wip. expect nothing though.
            <br><br>
            feel free to leave me a message below:
        </p>
        <form action="php/sendMessage.php" method="post">
            <input type="text" name="name" placeholder="your name" required>
            <br><br>
            <textarea name="message" placeholder="your message" required></textarea>
            <br><br>
            <input type="submit" value="send">
        </form>
    </header>
</body>
</html>