<?php
include_once 'connexion.php';

session_start();
if (isset($_POST["enreg_classe"])) {
    $table = "classes";
    $t = classes_insert($_POST);
    if ($t) {
        $msg = "Succès";
        header("location: listes_des_classes.php?msg=" . $msg);
    } else {
        $msg = "Erreur";
        header("location: listes_des_classes.php?msg=" . $msg);
    }
} elseif (isset($_POST["enreg_prof"])) {
    $table = "profs";
    $t = profs_insert($_POST);
    if ($t) {
        $msg = "Succès";
        header("location: listes_des_profs.php?msg=" . $msg);
    } else {
        $msg = "Erreur";
        header("location: listes_des_profs.php?msg=" . $msg);
    }
} elseif (isset($_POST["update_users"])) {


    

    $np = $_POST["np"];
    $typ = $_POST["typ"];
    $tel = $_POST["tel"];
    $adresse = $_POST["adresse"];
    $pwd = $_POST["pwd"];
    $description = $_POST["decription"];

    $idd=$_POST['idd'];

    
    $sql = "UPDATE utilisateurs SET np='$np', type='$typ', tel='$tel', adresse='$adresse', pwd='$pwd', description='$description' WHERE id='".$idd."'";


    if ($conn->query($sql) === TRUE) {
        $msg = "Succès de modification";
        header("location: utilisateurs.php?msg=" . $msg);
    } else {
        $msg = "Erreur";
        header("location: utilisateurs.php?msg=" . $msg);
    }
} elseif (isset($_POST["enreg_users"])) {

    $np = $_POST["np"];
    $typ = $_POST["typ"];
    $tel = $_POST["tel"];
    $adresse = $_POST["adresse"];
    $login = $_POST["login"];
    $pwd = $_POST["pwd"];
    $description = $_POST["decription"];


    $sql = "INSERT INTO utilisateurs (np, type, tel, adresse, login, pwd,description) VALUES ('$np', '$typ', '$tel', '$adresse','$login','$pwd','$description')";
    
    
    if ($conn->query($sql) === TRUE) {
        $msg = "Succès d'enregisrtement";
        header("location: utilisateurs.php?msg=" . $msg);
    } else {
        $msg = "Erreur";
        header("location: utilisateurs.php?msg=" . $msg);
    }
} elseif (isset($_POST["enreg_art"])) {
    $quantite = $_POST["quantite"];
    $article = $_POST["article"];
    $description = $_POST["decription"];
    $nomOrigine = $_FILES['monfichier']['name'];
    $elementsChemin = pathinfo($nomOrigine);
    $extensionFichier = $elementsChemin['extension'];
    $extensionsAutorisees = array("jpeg", "jpg", "gif", "png");
    if (!(in_array($extensionFichier, $extensionsAutorisees))) {
        echo "Le fichier n'a pas l'extension attendue";
    } else {
        $repertoireDestination = dirname(__FILE__) . "/uploads/articles/";
        $nomDestination = $nomOrigine;

        if (move_uploaded_file($_FILES["monfichier"]["tmp_name"], $repertoireDestination . $nomDestination)) {

            $sql = "INSERT INTO article (nom, description, photo, quantite) VALUES ('" . $article . "', '" . $description . "', '" . $nomDestination . "', '" . $quantite . "')";
            if ($conn->query($sql) === TRUE) {
                $msg = "Succès";
                header("location: listes_des_articles.php?msg=" . $msg);
            } else {
                $msg = "Erreur";
                header("location: listes_des_articles.php?msg=" . $msg);
            }
        } else {
            echo "Le fichier n'a pas été uploadé (trop gros ?) ou " .
            "Le déplacement du fichier temporaire a échoué" .
            " vérifiez l'existence du répertoire " . $repertoireDestination;
        }
    }
}elseif (isset($_POST["enreg_cours"])) {

    $t = enreg_cours($_POST);
    if ($t) {
        $msg = "Succès";
        header("location: index.php?msg=" . $msg);
    } else {
        $msg = "Erreur";
        header("location: index.php?msg=" . $msg);
    }
}elseif (isset($_POST["enreg_emploi"])) {

    $t = emploi_insert($_POST);
    if ($t) {
        $msg = "Succès";
        header("location: listes_des_emplois.php?msg=" . $msg);
    } else {
        $msg = "Erreur";
        header("location: listes_des_emplois.php?msg=" . $msg);
    }
}elseif (isset($_POST["enreg_eleve"])) {
    $np = $_POST["np"];
    $id_c = $_POST["id_c"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $adresse = $_POST["adresse"];
    $login = $_POST["login"];
    $pwd = $_POST["pwd"];

    $sql = "INSERT INTO eleves (np, id_c, email, tel, adresse, login, pwd) VALUES ('$np', '$id_c', '$email', $tel, '$adresse','$login','$pwd')";
    if ($conn->query($sql) === TRUE) {
        $msg = "Succès";
        header("location: listes_des_eleves.php?msg=" . $msg);
    } else {
        $msg = "Erreur";
        header("location: listes_des_eleves.php?msg=" . $msg);
    }
}elseif (isset($_POST["enreg_parent"])) {

    $np = $_POST["np"];
    $id_e = $_POST["id_e"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $adresse = $_POST["adresse"];
    $login = $_POST["login"];
    $pwd = $_POST["pwd"];

    $sql = "INSERT INTO parents (np, id_e, email, tel, adresse, login, pwd) VALUES ('$np', '$id_e', '$email', $tel, '$adresse','$login','$pwd')";
    if ($conn->query($sql) === TRUE) {
        $msg = "Succès";
        header("location: listes_des_parents.php?msg=" . $msg);
    } else {
        $msg = "Erreur";
        header("location: listes_des_parents.php?msg=" . $msg);
    }
}elseif (isset($_POST["enreg_absence"])) {

    $d = $_POST["dat"];
    $t = $_POST["temps"];
    $id_e = $_POST["id_e"];

    $sql = "INSERT INTO abscences (id_e, da, te) VALUES ('$id_e', '$d', '$t')";
    //var_dump($sql);die();

    if ($conn->query($sql) === TRUE) {
        $msg = "Succès";
    } else {
        $msg = "Erreur";
    }
    header("location: listes_des_abscences.php?id_e=".$id_e."&msg=" . $msg);
}elseif (isset($_POST["enreg_note"])) {

    $d = $_POST["dat"];
    $t = $_POST["temps"];
    $id_e = $_POST["id_e"];

    $sql = "INSERT INTO notes (id_e, mat, note) VALUES ('$id_e', '$d', '$t')";
    //var_dump($sql);die();

    if ($conn->query($sql) === TRUE) {
        $msg = "Succès";
    } else {
        $msg = "Erreur";
    }
    header("location: listes_des_notes.php?id_e=".$id_e."&msg=" . $msg);
}