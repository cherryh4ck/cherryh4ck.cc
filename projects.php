<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="favicon.png" type="image/x-icon" />
    <title>projects</title>
</head>
<body>
    <nav>
        <img src="resources/missing.png" alt="cherryh4ck">
        <div class="nav-selection">
            <a href="messages.php" onmouseenter="showTooltip('1')" onmouseleave="hideTooltip()"><img src="resources/gifs/enchanted_bow.gif" alt=""></a>
            <a href="blog.php" onmouseenter="showTooltip('2')" onmouseleave="hideTooltip()"><img src="resources/gifs/enchanted_golden_apple.gif" alt=""></a>
            <a href="projects.php" onmouseenter="showTooltip('3')" onmouseleave="hideTooltip()"><img src="resources/gifs/enchanted_diamond_sword.gif" alt=""></a>

            <div class="tooltip" id="tooltip1" style="display: none; position: fixed; pointer-events: none; z-index: 9999;">
                <p id="enchanted-text"></p>
            </div>
        </div>

        <script>
            const tooltip = document.getElementById('tooltip1');
            const text = document.getElementById('enchanted-text');

            const array = [
                "messages (˶˃ ᗜ ˂˶)",
                "blog ( ദ്ദി ˙ᗜ˙ )",
                "projects (,,>﹏<,,)",
                "toms3 anarchy",
                "pix pang recreation",
                "spigot plugins"
            ]

            document.addEventListener('mousemove', (e) => {
                const offsetX = 25;
                const offsetY = -15;
                tooltip.style.left = e.clientX + offsetX + 'px';
                tooltip.style.top = e.clientY + offsetY + 'px';
            });

            function showTooltip(arg1, arg2 = false) {
                tooltip.style.display = 'inline-block';
                if (arg2) {
                    text.style.color = "#FF55FF";
                    text.style.textShadow = "2px 2px 0px #3F003F";
                }
                else{
                    text.style.color = "#71efef";
                    text.style.textShadow = "2px 2px 0px #1b4c4e";
                }
                text.textContent = array[parseInt(arg1) - 1];
            }

            function hideTooltip() {
                tooltip.style.display = 'none';
            }
        </script>
    </nav>
    <header>
        <br><br>
        <div class="projects">
            <a href="https://www.toms3.cc" onmouseenter="showTooltip('4', true)" onmouseleave="hideTooltip()"><img src="resources/icons/toms3.png" alt=""></a>
            <a href="https://github.com/cherryh4ck/PiX-Pang" onmouseenter="showTooltip('5', true)" onmouseleave="hideTooltip()"><img src="resources/icons/pixpang.png" alt=""></a>
            <a href="https://www.spigotmc.org/members/tomattex.889991/" onmouseenter="showTooltip('6', true)" onmouseleave="hideTooltip()"><img src="resources/icons/spigot.png" alt=""></a>
        </div>
        <br>
        <p id="green-text" style="text-align: center;">other projects:</p>
        <div class="other-projects">
            <a href="https://github.com/cherryh4ck/Toms3Core"><p>toms3core</p></a>
            <a href="https://github.com/cherryh4ck/tachibana"><p>tachibana (unfinished devox clone)</p></a>
            <a href="https://github.com/cherryh4ck/nanoboard"><p>nanoboard (unfinished 4chan clone)</p></a>
        </div>
        <button id="button" onclick="window.location.href='index.php'">go back ദ്ദി◝ ⩊ ◜.ᐟ</button>
    </header>
</body>
</html>