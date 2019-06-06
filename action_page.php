<?php
/**
 * Created by IntelliJ IDEA.
 * User: afi_sameh
 * Date: 06/06/2019
 * Time: 19:43
 */
session_start();
var_dump($_SESSION);
if(isset($_POST['login']) && !empty($_POST['login']) && $_POST['pwd'] && !empty($_POST['pwd'])){
    $_SESSION['user_id'] = 36;
}else{
    session_destroy();
}