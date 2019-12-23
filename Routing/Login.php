<?php
include '../Controller/LoginController.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $L = new LoginController();
    $L->login($username,$password);
?>