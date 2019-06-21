<!DOCTYPE HTML>
<html>
<head>
<?php 
    include_once 'meta.php';
    ?>
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
                <?php
            if(isset($_GET['msg'])){?>
                <div class="center alert alert-danger"><h4>
               <?php
                echo $_GET['msg'];?>
</h4>
                </div>

                <?php
            }
            ?>
                    <header>
                    
                        <h1>S'authentifier<br />
                    </header>
                        <form method="post" action="action_page.php">
                            <div class="form-group">
                                <label for="email">Adresse email:</label>
                                <input type="email" class="form-control" id="email" name="login" placeholder="Votre email">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="pwd">Mot de passe:</label>
                                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Votre mot de">
                            </div>
<br>
                            <button type="submit" class="btn btn-primary houc_b">Connecter</button>
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