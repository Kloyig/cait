<?php
    session_start();
    require_once 'connect.php';
    
    $login = trim($_POST['login']);
    $password = $_POST['password'];
    mysqli_query($link,"INSERT INTO users (id, login, pass) VALUES (NULL, '$login', '$password')");
    $_SESSION['name'] = $login;
    header('Location: ../index.php');
?>