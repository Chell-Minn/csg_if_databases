<?php
session_start();

if (isset($_POST['submit-speedrun']) && isset($_SESSION["userId"])) {
    require "database.php";

    $categoryId = $_POST['category-id'];
    $name = $_SESSION['userName'];
    $time = $_POST['time'];
    $proof  = $_POST['proof'];

    if (empty($categoryId) || empty($time)) {
        header("Location: ../submit.php?error");
        exit();
    } else {
        $query = "SELECT categorie_id FROM categorie WHERE categorie_id=" . $categoryId;
        if ($result = $mysqli->query($query)) {
            if ($result->num_rows == 1) {
                $categorieRow = mysqli_fetch_array($result);
                $result->free_result();

                // Insert
                $dt = new DateTime();
                $timestamp = $dt->getTimestamp();
                $query = "INSERT INTO speedruns (categorie_id, naam, tijd, datum, bewijs) VALUES ('$categoryId', '$name', '$time', FROM_UNIXTIME($timestamp), '$proof')";
                if ($result = $mysqli->query($query)) {
                    header("Location: ../speedrun.php?c=".$categoryId);
                } else {
                    header("Location: ../submit.php?error=sql+query=".$query);
                }
            } else {
                header("Location: ../submit.php?error=rows");
            }
        } else {
            header("Location: ../submit.php?error=invalidCategory");
        }
    }
} else {
    header("Location: ../submit.php");
    exit();
}
