<?php include('php/header.php'); ?>
<div class="container">
    <h1>Aanmelden</h1>
    <p>Maak een Spedrun account om je speedruns te verzenden.</p>
    <?php
    if (isset($_GET["error"])) {
        $reden = "Onbekende reden!";
        if ($_GET["error"] == "emptyFields") {
            $reden = "Zorg dat je alle venden invoert.";
        } else if ($_GET["error"] == "passwordMatch") {
            $reden = "Je wachtwoorden komen niet overeen!";
        } else if ($_GET["error"] == "username") {
            $reden = "Ongeldige gebruikernaam!";
        } else if ($_GET["error"] == "sql") {
            $reden = "Database error!";
        }
        echo '<h2>Error</h2><p>'.$reden.'</p>';
    } else if (isset($_GET["usertaken"])) {
        echo '<h2>Naam al in gebruik!</h2><p>
        De gebruikersnaam "' . $_GET["usertaken"] . '" is al in gebruik! Kies een andere naam!
    </p>';
    } else if (isset($_GET["succes"])) {
        echo '<h2>Succes</h2><p>
        Je account is aangemaak! Je kan nu <a href="login.php">inloggen</a>.
    </p>';
    }
    ?>
    <form method="POST" action="php/create_account.php">
        <label for="username">Gebruikersnaam</label>
        <input type="username" placeholder="Gebruikersnaam.." name="username">
        <label for="pwd">Wachtwoord</label>
        <input type="password" placeholder="Wachtwoord.." name="pwd">
        <label for="pwd-repeat">Herhaal wachtwoord</label>
        <input type="password" placeholder="Herhaal wachtwoord.." name="pwd-repeat">
        <button type="submit" name="signup-submit">Account Aanmaken</button>
    </form>
</div>
<?php include('php/footer.php'); ?>