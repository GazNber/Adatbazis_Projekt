<?php

function emptyInputsSingin($name, $nickname, $email, $password, $password2) {
    $result = false;
    if (empty($name) || empty($nickname) || empty($email) || empty($password) || empty($password2)) {
        $result = true;
    }
    return $result;
}

function invalidEmail($email) {
    $result = false;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    return $result;
}

function passwordsDoNotMatch($password, $password2) {
    $result = false;
    if ($password !== $password2) {
        $result = true;
    }
    return $result;
}

function userExists($conn, $nickname, $email) {
    $sql = "SELECT * FROM users WHERE nickName = ? OR email = ?;";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signin.php?error=stmt-failed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $nickname, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function loginUser($conn, $username, $password) {
    $userExists = userExists($conn, $username, $username);

    //error handling
    if ($userExists === false) {
        header("location: ../login.php?error=wrong-login");
        exit();
    }

    $passwordHashed = $userExists["password"];
    $checkPassword = password_verify($password, $passwordHashed);

    if ($checkPassword === false) {
        header("location: ../login.php?error=wrong-login");
        exit();
    } else if ($checkPassword === true) {
        session_start();
        $_SESSION["userid"] = $userExists["id"];
        $_SESSION["username"] = $userExists["nickName"];
        header("location: ../../index.php");
        exit();
    }
}

function createUser($conn, $name, $nickname, $email, $password) {
    $sql = "INSERT INTO users (name, nickName, email, password) VALUES (?, ?, ?, ?);";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signin.php?error=stmt-failed");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $nickname, $email, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../signin.php?error=none");
    exit();
}

function emptyInputsLogin($username, $password) {
    $result = false;
    if (empty($username) || empty($password)) {
        $result = true;
    }
    return $result;
}
