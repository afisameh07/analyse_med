<?php
/**
 * Created by IntelliJ IDEA.
 * User: afi_sameh
 * Date: 06/06/2019
 * Time: 18:52
 */

?>
<!-- Menu -->
<nav id="menu">
    <header class="major">
        <h2 class="white_color">Menu</h2>
    </header>
    <ul>
        <li><a href="accueil.php">accueil</a></li>
        <?php if(isset($_SESSION['user_id']))  {
            ?>
        <li><a href="analyse.php">Les analyses</a></li>
        <li><a href="utilisateurs.php">Les utilisateurs</a></li>
        <li><a href="patients.php">Les patients</a></li>
        <?php
        }
        ?>
        <li><a href="contact.php">Contact</a></li>
    </ul>
</nav>
