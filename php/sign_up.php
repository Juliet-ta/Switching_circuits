<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sign up</title>
    <link href="/css/sign_up.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="wrapper">
        <p>Sign up</p>
        <form action="check.php" method="post">
            <input type="text" placeholder="Name" id="name" name="name" class="form-control">
            <input type="text" placeholder="Surname" id="surname" name="surname" class="form-control">
            <input type="text" placeholder="Group" id="group" name="group" class="form-control">
            <input type="text" placeholder="Login" id="login" name="login" class="form-control">
            <input type="password" placeholder="Password" id="password" name="password" class="form-control">
            <input type="password" placeholder="Repeat password" id="password2" name="password2" class="form-control">
            <button class="btn btn-success" type="submit">Sign up</button>
            <small><small><small class="msg">
                <?php
                    if ($_SESSION['message']) {
                        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                    }
                    unset($_SESSION['message']);
                ?>
            </small></small></small>
        </form>
    </div>
</body>
</html>