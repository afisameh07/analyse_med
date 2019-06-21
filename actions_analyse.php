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


//    var_dump($_POST);die();
    $titre = $_POST["titre"];

    $id_u = $_POST["id_u"];
    $uree = $_POST["uree"];
    $glycemie = $_POST["glycemie"];
    $createnine = $_POST["createnine"];
    $cholestirol = $_POST["cholestirol"];
    $triglyceride = $_POST["triglyceride"];
    $calcuim = $_POST["calcuim"];


    $sql = "INSERT INTO analyses (id_u, titre, uree, glycemie, createnine, cholestirol, triglyceride,calcuim) 
    VALUES ('$id_u', '$titre', '$uree', '$glycemie', '$createnine','$cholestirol','$triglyceride','$calcuim')";
    
    
    if ($conn->query($sql) === TRUE) {
        $msg = "Succès d'enregisrtement";
        header("location: analyse.php?msg=" . $msg);
    } else {
        $msg = "Erreur";
        header("location: analyse.php?msg=" . $msg);
    }
} elseif (isset($_POST["enreg_diag"])) {



$an_id = $_POST['an_id'];
    $diag = $_POST["diag"];
    
    $sql = "UPDATE analyses SET diag='$diag' WHERE id='".$an_id."'";


    if ($conn->query($sql) === TRUE) {
        $msg = "Succès d'ajout";
        header("location: analyse.php?id=".$an_id ."&msg=" . $msg);
    } else {
        $msg = "Erreur";
        header("location: analyse.php?id=".$an_id ."&msg=" . $msg);
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