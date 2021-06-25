<?php include('php/header.php'); ?>


<div id="steve">
    <img src="./images/Steve.png">
</div>
<div id="alex">
    <img src="./images/Alex.png">
</div>

<div class="container">

    <?php
    if (isset($_GET['c'])) {
        $categorieId = $_GET['c'];
        require "php/database.php";

        $tabel = [];
        $query = "SELECT * FROM categorie WHERE categorie_id=" . $categorieId;

        if ($result = $mysqli->query($query)) {
            if ($result->num_rows == 1) {
                $categorieRow = mysqli_fetch_array($result);
                $result->free_result();
            } else {
                echo ("<h1>Ongeldige categorie geselecteerd!</h1>");
                exit();
            }
        }

        $categorieNaam = $categorieRow["naam"];

        // Sorteer eerst op tijd en dan op datum
        // Dus iemand met dezelfde tijd en een latere datum staat bovenaan
        $query = "SELECT naam, tijd, datum, bewijs FROM speedruns WHERE categorie_id=" . $categorieId . " ORDER BY tijd, datum DESC";
        $tabel = [];
        if ($result = $mysqli->query($query)) {
            while ($row =  mysqli_fetch_array($result)) {
                array_push($tabel, $row);
            }
            $result->free_result();
        }
        echo '<h1>' . $categorieNaam . '</h1>';
        echo '<p> <strong>Doel: </strong> ' . $categorieRow["beschrijving"] . '</p>';
        echo '<img class="cat-img" src="' . $categorieRow["afbeelding"] . '"/>';

        if (sizeof($tabel) == 0) {
            echo '<p>Deze categorie heeft nog geen verzonden speedruns!</p>';
        } else {
            echo '<table><tr>
            <th>Positie</th>
            <th>Naam</th>
            <th>Tijd</th>
            <th>Datum</th>
            <th>Bewijs</th>
            </tr>';
            $positie = 1;
            foreach ($tabel as $item) {
                echo '<tr>
            <td>' . $positie . '</td>
            <td>' . $item[0] . '</td>
            <td>' . $item[1] . '</td>
            <td>' . $item[2] . '</td>
            <td>' . $item[3] . '</td>
            </tr>';
                $positie++;
            }
            echo '</table>';
        }
    } else {
        echo "<h1>Geen categorie geselecteerd!</h1>";
    }
    ?>
</div>


<?php include('php/footer.php'); ?>