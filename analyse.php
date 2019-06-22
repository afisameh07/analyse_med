<!DOCTYPE HTML>
<html>
<head>
    <?php include_once 'connexion.php'; include_once 'meta.php'; ?>
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
  if(isset($_GET['msg'])){
          ?>
  <div class="center alert alert-success"><h4>
              <?php
      echo $_GET['msg']; ?>
      </h4>
      </div>
      <?php
  } ?>
            <!-- Banner --><?php if(isset($_SESSION['uti']['type']) &&  $_SESSION['uti']['type'] != '4')  {
            ?>
            <button type="button" class="houc_b btn btn-info" data-toggle="modal" data-target="#myModal">Ajouter une analyse</button>
            <li><a href="patients.php">Les patients</a></li>
            <?php
            }
            ?>
          <?php 
          
          if(isset($_GET['id']) && isset($_SESSION['uti']['type']) &&  $_SESSION['uti']['type'] != '4')  {
            ?>){          
          ?>
            <button type="button" class="houc_b btn btn-info" data-toggle="modal" data-target="#diag">Ajouter / Modifier : diagnostique</button>
<?php 
} ?>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Ajouter une analyse</h4>
      </div>
      <div class="modal-body">
      <form action="actions_analyse.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="titre">Titre :</label>
                    <input type="text" class="form-control" id="titre" placeholder="Titre" name="titre" required>
                </div>

                <div class="form-group">
                    <label for="sel1">Patient:</label>
                    <select class="form-control" id="sel1" name="id_u">
                    <?php
                    $sql = "SELECT * FROM utilisateurs where type='4'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) { 
                            echo "<option value='".$row['id']."'>".$row['np']."</option>";
                        }
                    }
?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="uree">uree  :</label>
                    <input type="text" class="form-control" id="uree" placeholder="5.0" name="uree" required>
                </div>

                <div class="form-group">
                    <label for="glycemie">glycemie :</label>
                    <input type="text" class="form-control" id="glycemie" placeholder="12.1" name="glycemie" required>
                </div>
                <div class="form-group">
                    <label for="createnine">Createnine:</label>
                    <input type="text" class="form-control" id="createnine" placeholder="60.1" name="createnine" required>
                </div>
                <div class="form-group">
                    <label for="cholestirol">Cholestirol :</label>
                    <input type="text" class="form-control" id="cholestirol" placeholder="4.7" name="cholestirol" required>
                </div>
                <div class="form-group">
                    <label for="triglyceride">Triglyceride :</label>
                    <input type="text" class="form-control" id="triglyceride" placeholder="1.6" name="triglyceride" required>
                </div>
                <div class="form-group">
                    <label for="calcuim">Calcuim :</label>
                    <input type="text" class="form-control" id="calcuim" placeholder="2.2" name="calcuim" required>
                </div>
                <button type="submit" class="btn btn-primary houc_b" name="enreg_users" value="enreg_users">Enregistrer</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </form>
      </div>
      
    </div>
    </div>

  </div>

<!-- Modal -->
<div id="diag" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Ajouter un diagnostique</h4>
      </div>
      <div class="modal-body">
      <form action="actions_analyse.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="an_id" value="<?php echo $_GET['id']; ?>"/>
        <div class="form-group">
                    <label for="diag">Diagnostique :</label>
                    <textarea class="form-control" rows="7" id="diag" name="diag"></textarea>
                </div>
                <button type="submit" class="btn btn-primary houc_b" name="enreg_diag" value="enreg_diag">Enregistrer</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </form>
      </div>
      
    </div>
    </div>

  </div>
<?php 

            if(isset($_GET['id'])){

                $sql = "SELECT * FROM analyses where id='".$_GET['id']."'";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                        $sql2 = "SELECT np FROM utilisateurs where id='".$row['id_u']."'";

                        $result2 = $conn->query($sql2);
                        if ($result2->num_rows > 0) {
                            $row2 = $result2->fetch_assoc();
                            $pat = $row2["np"];
                            echo "<br><br><table><tr><td>Titre : </td><td>" . $row["titre"] ."</td></tr>
                            <tr><td>Date d'ajout </td><td>" . $row["date_ajout"] . "</td></tr>
                            <tr><td>Patient</td><td>" . $pat . "</td></tr>
                            <tr><td>uree</td><td>" .$row["uree"] . "</td></tr>
                            <tr><td>glycemie</td><td>" . $row["glycemie"] . "</td></tr>
                            <tr><td>createnine</td><td>" . $row["createnine"] . "</td></tr>
                            <tr><td>cholestirol</td><td>" . $row["cholestirol"] . "</td></tr>
                            <tr><td>triglyceride</td><td>" . $row["triglyceride"] . "</td></tr>
                            <tr><td>calcuim</td><td>" . $row["calcuim"] . "</td></tr>
                            </table>";

                            if($row['diag'] != ""){
                                ?>
                                <div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Diagnostique  :</strong> <?php echo $row['diag'];?>.
  </div><?php
                            }
                            ?>
            <a class="btn btn-info" href="pdf.php?id_a=<?php echo $_GET['id']; ?>">Télécharger PDF</a>
                    
                    <?php


                        } 
                        
                            
                    }
                    
                }
                $conn->close();
            }else{
            ?>

            <header>
                    <h2>Listes des analyses</h2>
            </header>
            <div class="content">
                
                    <?php
                    include_once 't_analyses.php';
                    ?>
            </div>
            <?php } ?>



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