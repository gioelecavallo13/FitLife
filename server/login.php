<?php
session_start();
include 'db_connect.php'; // collega il db

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // pulizia input
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    // query per trovare l'utente
    $sql = "SELECT * FROM amministratori WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // prendi i dati dell'utente
        $row = $result->fetch_assoc();

        // salva informazioni nella sessione
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $row['email'];
        $_SESSION['ruolo'] = strtolower($row['ruolo']); // "admin" o "coach" in minuscolo

        // reindirizza alla pagina protetta
        header("Location: ../pages/area_riservata.php");
        exit();
    } else {
        echo "Email o password errati!";
    }
}
?>
