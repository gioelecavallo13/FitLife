<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitLife - Corsi</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/corsi.css">
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
                <li><a href="chi_siamo.php">Chi Siamo?</a></li>
                <li><a href="contatti.php">Contatti</a></li>
            </ul>
            <a href="login.php" class="btn-area-riservata">Area Riservata</a>
        </nav>
    </header>

    <!-- 1° SPAZIO (Hero) -->
    <section id="section-hero">
        <picture>
            <source srcset="../images/corsi/corsi-img-2.webp" type="image/webp">
            <img id="immagine-1" src="../images/corsi/corsi-img-2.jpg" alt="">
        </picture>          
        <div class="overlay"></div>
        <div class="hero-text">
            <h1>Iscriviti ai nostri corsi.</h1>
            <p>Tu metti il tuo tempo, noi lo trasformiamo in benessere.</p>
        </div>
    </section>

    <!-- 2° SPAZIO (Cards corsi) -->
    <section id="section-cards">
        <div style="width:100%; text-align:center; margin-bottom: 24px;">
            <h2>I NOSTRI CORSI</h2>
        </div>
        <div class="cards-container">
            <div class="card-corso">
                <h3>Yoga Relax</h3>
                <p class="orari">Lunedì - 18:00/19:00</p>
                <p class="descrizione">Lezioni per migliorare flessibilità, respirazione e rilassamento.</p>
                <p class="costo">€30/mese</p>
            </div>
            <div class="card-corso">
                <h3>Pilates Core</h3>
                <p class="orari">Martedì - 19:00/20:00</p>
                <p class="descrizione">Allenamento del core e della postura, ideale per tonificare.</p>
                <p class="costo">€35/mese</p>
            </div>
            <div class="card-corso">
                <h3>CrossFit Power</h3>
                <p class="orari">Mercoledì - 20:00/21:00</p>
                <p class="descrizione">Allenamenti intensi a circuito per forza e resistenza.</p>
                <p class="costo">€45/mese</p>
            </div>
            <div class="card-corso">
                <h3>Zumba Energy</h3>
                <p class="orari">Giovedì - 18:30/19:30</p>
                <p class="descrizione">Lezioni di ballo fitness a ritmo di musica latina.</p>
                <p class="costo">€30/mese</p>
            </div>
            <div class="card-corso">
                <h3>Functional Training</h3>
                <p class="orari">Venerdì - 19:30/20:30</p>
                <p class="descrizione">Esercizi funzionali per migliorare forza, mobilità e resistenza.</p>
                <p class="costo">€40/mese</p>
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
