<?php include('php/header.php'); ?>
<div class="container">
    <h1>Inloggen</h1>
    <p>Login met je Spedrun account.</p>
    <?php
    if (isset($_GET["error"])) {
        echo '<h2>Error</h2><p>Voer een geldige gebruikersnaam en wachtwoord in!</p>';
    }
    ?>
    <form method="POST" action="php/login.php">
        <label for="username">Gebruikersnaam</label>
        <input type="username" placeholder="Gebruikersnaam.." name="username">
        <label for="pwd">Wachtwoord</label>
        <input type="password" placeholder="Wachtwoord.." name="pwd">
        <button type="submit" name="login-submit">Login</button>
    </form>
</div>
<?php include('php/footer.php'); ?>