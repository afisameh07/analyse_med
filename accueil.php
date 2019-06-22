<!DOCTYPE HTML>
<html>
<head>
    <?php 
    include_once 'connexion.php';
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
            if(isset($_GET['msg'])){
                    ?>
            <div class="center alert alert-success"><h4>
                        <?php
                echo $_GET['msg']; ?>
                </h4>
                </div>
                <?php
            }
            ?>
            <!-- Banner -->
            <section id="banner">
                <div class="content">
                    <header>
                        <h1>Les Maladies <br />
                            Les plus trouvés</h1>
                        <p>“La santé bouge, la maladie ne bouge pas.”</p>
                    </header>
                    <p>« La santé est un état de complet bien-être physique, mental et social, et ne consiste pas seulement en une absence de maladie ou d'infirmité ».</p>
                    <ul class="actions">
                        <li><a href="#" class="button big">En savoir plus</a></li>
                    </ul>
                </div>
										<!-- Table -->
													<div class="table-wrapper">
                                                    <table>
					    <thead>
							<tr>
						    	<th>Maladie</th>
								<th>Description</th>
								<th>Nombre</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Diabete</td>
								<td>un excès de sucre dans le sang et donc un taux de glucose (glycémie) trop élevé.</td>
								<td>9</td>
						    </tr>
                            <tr>
								<td>Goutte</td>
								<td>a goutte est une maladie chronique fréquente liée au métabolisme de l'acide urique.</td>
								<td>5</td>
						    </tr>
                            <tr>
								<td>Hypocalcémie</td>
								<td>L’hypocalcémie est un état caractérisé par un taux de calcium dans le sang (calcémie) anormalement bas.</td>
								<td>5</td>
						    </tr>
                            <tr>
								<td>Hypercholestérolémie</td>
								<td>un taux élevé de cholestérol sanguin.</td>
								<td>5</td>
						    </tr>
                            <tr>
								<td>Insuffisance rénale</td>
								<td>L'insuffisance rénale chronique est une maladie grave qui entraîne une détérioration graduelle et irréversible de la capacité des reins à filtrer le sang et à excréter certaines hormones.</td>
								<td>5</td>
						    </tr>
						</tbody>
					</table>
				</div>
            </section>

            <!-- Section -->
            <section>
                <header class="major">
                    <h2>4 derniers analyses</h2>
                </header>
                <div class="posts">
                    <?php if(isset($_SESSION['uti']['id']))  {
                        ?>

    <?php

   
                    $sql = "SELECT * FROM analyses limit 4";                    
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {

                            $sql2 = "SELECT np FROM utilisateurs where id='".$row['id_u']."'";

                            $result2 = $conn->query($sql2);
                            if ($result2->num_rows > 0) {
                                $row2 = $result2->fetch_assoc();
                                $pat = $row2["np"];
                            } 
                            
                                echo "<article><h3>" . $row['titre'] ."</h3>Date d ajout" . $row['date_ajout'] . "</br>";                                "";
                                echo "Date d ajout : " . $row['date_ajout'] . "</br>";
                                echo "uree :  ".$row['uree']. "</br>";
                                echo "glycemie : ".$row['glycemie'] . "</br>";
                                echo "createnine :  ".$row['cholestirol'] . "</br>";;
                                echo "triglyceride :  ".$row['triglyceride'] . "</br>";; 
                                echo "calcuim :  ".$row['calcuim'] . "</br>";; 
                                echo "Analyse :  ".$row['diag'] . "</br>"; 
                                echo "</article>";
                            }
                    }
                    $conn->close();
         ?>

                        <?php
                    }else{
                        ?>
                        <article>
                            <h3>Connectez-vous !</h3>
                        </article>

                        <?php
                    }
                    ?>

                </div>
            </section>

        </div>
    </div>

    <!-- Sidebar -->
    <div id="sidebar">
        <div class="inner">

            <!-- Search -->


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