<!DOCTYPE HTML>
<html>
<head>
    <?php 
    include_once 'connexion.php';
    include_once 'meta.php';?>
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
if(isset($_GET['id_update'])){

    $user_id=$_GET['id_update'];
    $sqll = "SELECT * FROM utilisateurs where id='".$user_id."'";
    $resullt = $conn->query($sqll);
    if ($resullt->num_rows > 0) {
        $users = $resullt->fetch_assoc();
    }
    ?>
     <h2>Modifier utilisateur</h2>
    <form action="actions.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="idd" value="<?php echo $user_id;?>"/>
                <div class="form-group">
                    <label for="np">Nom & Prenom :</label>
                    <input value="<?php echo $users['np'];?>" type="text" class="form-control" id="np" placeholder="Nom & Prenom" name="np" required>
                </div>
                <div class="form-group">
                    <label for="sel1">Type:</label>
                    <select class="form-control" id="sel1" name="typ">
                        <option value="1" <?php if($users['type'] == 1){echo 'selected';}?>>Administrateur</option>
                        <option value="2" <?php if($users['type'] == 2){echo 'selected';}?>>Technicien</option>
                        <option value="3" <?php if($users['type'] == 3){echo 'selected';}?>>Medecin</option>
                        <option value="4" <?php if($users['type'] == 4){echo 'selected';}?>>Patient</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tel">Téléphone :</label>
                    <input value="<?php echo $users['tel'];?>" type="text" class="form-control" id="tel" placeholder="Téléphone" name="tel">
                </div>

                <div class="form-group">
                    <label for="adresse">Adresse :</label>
                    <input value="<?php echo $users['adresse'];?>" type="text" class="form-control" id="adresse" placeholder="Adresse" name="adresse">
                </div>
                <div class="form-group">
                    <label for="login">Login ( Email ):</label>
                    <input disabled value="<?php echo $users['login'];?>" type="email" class="form-control" id="login" placeholder="Login" name="login" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Mot de passe :</label>
                    <input value="<?php echo $users['pwd'];?>" type="password" class="form-control" id="pwd" placeholder="Mot de passe" name="pwd" required>
                </div>
                <div class="form-group">
                    <label for="decription">Description :</label>
                    <textarea class="form-control" rows="5" id="decription" name="decription"><?php echo $users['description'];?></textarea>
                </div>
                <button type="submit" class="btn btn-primary houc_b" name="update_users" value="update_users">Enregistrer la modification</button>
            </form><?php
}else{
    ?>
            <!-- Banner -->
            <header><br>
            <!-- Trigger the modal with a button -->



<button type="button" class="houc_b btn btn-info" data-toggle="modal" data-target="#myModal">Ajouter</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Ajouter un utilisateur</h4>
      </div>
      <div class="modal-body">
      <form action="actions.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="np">Nom & Prenom :</label>
                    <input type="text" class="form-control" id="np" placeholder="Nom & Prenom" name="np" required>
                </div>

                <div class="form-group">
                    <label for="sel1">Type:</label>
                    <select class="form-control" id="sel1" name="typ">
                        <option value="1">Administrateur</option>
                        <option value="2">Technicien</option>
                        <option value="3">Medecin</option>
                        <option value="4">Patient</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="tel">Téléphone :</label>
                    <input type="text" class="form-control" id="tel" placeholder="Téléphone" name="tel">
                </div>

                <div class="form-group">
                    <label for="adresse">Adresse :</label>
                    <input type="text" class="form-control" id="adresse" placeholder="Adresse" name="adresse">
                </div>
                <div class="form-group">
                    <label for="login">Login ( Email ):</label>
                    <input type="email" class="form-control" id="login" placeholder="Login" name="login" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Mot de passe :</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Mot de passe" name="pwd" required>
                </div>
                <div class="form-group">
                    <label for="decription">Description :</label>
                    <textarea class="form-control" rows="5" id="decription" name="decription"></textarea>
                </div>

                <button type="submit" class="btn btn-primary houc_b" name="enreg_users" value="enreg_users">Enregistrer</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
            </form>
      </div>
      
    </div>

  </div>
</div>
                    <h2>Listes des utilisateurs</h2>


                </header>
                <div class="content">
                

                <table>
    <thead>
    <tr>
        <th>Nom & Prenom</th>
        <th>Type</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Adresse</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <?php
                    $sql = "SELECT * FROM utilisateurs";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {

                            $typ = "Administrateur";

                            switch ($row['type']) {
                                case "2":
                                $typ = "Technicien";
                                    break;
                                case "3":
                                $typ = "Medecin";
                                    break;
                                case "4":
                                $typ = "Patient";
                                    break;
                            }

                                echo "<tr><td>" . $row["np"] ."</td><td>" . $typ . "</td><td>" . $row["login"] . "</td><td>" . $row["tel"] . "</td><td>" . $row["adresse"] ."</td><td>" . $row["description"] ."</td>".
                                "<td><a href='analyse.php?id=" . $row["id"] . "' class='page icon fa fa-eye'></a>".
                                "<a href='supprimer.php?id=" . $row["id"] . "' class='page icon fa fa-trash'></a>".
                               "<a href='utilisateurs.php?id_update=" . $row["id"] . "' class='page icon fa fa-retweet'></a>".
                                "</td></tr>";
                            }
                    } else {
                        echo "0 resultats";
                    }
                    $conn->close();
         ?>


   

    </tbody>
</table>


                    
</div>
<?php 
}
?>

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