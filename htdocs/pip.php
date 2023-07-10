<?php
    session_start();
    require_once 'connect.php';
    $login = trim($_POST['login']);
    $password = $_POST['password'];
    $check_login = mysqli_query($link, "SELECT * FROM users WHERE login LIKE '$login'");
    if(mysqli_num_rows($check_login)==0)
    {
        $_SESSION['loginIsEmpty'] = 'Данного логина не существует';
    }
    if(mysqli_num_rows($check_login)>0)
    {
        $arr = mysqli_fetch_assoc($check_login);
        $check_password = $arr['password'];
        $_SESSION['name'] = $arr['login'];

        header('Location: ../index.php');
    }
    else
    {
        header('Location: ../vxod.php');
    }
?>