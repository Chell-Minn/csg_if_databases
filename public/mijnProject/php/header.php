<<<<<<< HEAD
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
               <a href="index.php">
            <img  class="blokje" src="./images/grassblock.png">
               Minecraft Spedrun</a>
            </li>

            <li class="dropdown">
                <a href="speedrun.php" class="dropbtn">Spedruns</a>
                <div class="dropdown-content">
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
              <a href="submit.php">Verzend Spedrun</a>
            </li>
            <li style="float:right">
              <a href="php/logout.php">Uitloggen</a>
            </li>
            <li style="float:right">
              <span class="username">' . $_SESSION["userName"] . '</span>
            </li>';
            } else {
                echo '
        <li style="float:right">
          <a href="signup.php">Aanmelden</a>
        </li>
        <li style="float:right">
          <a href="login.php">Inloggen</a>
        </li>';
            }
            ?>
        </ul>
    </nav>
=======
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
        <a href="index.php">Minecraft Spedrun</a>
      </li>
      <li>
        <a href="index.php">Home</a>
      </li>
      <li class="dropdown">
        <a href="" class="dropbtn">Speedruns</a>
        <div class="dropdown-content">
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
            </li>'
        ;
      } else {
        echo '<li style="float:right">
          <a href="signup.php">Sign Up</a>
        </li>
        <li style="float:right">
          <a href="login.php">Login</a>
        </li>';
      }
      ?>
    </ul>
  </nav>
>>>>>>> a4158732f26e4a36f0c652c2a2b7bf29e0b23e2c
