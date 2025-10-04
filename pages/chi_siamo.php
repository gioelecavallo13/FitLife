<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitLife - Chi Siamo?</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/chi_siamo.css">
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
                <li><a href="contatti.php">Contatti</a></li>
            </ul>
            <a href="login.php" class="btn-area-riservata">Area Riservata</a>
        </nav>
    </header>

    <!-- HERO INTRO -->
    <section class="section">
        <picture>
            <source srcset="../images/chi_siamo/chi_siamo-img-7.webp" type="image/webp">
            <img id="immagine-1" src="../images/chi_siamo/chi_siamo-img-7.jpg" alt="">
        </picture>        
        <div class="overlay"></div>
        <div class="hero-text">
            <h1>Conosciamoci meglio!</h1>
            <p>I nostri valori e il nostro staff.</p>
        </div>
    </section>

    <!-- VALORI -->
    <section class="section" id="valori">
        <div class="hero-text" id="hero-text-2">
            <h1>I nostri valori</h1>
            <ul>
                <li><strong>Benessere prima di tutto:</strong> non puntiamo solo all'estetica, ma a farti stare bene dentro e fuori.</li>
                <li><strong>Professionalità e passione:</strong> ogni istruttore è qualificato e motivato.</li>
                <li><strong>Comunità e supporto:</strong> qui sei parte di una famiglia.</li>
                <li><strong>Innovazione costante:</strong> attrezzi moderni e corsi sempre aggiornati.</li>
                <li><strong>Equilibrio:</strong> allenamento, alimentazione e riposo vanno di pari passo.</li>
            </ul>
        </div>
    </section>

    <!-- STAFF -->
    <section class="section" id="staff">
        <h1 class="section-title">Il nostro staff</h1>
        <div class="staff-container">
            <div class="staff-card">
                <picture>
                    <source srcset="../images/chi_siamo/chi_siamo-img-1.webp" type="image/webp">
                    <img src="../images/chi_siamo/chi_siamo-img-1.jpg" alt="" loading="lazy">
                </picture>                
                <h2>Marco Rossi</h2>
                <p>Personal Trainer & Preparatore Atletico</p>
            </div>
            <div class="staff-card">
                <picture>
                    <source srcset="../images/chi_siamo/chi_siamo-img-2.webp" type="image/webp">
                    <img src="../images/chi_siamo/chi_siamo-img-2.jpg" alt="" loading="lazy">
                </picture>                
                <h2>Giulia Bianchi</h2>
                <p>Istruttrice Yoga & Pilates</p>
            </div>
            <div class="staff-card">
                <picture>
                    <source srcset="../images/chi_siamo/chi_siamo-img-3.webp" type="image/webp">
                    <img src="../images/chi_siamo/chi_siamo-img-3.jpg" alt="" loading="lazy">
                </picture>                
                <h2>Davide Conti</h2>
                <p>Istruttore CrossFit & Zumba</p>
            </div>
            <div class="staff-card">
                <picture>
                    <source srcset="../images/chi_siamo/chi_siamo-img-4.webp" type="image/webp">
                    <img src="../images/chi_siamo/chi_siamo-img-4.jpg" alt="" loading="lazy">
                </picture>                
                <h2>Sara Verdi</h2>
                <p>Nutrizionista Sportiva</p>
            </div>
            <div class="staff-card">
                <picture>
                    <source srcset="../images/chi_siamo/chi_siamo-img-5.webp" type="image/webp">
                    <img src="../images/chi_siamo/chi_siamo-img-5.jpg" alt="" loading="lazy">
                </picture>                
                <h2>Luca Moretti</h2>
                <p>Personal Trainer</p>
            </div>
            <div class="staff-card">
                <picture>
                    <source srcset="../images/chi_siamo/chi_siamo-img-6.webp" type="image/webp">
                    <img src="../images/chi_siamo/chi_siamo-img-6.jpg" alt="" loading="lazy">
                </picture>                
                <h2>Elena Neri</h2>
                <p>Reception & Accoglienza</p>
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
