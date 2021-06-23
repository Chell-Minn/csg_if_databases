<<<<<<< HEAD
<?php include('php/header.php');

if (!isset($_SESSION["userId"])) {
    header("Location: index.php");
    exit();
}
?>
<div id="container">
    <h1>Verzend Spedrun</h1>
    <p>Vul het onderstaande formulier in om een spedrun van jezelf te verzenden.</p>
    <?php
    if (isset($_GET["error"])) {
        echo "<h2>Error</h2>";
        echo "<p>Er ging iets verkeerd bij het verzenden van de speedrun! Zorg dat je alles goed hebt ingevuld.</p>";
    }
    ?>
    <form method="POST" action="php/submit_speedrun.php">
        <label for="category-id">Kies categorie</label>
        <select name="category-id">
            <?php
            $query = "SELECT * FROM categorie";
            $categorieen = [];
            if ($result = $mysqli->query($query)) {
                while ($row =  mysqli_fetch_array($result)) {
                    array_push($categorieen, $row);
                }
                $result->free_result();
            }
            foreach ($categorieen as $item) {
                echo '<option value="' . $item["categorie_id"] . '">' . $item["naam"] . '</option>';
            }
            ?>
        </select>
        <label for="time">Tijd (hh:mm:ss)</label>
        <input type="time" name="time" step="1" />
        <label for="proof">Bewijs</label>
        <input type="text" name="proof" placeholder="Bewijs je speedrun met bijv. een link naar een video.." />
        <button type="submit" name="submit-speedrun">Submit</button>
    </form>
</div>
=======
<?php include('php/header.php'); 

if (!isset($_SESSION["userId"])) {
    header("Location: index.php");
    exit();
}
?>
<div id="container">
    <h1>Submit Speedrun</h1>
    <p>Submit a new speedrun.</p>

    <form method="POST" action="php/submit_speedrun.php">
        <label for="category-id">Select Category</label>
        <select name="category-id">
            <?php
            $query = "SELECT * FROM categorie";
            $categorieen = [];
            if ($result = $mysqli->query($query)) {
                while ($row =  mysqli_fetch_array($result)) {
                    array_push($categorieen, $row);
                }
                $result->free_result();
            }
            foreach ($categorieen as $item) {
                echo '<option value="' . $item["categorie_id"] . '">' . $item["naam"] . '</option>';
            }
            ?>
        </select>
        <label for="time">Enter Time</label>
        <input type="time" name="time"/>
        TODO: Put a video for proof or something
        <button type="submit" name="submit-speedrun">Submit</button>
    </form>
</div>
>>>>>>> a4158732f26e4a36f0c652c2a2b7bf29e0b23e2c
<?php include('php/footer.php'); ?>