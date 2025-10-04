<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitLife - Home</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <!-- HEADER -->
    <header>
        <picture>
            <source srcset="images/logo_white.webp" type="image/webp">
            <img id="header_logo" src="images/logo_white.png" alt="">
        </picture>
        <button id="menu-toggle" aria-label="Apri menu">&#9776;</button>
        <nav id="main-nav">
            <ul>
                <li><a href="pages/corsi.php">Corsi</a></li>
                <li><a href="pages/chi_siamo.php">Chi Siamo?</a></li>
                <li><a href="pages/contatti.php">Contatti</a></li>
            </ul>
            <a href="pages/login.php" class="btn-area-riservata">Area Riservata</a>
        </nav>
    </header>

    <!-- SEZIONE RISULTATI SCORREVOLI -->
    <section class="stats">
        <div class="scroll-wrapper" id="scrollBanner">
            <div class="stat">
                <span class="counter" data-target="100">0</span>
                <p>Iscritti felici</p>
            </div>
            <div class="stat">
                <span class="counter" data-target="2000">0</span>
                <p>Kg sollevati</p>
            </div>
            <div class="stat">
                <span class="counter" data-target="5">0</span>
                <p>Corsi disponibili</p>
            </div>
        </div>
    </section>

    <!-- 1° SPAZIO -->
    <section class="section">
        <picture>
            <source srcset="images/home/home-img-2.webp" type="image/webp">
            <img id="immagine-1" src="images/home/home-img-2.jpg" alt="">
        </picture>
        <div class="overlay"></div>
        <div class="hero-text">
            <h1>Benvenuto in FitLife</h1>
            <p>Trasforma il tuo corpo. Trasforma la tua vita.</p>
            <a href="pages/corsi.php" class="btn">Scopri i nostri corsi</a>
        </div>
    </section>

    <!-- SEZIONE TESTIMONIANZE -->
    <section class="testimonials">
        <h2>Cosa dicono di noi</h2>
        <div class="testimonial-cards">
            <div class="testimonial-card">
                <picture>
                    <source srcset="images/home/home-img-3.webp" type="image/webp">
                    <img src="images/home/home-img-3.jpg" alt="Foto di Luca" loading="lazy">
                </picture>
                <p>"FitLife ha cambiato il mio modo di vedere il fitness!"</p>
                <span>- Luca</span>
            </div>
            <div class="testimonial-card">
                <picture>
                    <source srcset="images/home/home-img-4.webp" type="image/webp">
                    <img src="images/home/home-img-4.jpg" alt="Foto di Martina" loading="lazy">
                </picture>                
                <p>"Le lezioni sono divertenti e motivanti, non vedo l'ora di tornare."</p>
                <span>- Martina</span>
            </div>
            <div class="testimonial-card">
                <picture>
                    <source srcset="images/home/home-img-5.webp" type="image/webp">
                    <img src="images/home/home-img-5.jpg" alt="Foto di Giorgio" loading="lazy">
                </picture>                
                <p>"Allenarsi qui è diventato parte della mia routine quotidiana."</p>
                <span>- Giorgio</span>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="footer-container">
            <div class="footer-col" id="footer-div-img">
                <picture>
                    <source srcset="images/logo_white.webp" type="image/webp">
                    <img src="images/logo_white.png" alt="FitLife logo" class="footer-logo" loading="lazy">
                </picture>
                <p class="footer-desc">Il tuo benessere, la nostra missione.<br>Vivi FitLife ogni giorno!</p>
            </div>
            <div class="footer-col">
                <h4 class="footer-title">Link utili</h4>
                <ul class="footer-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="pages/corsi.php">Corsi</a></li>
                    <li><a href="pages/chi_siamo.php">Chi Siamo?</a></li>
                    <li><a href="pages/contatti.php">Contatti</a></li>
                    <li><a href="pages/login.php">Area Riservata</a></li>
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

    <script src="script/index.js"></script>
    <script src="script/home.js"></script>
</body>
</html>
