<?php
function verkijgTabelInfo($tabelNaam)
{
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = mysqli_connect("localhost", "username", "password", "java");
    if (!$mysqli) {
        echo ("CONNECTIE MET DATABASE MISLUKT!!");
        die("connectie database mislukt: " . mysqli_connect_error());
    } else {
        echo ("GELUKT!!");
    }


    $query = "SELECT * FROM ".$tabelNaam;
    $tabel = [];
    if ($result = $mysqli->query($query)) {
        while ($row = $result->fetch_object()) {
            $tabel[] = $row;
        }
        $result->free_result();
    }
    return $tabel;
}
