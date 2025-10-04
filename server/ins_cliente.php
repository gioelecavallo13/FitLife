<?php
session_start();
include '../server/db_connect.php'; // collega il db

$esito = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $conn->real_escape_string($_POST['nome']);
    $cognome = $conn->real_escape_string($_POST['cognome']);
    $email = $conn->real_escape_string($_POST['email']);
    $telefono = $conn->real_escape_string($_POST['telefono']);
    $corso = $conn->real_escape_string($_POST['corso']);

    // Query corretta con apici
    $sql = "INSERT INTO clienti (nome, cognome, email, telefono, id_corso) 
            VALUES ('$nome', '$cognome', '$email', '$telefono', '$corso')";

    if ($conn->query($sql) === TRUE) {
        // Successo
        $_SESSION['esito'] = 
            '<p style="
                color: #4CAF50;
                margin: 0px;
                background: rgba(0,0,0,0.6);
                padding: 8px 12px;
                border-radius: 6px;
                margin-top: 8px;
                text-align: center;
                font-size: 0.95em;
            ">Cliente aggiunto con successo!</p>';
        header("Location: ../pages/form_cliente.php"); // reindirizza dove vuoi
        exit();
    } else {
        // Errore
        $_SESSION['esito'] = 
            '<p style="
                color: #ff4d4d;
                margin: 0px;
                background: rgba(0,0,0,0.6);
                padding: 8px 12px;
                border-radius: 6px;
                margin-top: 8px;
                text-align: center;
                font-size: 0.95em;
            ">Errore: ' . $conn->error . '</p>';
        header("Location: ../pages/form_cliente.php"); 
        exit();
    }
}
?>
