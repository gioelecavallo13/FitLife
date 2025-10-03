<?php
$allowed_roles = ['admin', 'coach'];
require_once "../server/auth.php";

$esito = $_SESSION['esito'] ?? ""; // prende l'esito dalla sessione se esiste
unset($_SESSION['esito']); // cancella l'esito dopo averlo mostrato

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
    <title>FitLife - Inserisci Cliente</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <style>
        /* FORM SECTION HERO */
        .form-section {
            position: relative;
            width: 100%;
            min-height: 800px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 60px 20px;
            color: #fff;
        }

        .form-section picture {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
        .form-section picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .form-section .overlay {
            position: absolute;
            inset: 0;
            background: rgba(0,0,0,0.65);
            z-index: 2;
        }

        .form-container {
            position: relative;
            z-index: 3;
            background: rgba(30, 30, 30, 0.92);
            color: white;
            border-radius: 14px;
            padding: 40px 30px;
            max-width: 500px;
            width: 100%;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 2rem;
            color: #ffcc00;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
        }

        .form-group input, 
        .form-group select {
            width: 100%;
            color: white;
            padding: 10px 14px;
            border-radius: 8px;
            border: 1px solid rgba(30, 30, 30, 0.92);
            font-size: 1rem;
            background-color: rgb(87, 86, 86);
        }

        .submit-btn {
            display: block;
            width: 100%;
            padding: 14px;
            background: #ffcc00;
            color: #000;
            border: none;
            border-radius: 12px;
            font-weight: 700;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.25s ease, transform 0.25s ease, box-shadow 0.25s ease;
        }

        .submit-btn:hover {
            background: #e6b800;
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.3);
        }

        @media(max-width:900px){
            .form-container {
                padding: 30px 20px;
            }
        }
    </style>
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

    <!-- FORM INSERIMENTO CLIENTE -->
    <section class="form-section">
        <picture>
            <source srcset="../images/logo_white.webp" type="image/webp">
            <img src="../images/logo_white.jpg" alt="Sfondo Area Riservata">
        </picture>
        <div class="overlay"></div>
        <div class="form-container">
            <h2>Inserisci Nuovo Cliente</h2>
            <form action="../server/ins_cliente.php" method="POST">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" placeholder="Inserisci il nome" required>
                </div>
                <div class="form-group">
                    <label for="cognome">Cognome</label>
                    <input type="text" id="cognome" name="cognome" placeholder="Inserisci il cognome" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Inserisci indirizzo email" required>
                </div>
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="tel" id="telefono" name="telefono" placeholder="Inserisci numero di telefono" required>
                </div>
                <div class="form-group">
                    <label for="corso">Corso scelto</label>
                    <select id="corso" name="corso" required>
                        <option value="" disabled selected>Seleziona corso</option>
                        <option value="yoga">Yoga</option>
                        <option value="pilates">Pilates</option>
                        <option value="crossfit">Crossfit</option>
                        <option value="zumba">Zumba</option>
                        <option value="functional_training">Functional Training</option>
                    </select>
                </div>

                <?php 
                    // stampa direttamente l'esito HTML salvato in sessione
                    echo $esito;
                ?>

                <button type="submit" class="submit-btn">Salva Cliente</button>
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
