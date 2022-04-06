<?php
    session_start();
    require_once 'auth.php';

    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $password = md5(filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING));

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$password'");

    if (mysqli_num_rows($check_user) > 0) {
        header('Location: L1.php');
    }
    else {
        $_SESSION['message'] = "Login or password error";
        header('Location: ../index.php');
    }
?>