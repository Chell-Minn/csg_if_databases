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
<?php include('php/footer.php'); ?>