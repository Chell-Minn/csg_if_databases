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
<?php include('php/footer.php'); ?>