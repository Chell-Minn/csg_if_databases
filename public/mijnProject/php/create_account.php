<?php

if (isset($_POST['signup-submit']))
{
    require "database.php";

    $username = $_POST['username'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    if (empty($username) || empty($password) || empty($passwordRepeat))
    {
        header("Location: ../signup.php?error=emptyFields");
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username))
    {
        header("Location: ../signup.php?error=username");
        exit();
    }
    else if ($password !== $passwordRepeat)
    {
        header("Location: ../signup.php?error=passwordMatch");
        exit();
    }
    else 
    {
        $sql = "SELECT username FROM accounts WHERE username=?";
        $stmt = mysqli_stmt_init($mysqli);
        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location: ../signup.php?error=sql");
            exit();
        }
        else
        {
            // Check if username is taken
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0)
            {
                header("Location: ../signup.php?usertaken=".$username);
                exit();
            }
            else
            {
                $sql = "INSERT INTO accounts (username, password) VALUES (?, ?)";
                $stmt = mysqli_stmt_init($mysqli);
                if (!mysqli_stmt_prepare($stmt, $sql))
                {
                    header("Location: ../signup.php?error=sql");
                    exit();
                }
                else 
                {
                    // Hash het wachtwoord!
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../signup.php?succes");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($mysqli);
}
else
{
    header("Location: ../signup.php");
    exit();
}