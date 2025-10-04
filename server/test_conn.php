<?php
include 'db_connect.php'; // includi il file di connessione

if ($conn) {
    echo "Connessione al database riuscita!";
} else {
    echo "Connessione fallita.";
}
?>
