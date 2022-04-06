<?php
    session_start();
    require_once 'auth.php';

    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $surname = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);
    $group = filter_var(trim($_POST['group']), FILTER_SANITIZE_STRING);
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $password2 = filter_var(trim($_POST['password2']), FILTER_SANITIZE_STRING);
    
    if (mb_strlen($name) < 2 || !ctype_alpha($name)) {
        $_SESSION['message'] = "Name error";
        header('Location: sign_up.php');
        exit();
    }
    else if (mb_strlen($surname) < 2 || !ctype_alpha($surname)) {
        $_SESSION['message'] = "Surame error";
        header('Location: sign_up.php');
        exit();
    }
    else if (mb_strlen($group) > 5) {
        $_SESSION['message'] = "Group error";
        header('Location: sign_up.php');
        exit();
    }
    else if (mb_strlen($login) < 3) {
        $_SESSION['message'] = "Login error";
        header('Location: sign_up.php');
        exit();
    }
    else if (mb_strlen($password) < 3) {
        $_SESSION['message'] = "Password error";
        header('Location: sign_up.php');
        exit();
    }
    else if (mb_strlen($password) != mb_strlen($password2)) {
        $_SESSION['message'] = "Password mismatch";
        header('Location: sign_up.php');
        exit();
    }

    $password = md5($password);

    mysqli_query($connect, "INSERT INTO `users` (`name`, `surname`, `groups`, `login`, `pass`) VALUES('$name', '$surname', '$group', '$login', '$password')");
    $_SESSION['message'] = "Registration completed successfully";
    header('Location: ../index.php');
?>