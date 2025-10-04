<?php
session_start();
include '../server/db_connect.php'; // collega il db

$error = ""; // variabile per il messaggio d'errore

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    $sql = "SELECT * FROM amministratori WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $row['email'];
        $_SESSION['ruolo'] = strtolower($row['ruolo']);
        header("Location: ../pages/area_riservata.php");
        exit();
    } else {
        $_SESSION['error'] = 
            '<p style="
                color: #ff4d4d;
                margin: 0px;
                background: rgba(0,0,0,0.6);
                padding: 8px 12px;
                border-radius: 6px;
                margin-top: 8px;
                text-align: center;
                font-size: 0.95em;
            ">Email o password errati!</p>';
        header("Location: ../pages/login.php"); // torna alla pagina del form
        exit();
    }
}
?>