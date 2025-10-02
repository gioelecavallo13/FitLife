<?php
session_start();
include 'db_connect.php'; // collega il db

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    // Controlla se l'utente esiste
    $sql = "SELECT * FROM amministratori WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header("Location: ../pages/area_riservata.html"); // area protetta
        exit();
    } else {
        echo "Email o password errati!";
    }
}
?>
