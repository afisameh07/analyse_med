<?php
session_start();
include_once 'connexion.php';
unset($_SESSION['user_id']);
if(isset($_POST['login']) && !empty($_POST['login']) && $_POST['pwd'] && !empty($_POST['pwd'])){
    
    $login = $_POST['login'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT * FROM utilisateurs where login='$login' and pwd='$pwd'";

    $result = $conn->query($sql);
    
    $msg = "";
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
       
        $_SESSION['uti'] = $row;
        echo 'utilisateurs connecter';
        $msg = "Bienvenue : ".$_SESSION['uti']['nom']." ".$_SESSION['uti']['prenom'];
        header("location: accueil.php?msg=".$msg);
    } else {
        header("location: index.php?msg=Erreur de connexion");
    }
    $conn->close();
    
    }else{
        session_destroy();
    }