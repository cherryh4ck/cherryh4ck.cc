<?php
    include_once("../php/connect.php");
    if (isset($_SESSION['user_id'])){
        header("Location: index");
        exit();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = $conn->prepare("SELECT * FROM users WHERE username = ?");
        $sql->execute([$username]);
        $fetch = $sql->fetch(PDO::FETCH_ASSOC);

        if ($fetch && password_verify($password, $fetch['password'])){
            $_SESSION['user_id'] = $fetch['id'];
            $_SESSION['user_name'] = $fetch['username'];
            $_SESSION['user_status'] = 'admin';
            header("Location: index");
            exit();
        }
        else{
            $_SESSION['login_error'] = "Access denied.";
            header("Location: login");
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles.css">
    <link rel="icon" href="../favicon.png">
    <title>cherry - login</title>
</head>
<body>
    <script>
        function formValidation(){
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            const errorMsg = document.getElementById('error-msg');

            if (username.trim().length === 0 || password.trim().length === 0){
                errorMsg.innerText = "Please fill the form.";
                return false;
            }

            return true;
        }
    </script>
    <div class="main-container">
        <header>
            <h1>cherryh4ck</h1>
        </header>

        <div class="content-wrapper" style="display: block;">
            <main class="center-content">
                <div class="login-box">
                    <h2 style="font-size: 13px; margin-bottom: 25px;">◆ AUTHENTICATION</h2>
                    
                    <form action="login.php" method="post" onsubmit="return formValidation();">
                        <div class="login-field">
                            <label>Username</label>
                            <input type="text" name="username" id="username" spellcheck="false">
                        </div>
                        
                        <div class="login-field">
                            <label>Password</label>
                            <input type="password" name="password" id="password">
                        </div>

                        <?php
                            if (isset($_SESSION['login_error'])){
                                echo "<p id='error-msg'>{$_SESSION['login_error']}</p>";
                                unset($_SESSION['login_error']);
                            }
                            else{
                                echo "<p id='error-msg'></p>";
                            }
                        ?>

                        <button type="submit" class="login-button">Login</button>
                    </form>

                    <div class="restricted-text">
                        - Restricted Area -
                    </div>
                </div>
                <a href="../index" id="go-back">go back</a>
            </main>
        </div>

        <footer>
            &copy; 2026 Cherryh4ck
        </footer>
    </div>
</body>
</html>