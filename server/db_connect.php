<?php
$servername = "localhost";
$username = "root"; // utente di default XAMPP
$password = "";     // password di default XAMPP è vuota
$dbname = "fitlife_db";

// Crea connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Controlla connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}
// echo "Connessione avvenuta con successo!";
?>
