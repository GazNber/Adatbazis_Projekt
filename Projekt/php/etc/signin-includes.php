<?php

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $nickname = $_POST["nickname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];

    require_once("database-handler.php");
    require_once("functions.php");

    // Error handling
    // szerver oldalon (is) le kell ellenőrizni minden hibát amit a felhasználó elkövethet
    if (emptyInputsSingin($name, $nickname, $email, $password, $password2) !== false) {### ha a függvény visszatérési értéke bármi hamison kívül (biztonsági okok...)
        header("location: ../signin.php?error=empty-input");
        exit();### teljesen leállítja a program futását (break out from program)
    }
    if (invalidEmail($email) !== false) {
        header("location: ../signin.php?error=invalid-email-address");
        exit();
    }
    if (passwordsDoNotMatch($password, $password2) !== false) {
        header("location: ../signin.php?error=passwords-do-not-match");
        exit();
    }
    if (userExists($conn, $nickname, $email) !== false) {
        header("location: ../signin.php?error=username-or-email-exists");
        exit();
    }

    // ha minden rendben volt
    createUser($conn, $name, $nickname, $email, $password);
    loginUser($conn, $nickname, $password);

} else {
    header("location: ../signin.php?error=bypass-attempt");
    exit();
}