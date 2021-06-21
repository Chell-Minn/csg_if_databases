<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Official MineCraft Spedrun</title>
    <link rel="stylesheet" type="text/css" href="css/design.css">
    <link rel="icon" href="https://static.planetminecraft.com/files/resource_media/screenshot/1321/Creeper-the-minecraft-creeper-32729200-1200-1200_5515445_thumb.jpg">
</head>

<body>

    <nav>
        <ul>
            <li class="logo">
               <!--<img class="blokje" src="./images/grassblock.png">-->
                <a href="index.php">Minecraft Speedrun</a>
            </li>

            <li class="dropdown">
                <a href="speedrun.php" class="dropbtn">Speedruns</a>
                <div class="dropdown-content">
                    <div class="dropdown-content">
                        <a href="Enderdragon_Random_Seed.php">Enderdragon Random Seed%</a>
                        <a href="Enderdragon_Set_Seed.php">Enderdragon Set Seed%</a>
                        <a href="All_achievements.php">All achievements%</a>
                        <a href="Enderdragon_Random_Seed_Glitchless.php">Enderdragon Random Seed Glitchless%</a>
                        <a href="Enderdragon_Set_Seed_Glitchless.php">Enderdragon Set Seed Glitchless%</a>
                        <a href="Eat_all_food.php">Eat all food%</a>
                        <a href="Border.php">Border%</a>
                        <a href="Mushroom_Biome.php">Mushroom Biome%</a>
                        <a href="Obtain_All_Blocks.php">Obtain All Blocks%</a>
                        <a href="Mine_A_Chunk.php">Mine A Chunk</a>
                    <?php
                    require 'php/database.php';
                    $query = "SELECT categorie_id, naam FROM categorie";
                    $tabel = [];
                    if ($result = $mysqli->query($query)) {
                        while ($row =  mysqli_fetch_array($result)) {
                            array_push($tabel, $row);
                        }
                        $result->free_result();
                    }
                    foreach ($tabel as $item) {
                        echo '<a href="speedrun.php?c=' . $item[0] . '">' . $item[1] . '</a>';
                    }
                    ?>
                </div>
            </li>
            <?php
            if (isset($_SESSION["userId"])) {
                echo '
            <li>
              <a href="submit.php">Submit Speedrun</a>
            </li>
            <li style="float:right">
              <a href="php/logout.php">Log Out</a>
            </li>
            <li style="float:right">
              <span class="username">' . $_SESSION["userName"] . '</span>
            </li>';
            } else {
                echo '
        <li style="float:right">
          <a href="signup.php">Sign Up</a>
        </li>
        <li style="float:right">
          <a href="login.php">Login</a>
        </li>';
            }
            ?>
        </ul>
    </nav>