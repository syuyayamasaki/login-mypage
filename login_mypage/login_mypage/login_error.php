<?php
    session_start();
    if(isset($_SESSION['id'])) {
        header("Location:mypage.php");
    }
?>

<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="login_error.css">
</head>
<body>
    <header>
        <img src="4eachblog_logo.jpg">
        <div class="login"><a href="login.php">ログイン</a></div>
    </header>
    <main>
        <form action="mypage.php" method="post">
            <div class="error_contents">
                <div class="error_message">メールアドレスまたはパスワードが間違っています。</div>
                <div class="mail">
                    <label>メールアドレス</label><br>
                    <input type="text" class="formbox" size="40" 
                    value="<?php if(!empty($_POST['login_keep'])) {
                        echo $_COOCKIE['mail'];
                        }
                        ?>" name="mail"><br>
                </div>
                <div class="password">
                    <label>パスワード</label><br>
                    <input type="password" class="formbox" size="40" 
                    value="<?php if(!empty($_POST['login_keep'])) {
                        echo $_COOCKIE['password'];
                        }
                        ?>" name="password"><br>
                </div>
                <div class="login_check">    
                    <label><input type="checkbox" class="formbox" size="40" name="login_keep" value="login_keep"
                    <?php 
                        if(isset($_POST['login_keep'])) {
                            echo "checked='checked'";
                        }
                    ?>>ログイン状態を保持する</label>
                </div>
                <div class="loginbutton">
                    <input type="submit" class="submit_button" size="35" value="ログイン">
                </div>
            </div>
        </form>
    </main>
    <footer>
        © 2018 InterNous.inc All rights reserved
    </footer>
</body>
</html>