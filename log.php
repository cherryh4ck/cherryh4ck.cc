<?php
    include_once("php/connect.php");

    if (isset($_GET['id'])){
        if (is_numeric($_GET['id']) && !($_GET['id'] < 1)){
            $id = $_GET['id'];
        }
        else{
            header("Location: log");
            exit();
        }
    }
    $json = file_get_contents('data/posts.json');
    $max_id = 0;

    // todo: better error handling
    $posts = json_decode($json, true);
    if ($posts) {
        $max_id = $posts[0]['id'];
        $target_id = isset($id) ? $id : $max_id;
        $posts_per_id = array_column($posts, null, 'id');

        if (isset($posts_per_id[$target_id])) {
            $post = $posts_per_id[$target_id];
            $exists = true;

            $id     = $post['id'];
            $title  = htmlspecialchars($post['title']);
            $author = htmlspecialchars($post['author']);
            $text   = nl2br(htmlspecialchars($post['text']));
            $date   = (new DateTime($post['published_at']))->format('Y/m/d H:i:s');
        }
        else{
            $exists = false;

            $title = "Not found!";
            $author = "";
            $date = "";
            $text = "this article doesn't exist, yet. <a href='log'>want to go back?</a>";
        }
    }
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
                    <li id="selected"><a href="log">[ Log/Diary ]</a></li>
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
                <h2>◆ Log / Diary</h2>
                
                <div class="blog-entry">
                    <h3 class="entry-title"><?php echo $title ?></h3>
                    
                    <div class="entry-meta">
                        <span><?php echo $author ?></span> — <span><?php echo $date ?></span>
                    </div>
                    
                    <article class="entry-content">
                        <p>
                            <?php echo $text ?>
                        <p>
                    </article>
                </div>

                <div class="blog-navigation">
                    <a href="log?id=<?php echo $id - 1?>" class="nav-btn" <?php if ($id == 1 || !$exists) { echo 'id="disabled"'; }  ?>>[ ≪ PREV ]</a>
                    <span style="color: #4a3a40;"> | </span>
                    <a href="log?id=<?php echo $id + 1?>" class="nav-btn" <?php if (!isset($_GET['id']) || $id == $max_id || !$exists) { echo 'id="disabled"'; }  ?> >[ NEXT ≫ ]</a>
                </div>

                <p style="color: #8a4a5f; margin-top: auto;">
                    ------------------------------------------<br>
                    <em>"Unlimited Cherry Works"</em>
                </p>
            </main>
        </div>

        <footer>
            &copy; 2026 Cherryh4ck
        </footer>
    </div>
</body>
</html>