<?php
error_reporting(E_ALL & ~E_NOTICE);
require('php/database.php');
require('php/header.php');
require('php/footer.php');

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
        <div id="container">
            <h1>
                <?php echo 'Welcome to the official MineCraft Spedrun website';?>
            </h1> 
        </div>
        <div id="footer">
            <h1>
                <?php echo 'contactgegevens hier';?>
            </h1>
        </div>
    </body>
</html>