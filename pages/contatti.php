<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitLife - Contatti</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/contatti.css">
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
            </ul>
            <a href="login.php" class="btn-area-riservata">Area Riservata</a>
        </nav>
    </header>

    <!-- HERO -->
    <section class="section">
        <picture>
            <source srcset="../images/contatti/contatti-img-2.webp" type="image/webp">
            <img id="immagine-1" src="../images/contatti/contatti-img-2.jpg" alt="">
        </picture>
        <div class="overlay"></div>
        <div class="hero-text">
            <h1>Contattaci</h1>
            <p>Siamo qui per rispondere alle tue domande!</p>
        </div>
    </section>

    <!-- CONTATTI -->
    <section class="contatti-flex">
        <div class="contatti-form-wrapper">
            <form class="login-form" action="../server/login.php" method="post">
                <h2>Contattaci</h2>
                <label for="oggetto">Oggetto</label>
                <input type="text" id="oggetto" name="oggetto" placeholder="Inserisci oggetto messaggio" required>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Inserisci la tua email" required>
                <label for="messaggio">Messaggio</label>
                <textarea id="messaggio" name="messaggio" placeholder="Scrivi qui il tuo messaggio" required></textarea>
                <button type="submit" class="btn-login">Invia</button>
            </form>
        </div>
        <div class="contatti-mappa-wrapper">
            <iframe class="contatti-mappa"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2805.090501644768!2d9.207248900000002!3d45.32679490000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786da41b9dafa77%3A0xc5d37ef17da5688!2sVia%20del%20Benessere%2C%2010%2C%2027010%20Area%20Industriale%20PV!5e0!3m2!1sit!2sit!4v1758968103670!5m2!1sit!2sit"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
