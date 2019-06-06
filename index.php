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
                        <h1>S'authentifier<br />
                    </header>
                        <form method="post" action="action_page.php">
                            <div class="form-group">
                                <label for="email">Adresse email:</label>
                                <input type="email" class="form-control" id="email" name="login">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="pwd">Mot de passe:</label>
                                <input type="password" class="form-control" id="pwd" name="pwd">
                            </div>
<br>
                            <button type="submit" class="btn btn-primary">Connecter</button>
                        </form>
                </div>
										<!-- Table -->
                    <article>
                        <a href="#" class="image"><img src="images/keys_1.jpg" alt="" /></a>
                        <p></p>
                    </article>
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