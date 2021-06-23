<<<<<<< HEAD
<?php include('php/header.php'); ?>
<div id="container">
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
=======
<?php include('php/header.php'); ?>
<div id="container">
    <h1>Login</h1>
    <p>Login with your account.</p>
    <?php
    if (isset($_GET["error"])) {
        echo '<h2>Error</h2><p>Please enter a valid username and password!</p>';
    }
    ?>
    <form method="POST" action="php/login.php">
        <label for="username">Username</label>
        <input type="username" placeholder="Username" name="username">
        <label for="pwd">Password</label>
        <input type="password" placeholder="Password" name="pwd">
        <button type="submit" name="login-submit">Login</button>
    </form>
</div>
>>>>>>> a4158732f26e4a36f0c652c2a2b7bf29e0b23e2c
<?php include('php/footer.php'); ?>