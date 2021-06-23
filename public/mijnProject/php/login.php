<?php

if (isset($_POST['login-submit'])) {
    require "database.php";

    $username = $_POST['username'];
    $password = $_POST['pwd'];

    if (empty($username) || empty($password)) {
        header("Location: ../login.php?error");
        exit();
    } else {
        $sql = "SELECT * FROM accounts WHERE username=?";
        $stmt = mysqli_stmt_init($mysqli);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../login.php?error");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck = password_verify($password, $row['password']);
                if ($pwdCheck == false) {
                    header("Location: ../login.php?error");
                    exit();
                } else if ($pwdCheck == true) {
                    // Password is correct
                    session_start();
                    $_SESSION['userId'] = $row['id'];
                    $_SESSION['userName'] = $row['username'];

                    header("Location: ../index.php");
                    exit();
                } else {
                    header("Location: ../login.php?error");
                    exit();
                }
            } else {
                header("Location: ../login.php?error");
                exit();
            }
        }
    }
} else {
    header("Location: ../login.php");
    exit();
}
