<?php
/**
 * Created by IntelliJ IDEA.
 * User: afi_sameh
 * Date: 06/06/2019
 * Time: 19:18
 */

if(isset($_SESSION['uti']['id']))  {
    ?>
    <section id="search" class="alt">
        <form method="post" action="#">
            <input type="text" name="query" id="query" placeholder="Chercher" />
        </form>
    </section>

    <?php
}else{
    ?>
    <a href="index.php" class="b_white button fit">Connectez-vous !</a>
    <?php
}

?>
