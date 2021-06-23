<?php

$servernaam = "localhost";
$gebruikersnaam = "username";
$wachtwoord = "password";
$database = "speedruns";

$mysqli = new mysqli($servernaam, $gebruikersnaam, $wachtwoord);

if ($mysqli->connect_errno) {
    die("Failed to connect to MySQL: " . $mysqli->connect_error);
}

$sql = "CREATE DATABASE IF NOT EXISTS " . $database;
if (!$mysqli->query($sql)) {
    die("Database aanmaken werkt niet!");
}

$mysqli->select_db($database);

$sql = "CREATE TABLE IF NOT EXISTS categorie (
    categorie_id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    naam VARCHAR(50),
    afbeelding VARCHAR(30),
    beschrijving TEXT
)";

if (!$mysqli->query($sql)) {
    die("Tabel categorie aanmaken werkt niet!\n".$mysqli -> error);
}

$sql = "CREATE TABLE IF NOT EXISTS speedruns (
    id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    categorie_id int(11),
    naam VARCHAR(30),
    tijd TIME,
    datum DATE,
    bewijs VARCHAR(200)
)";

if (!$mysqli->query($sql)) {
    die("Tabel speedruns aanmaken werkt niet!\n".$mysqli -> error);
}

$sql = "CREATE TABLE IF NOT EXISTS accounts (
    id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    username VARCHAR(30),
    password TEXT
)";

if (!$mysqli->query($sql)) {
    die("Tabel accounts aanmaken werkt niet!\n".$mysqli -> error);
}