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
<?php include('php/footer.php'); ?>