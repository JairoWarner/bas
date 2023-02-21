<?php

include("conn.php");
include("header.php");


//Klantgegevens uit het formulier halen
$klantnaam = $_POST['klantnaam'];
$klantmail = $_POST['mail'];
$klantadres = $_POST['klantadres'];
$klantpostcode = $_POST['klantpostcode'];
$klantwoonplaats = $_POST['klantWoonplaats'];

$sql = "INSERT INTO klant (klantnaam, klantmail, klantadres, klantpostcode, klantwoonplaats)
VALUES ('$klantnaam', '$klantmail', '$klantadres', '$klantpostcode', '$klantwoonplaats')";

// voer de query uit
if (mysqli_query($con, $sql)) {
    echo "Klant succesvol aangemaakt";

} else {
    echo "Fout bij het aanmaken van de klant: " . mysqli_error($con);
}





