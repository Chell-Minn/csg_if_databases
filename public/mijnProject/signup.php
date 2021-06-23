<<<<<<< HEAD
<?php include('php/header.php'); ?>
<div id="container">
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
=======
<?php include('php/header.php'); ?>
<div id="container">
    <h1>Sign Up</h1>
    <p>Create an account to submit speedruns.</p>
    <?php
    if (isset($_GET["error"])) {
        $reden = "Unknown reason!";
        if ($_GET["error"] == "emptyFields") {
            $reden = "Please fill in all fields.";
        } else if ($_GET["error"] == "passwordMatch") {
            $reden = "Your passwords don't match!";
        } else if ($_GET["error"] == "username") {
            $reden = "Invalid username!";
        } else if ($_GET["error"] == "sql") {
            $reden = "Database error.";
        }
        echo '<h2>Error</h2><p>'.$reden.'</p>';
    } else if (isset($_GET["usertaken"])) {
        echo '<h2>Username Taken</h2><p>
        Someone else is already using the username "' . $_GET["usertaken"] . '"! Please use another one!
    </p>';
    } else if (isset($_GET["succes"])) {
        echo '<h2>Succes</h2><p>
        Your account is created! Go to the <a href="login.php">login</a> page.
    </p>';
    }
    ?>
    <form method="POST" action="php/create_account.php">
        <label for="username">Username</label>
        <input type="username" placeholder="Username" name="username">
        <label for="pwd">Password</label>
        <input type="password" placeholder="Password" name="pwd">
        <label for="pwd-repeat">Repeat Password</label>
        <input type="password" placeholder="Repeat Password" name="pwd-repeat">
        <button type="submit" name="signup-submit">Create Account</button>
    </form>
</div>
>>>>>>> a4158732f26e4a36f0c652c2a2b7bf29e0b23e2c
<?php include('php/footer.php'); ?>