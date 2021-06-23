<?php
session_start();

if (isset($_POST['submit-speedrun']) && isset($_SESSION["userId"])) {
    require "database.php";

    $categoryId = $_POST['category-id'];
    $name = $_SESSION['userName'];
    $time = $_POST['time'];

    if (empty($categoryId) || empty($time)) {
        header("Location: ../submit.php?error");
        exit();
    } else {
        $query = "SELECT categorie_id FROM categorie WHERE categorie_id=" . $categoryId;
        if ($result = $mysqli->query($query)) {
            
            // Insert
            $dt = new DateTime();
            $timestamp = $dt->getTimestamp();
            $query = "INSERT INTO speedruns (categorie_id, naam, tijd, datum) VALUES ('$categoryId', '$name', '$time', FROM_UNIXTIME($timestamp))";
            if ($mysqli->query($query)) {
                header("Location: ../submit.php?succes");
            } else {
                header("Location: ../submit.php?error");
            }
        } else {
            header("Location: ../submit.php?error=invalidCategory");
        }
    }
} else {
    header("Location: ../submit.php");
    exit();
}
