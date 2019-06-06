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
            <!-- Header -->
            <?php
            include_once 'header.php';
            ?>

            <!-- Banner -->
            <header>
                    <h2>Les derniers analyses</h2>
                </header>
                <div class="content">
                    <?php
                    include_once 't_analyses.php';
                    ?>
                </div>
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