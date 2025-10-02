<?php
$allowed_roles = ['admin', 'coach'];
require_once "../server/auth.php";

// Disabilita cache
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

<!DOCTYPE html> 
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitLife - Area Riservata</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/area_riservata.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>
<body>
    <!-- HEADER -->
    <header>
        <picture>
            <source srcset="../images/logo_white.webp" type="image/webp">
            <img id="header_logo" src="../images/logo_white.png" alt="">
        </picture>
        <button id="menu-toggle" aria-label="Apri menu">&#9776;</button>
        <nav id="main-nav">
            <ul>
                <li><a href="area_riservata.php">Area Riservata</a></li>
                <li><a href="inserisci_clienti.php">Inserisci Clienti</a></li>
                <li><a href="aggiorna_calendario.php">Aggiorna Calendario</a></li>
            </ul>
            <!-- Bottone Logout con form POST -->
            <form action="../server/logout.php" method="post" style="display:inline;">
                <button type="submit" id="btn-logout" class="btn-area-riservata"
                    style="padding:10px 20px; background:#ed4545; color:#222; border:none; border-radius:6px; cursor:pointer; color: black;"
                    onmouseover="this.style.background='#922727';"
                    onmouseout="this.style.background='#ed4545';">
                    Log Out
                </button>
            </form>
        </nav>
    </header>

    <!-- HERO AREA RISERVATA -->
    <section class="section">
        <picture class="hero-bg">
            <source srcset="../images/logo_white.webp" type="image/webp">
            <img id="immagine-1" src="../images/logo_white.png" alt="">
        </picture>
        <div class="overlay"></div>
        <div class="hero-text">
            <h1>Area Riservata FitLife</h1>
            <p>Gestisci clienti e corsi in totale semplicità.</p>
            <div class="btn-group">
                <a href="inserisci_clienti.php" class="card-btn">
                    <h3>👤 Inserisci Clienti</h3>
                    <p>Aggiungi nuovi clienti al gestionale in pochi click.</p>
                </a>
                <a href="aggiorna_calendario.php" class="card-btn">
                    <h3>📅 Aggiorna Calendario</h3>
                    <p>Modifica e pianifica i corsi per mantenere tutto organizzato.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="footer-container">
            <div class="footer-col" id="footer-div-img">
                <picture>
                    <source srcset="../images/logo_white.webp" type="image/webp">
                    <img src="../images/logo_white.png" alt="FitLife logo" class="footer-logo" loading="lazy">
                </picture>
                <p class="footer-desc">Il tuo benessere, la nostra missione.<br>Vivi FitLife ogni giorno!</p>
            </div>
            <div class="footer-col">
                <h4 class="footer-title">Link utili</h4>
                <ul class="footer-links">
                    <li><a href="area_riservata.php">Area Riservata</a></li>
                    <li><a href="inserisci_clienti.php">Inserisci Clienti</a></li>
                    <li><a href="aggiorna_calendario.php">Aggiorna Calendario</a></li>
                    <li><a href="../server/logout.php">Logout</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4 class="footer-title">Contatti</h4>
                <div class="footer-contact">
                    Via Benessere 10, 20100 Milano<br>
                    Tel: <a href="tel:+390212345678">02 12345678</a><br>
                    Email: <a href="mailto:info@fitlife.it">info@fitlife.it</a>
                </div>
                <div class="footer-social">
                    <a href="#" aria-label="Instagram"></a>
                    <a href="#" aria-label="Facebook"></a>
                    <a href="#" aria-label="YouTube"></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2025 FitLife. Tutti i diritti riservati.
        </div>
    </footer>

    <script src="../script/index.js"></script>
</body>
</html>
