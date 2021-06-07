<?php
error_reporting(E_ALL & ~E_NOTICE);
require('php/database.php');

//maak databaseverbinding met de gegevens uit database.php
$DBverbinding = mysqli_connect($servernaam, $gebruikersnaam, $wachtwoord, $database);
// Controleer de verbinding
if (!$DBverbinding) {
// Geef de foutmelding die de server teruggeeft en stop met de uitvoer van PHP (die)
die("Verbinding mislukt: " . mysqli_connect_error());
}
else {
// Dit gedeelte laat je normaliter weg, maar is hier ter illustratie toegevoegd
//echo '<i>verbinding database succesvol</i>';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Official MineCraft Spedrun</title>
        <link rel="stylesheet" type="text/css" href="css/design.css">
        <link rel="icon" href="https://static.planetminecraft.com/files/resource_media/screenshot/1321/Creeper-the-minecraft-creeper-32729200-1200-1200_5515445_thumb.jpg">
    </head>
    <body>
        <div id="header">

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