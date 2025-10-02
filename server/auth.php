<?php
// auth.php
// Questo file serve a proteggere le pagine riservate e controllare i ruoli degli utenti

// Avvia la sessione PHP, necessaria per leggere le variabili di sessione come 'loggedin' e 'ruolo'
session_start();

// Controlla se l'utente ha effettuato il login
// Se la variabile di sessione 'loggedin' non esiste significa che non è loggato
if (!isset($_SESSION['loggedin'])) {
    // Reindirizza l'utente alla pagina di login
    header("Location: ../pages/login.php");
    // Termina l'esecuzione dello script per evitare che il resto della pagina venga visualizzato
    exit();
}

// Controllo dei ruoli: $allowed_roles viene definito nella pagina che include auth.php
// Serve a decidere quali ruoli possono accedere alla pagina
if (isset($allowed_roles) && !in_array($_SESSION['ruolo'], $allowed_roles)) {
    // Se il ruolo dell'utente non è tra quelli consentiti
    // Mostra un messaggio di accesso negato
    echo "Accesso negato: non hai i permessi per questa pagina!";
    // Termina l'esecuzione dello script per impedire l'accesso al contenuto della pagina
    exit();
}
?>
