<?php
error_reporting(E_ALL & ~E_NOTICE);
require('php/database.php');
$sql = "SELECT * FROM java";      
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Speedruns</title>
        <link rel="stylesheet" type="text/css" href="css/design.css">
        <link rel="icon" href="https://static.planetminecraft.com/files/resource_media/screenshot/1321/Creeper-the-minecraft-creeper-32729200-1200-1200_5515445_thumb.jpg">
    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="uitleg.php">Uitleg</a>
    <div class="dropdown">
        <button class="dropbtn">Speedruns
            <i class="fa fa-caret-down"></i>
        </button>
    <div class="dropdown-content">
      <a href="Speedruns.php">Enderdragon Random Seed%</a>
      <a href="Speedruns.php">Enderdragon Set Seed%</a>
      <a href="Speedruns.php">All achievements%</a>
      <a href="Speedruns.php">Enderdragon Random Seed Glitchless%</a>
      <a href="Speedruns.php">Enderdragon Set Seed Glitchless%</a>
      <a href="Speedruns.php">Eat all food%</a>
      <a href="Speedruns.php">Border%</a>
      <a href="Speedruns.php">Mushroom Biome%</a>
      <a href="Speedruns.php">Obtain All Blocks%</a>
      <a href="Speedruns.php">Mine A Chunk</a>
    </div>
     </div>
    </div>      
    </head>
    <body>
        <div id="container">
            <h1>
                <?php echo 'Tabel met speedruns';?>
            </h1>
        </div>
        <div id="footer">
            <h1>
                <?php echo 'Contactgegevens hier';?>
            </h1>
        </div>
    </body>
</html>