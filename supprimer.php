<?php
include 'connexion.php';


if (isset($_GET['id'])) {
    $idsup = $_GET['id'];
    $sql = "DELETE FROM utilisateurs WHERE id=$idsup";
    if ($conn->query($sql) === TRUE) {
        $msg = "utilisateur supprimé";
        header("location: utilisateurs.php?msg=" . $msg);
    } else {
        $msg = "Erreur de suppression";
        header("location: utilisateurs.php?msg=" . $msg);
    }
}elseif (isset($_GET['id_ps'])) {
    $idsup = $_GET['id_ps'];
    $sql = "DELETE FROM utilisateurs WHERE id=$idsup";
    if ($conn->query($sql) === TRUE) {
        $msg = "Patient supprimé";
        header("location: patients.php?msg=" . $msg);
    } else {
        $msg = "Erreur de suppression";
        header("location: patients.php?msg=" . $msg);
    }
} elseif (isset($_GET['id_ville'])) {
    $idsup = $_GET['id_ville'];
    $sql = "DELETE FROM ville WHERE id=$idsup";

    if ($conn->query($sql) === TRUE) {
        $msg = "Ville supprimé";
        header("location: listes_des_villes.php?msg=" . $msg);
    } else {
        header("location: 404.php");
    }
}elseif (isset($_GET['id_c'])) {
    $idsup = $_GET['id_c'];
    $sql = "DELETE FROM classes WHERE id_c=$idsup";

    if ($conn->query($sql) === TRUE) {
        $msg = "classe supprimé";
        header("location: listes_des_classes.php?msg=" . $msg);
    } else {
        header("location: 404.php");
    }
}elseif (isset($_GET['id_u'])) {
    $idsup = $_GET['id_u'];
    $sql = "DELETE FROM utilisateurs WHERE id_u=$idsup";

    if ($conn->query($sql) === TRUE) {
        $msg = "Utilisateur supprimé";
        header("location: listes_des_users.php?msg=" . $msg);
    } else {
        header("location: 404.php");
    }
}elseif (isset($_GET['id_p'])) {
    $idsup = $_GET['id_p'];
    $sql = "DELETE FROM profs WHERE id_u=$idsup";

    if ($conn->query($sql) === TRUE) {
        $msg = "Proffesseur supprimé";
        header("location: listes_des_profs.php?msg=" . $msg);
    } else {
        header("location: 404.php");
    }
}elseif (isset($_GET['id_cours'])) {
    $idsup = $_GET['id_cours'];
    $sql = "DELETE FROM cours WHERE id_cours=$idsup";

    if ($conn->query($sql) === TRUE) {
        $msg = "Cours supprimé";
        header("location: index.php?msg=" . $msg);
    } else {
        header("location: 404.php");
    }
}elseif (isset($_GET['id_e'])) {
    $idsup = $_GET['id_e'];
    $sql = "DELETE FROM eleves WHERE id_e=$idsup";

    if ($conn->query($sql) === TRUE) {
        $msg = "Cours supprimé";
        header("location: listes_des_eleves.php?msg=" . $msg);
    } else {
        header("location: 404.php");
    }
}elseif (isset($_GET['id_parent'])) {
    $idsup = $_GET['id_parent'];
    $sql = "DELETE FROM parents WHERE id_p=$idsup";

    if ($conn->query($sql) === TRUE) {
        $msg = "Parent supprimé";
        header("location: listes_des_parents.php?msg=" . $msg);
    } else {
        header("location: 404.php");
    }
}elseif (isset($_GET['id_ab'])) {
    $idsup = $_GET['id_ab'];
    $sql = "DELETE FROM abscences WHERE id=$idsup";
    if ($conn->query($sql) === TRUE) {
        $msg = "Abscence supprimé";
        header("location: listes_des_abscences.php?id_e=".$_GET['id_ee']."&msg=" . $msg);
    } else {
        header("location: 404.php");
    }
}elseif (isset($_GET['id_note'])) {
    $idsup = $_GET['id_note'];
    $sql = "DELETE FROM notes WHERE id=$idsup";
    if ($conn->query($sql) === TRUE) {
        $msg = "Note supprimé";
        header("location: listes_des_notes.php?id_e=".$_GET['id_ee']."&msg=" . $msg);
    } else {
        header("location: 404.php");
    }
}//
?>