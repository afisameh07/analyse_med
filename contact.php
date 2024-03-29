<!DOCTYPE HTML>
<html>
<head>
    <title>Analyse_med</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="is-preload">

<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <div id="main">
        <div class="inner">

         <?php
         include_once 'header.php';
         ?>

            <!-- Banner -->
            <section id="banner">
                <div class="content">
                    <header>
                        <h1>Contactez-nous<br />
                    </header>
                    <p>Nous sommes là pour vous servir à propos notre application.</p>
                    <ul class="contact">
                        <li class="fa-envelope-o"><a href="#">hopitale_sidibouzid@tunisie.tn</a></li>
                        <li class="fa-phone">(+216) 98 999 999</li>
                        <li class="fa-home">HOPITAL REGIONAL SIDI BOUZID<br />
                            Route de Gafsa. 9100 SIDI BOUZID</li>
                    </ul>

                </div>
										<!-- Table -->
                    <article>

                    </article>
            </section>
            <section>
                <header class="major">
                    <h2>Envoyez nous un email</h2>
                </header>
                    <div class="form-group">
                        <label for="email">Nom et Prenom:</label>
                        <input type="text" placeholder="Nom et Prenom" class="form-control" id="email">
                    </div><br>
                    <div class="form-group">
                        <label for="email">Télephone:</label>
                        <input type="number" placeholder="Téléphone" class="form-control" id="email">
                    </div><br>
                    <div class="form-group">
                        <label for="email">Adresse email:</label>
                        <input type="email" placeholder="Email" class="form-control" id="email">
                    </div><br>
                    <div class="form-group">
                        <label for="email">Message :</label>
                        <textarea name="demo-message" id="demo-message" placeholder="Entrez votre message" rows="6"></textarea>
                    </div>
<br>
                    <a href="accueil.php?msg=Votre message à été envoyé" class="btn btn-primary">Envoyer</a>

            </section>

        </div>
    </div>

    <!-- Sidebar -->
    <div id="sidebar">
        <div class="inner">

            <?php
            include_once 'search_bar.php';
            include_once 'menu.php';
            include_once 'section_img.php';
            ?>
        </div>
    </div>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
</body>
</html>