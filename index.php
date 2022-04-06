<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Switching circuits</title>
    <link href="/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="entry">
        <p>Sign in</p>
        <form action="/php/sign_in.php" method="post">
            <input type="text" placeholder="Login" id="login" name="login">
            <input type="password" placeholder="Password" id="password" name="password">
            <button class="btn btn-success" type="submit">Play</button>
        </form>
        <h5 class="msg" style="font-size: 0.35em; color:seagreen">
            <?php
                if ($_SESSION['message']) {
                    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                }
                unset($_SESSION['message']);
            ?>
        </h5>
    </div>
    <div id="sign_up">
        <form>
            <input type="button" id="sign_up" name="sign_up" value="Sign up" onClick='location.href="/php/sign_up.php"'>
        </form>
    </div>
</body>
</html>