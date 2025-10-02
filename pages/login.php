<?php
    session_start();
    $error = $_SESSION['error'] ?? ""; // prende l'errore dalla sessione se esiste
    unset($_SESSION['error']); // cancella l'errore dopo averlo mostrato
?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitLife - Login</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/login.css">
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
                <li><a href="../index.php">Home</a></li>
                <li><a href="corsi.php">Corsi</a></li>
                <li><a href="chi_siamo.php">Chi Siamo?</a></li>
                <li><a href="contatti.php">Contatti</a></li>
            </ul>
            <a href="login.html" class="btn-area-riservata">Area Riservata</a>
        </nav>
    </header>

    <!-- 1° SPAZIO -->
    <section class="section">
        <picture>
            <source srcset="../images/area_riservata/area_riservata-img-2.webp" type="image/webp">
            <img id="immagine-1" src="../images/area_riservata/area_riservata-img-2.jpg" alt="">
        </picture>
        <div class="overlay"></div>
        <div class="hero-text">
            <form class="login-form" action="../server/form_login.php" method="post">
                <h2>Accedi all'Area Riservata</h2>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Inserisci la tua email" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Inserisci la password" required>
                
                <?php 
                    // stampa direttamente il messaggio HTML salvato in sessione
                    echo $error;
                ?>

                <button type="submit" class="btn-login">Accedi</button>
            </form>
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
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="corsi.php">Corsi</a></li>
                    <li><a href="chi_siamo.php">Chi Siamo?</a></li>
                    <li><a href="contatti.php">Contatti</a></li>
                    <li><a href="login.php">Area Riservata</a></li>
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
