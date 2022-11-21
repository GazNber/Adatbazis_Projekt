<?php

if (isset($_POST["submit"])) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once("database-handler.php");
    require_once("functions.php");

    if (emptyInputsLogin($username, $password) !== false) {
        header("location: ../login.php?error=empty-input");
        exit();
    }

    //kéne még egy invalidUsernameOrPassword()

    loginUser($conn, $username, $password);
} else {
    header("location: ../login.php?error=login-bypass-attempt");
    exit();
}