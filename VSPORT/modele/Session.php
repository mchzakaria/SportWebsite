<?php

session_start();

include("User.php");




//la verfication de variable session et et verfier la variable d
//Pour deconnecter
if(isset($_SESSION['connecter'])){
    // localhost/TetSport/?d
    if(isset($_GET['d'])){
        session_destroy();
        $_SESSION['connecter']=false;
        /* $_SESSION['msg_login']="vous avez deconnecté par succès <div class='btn'><a style='background: #f24236;' href='#'>OK</a></div>"; */
    }
}

//si n'y a pas la variable de connecter alors connecter est false
if(!isset($_SESSION['connecter'])) 
$_SESSION['connecter']=false;
/*
$user=new User();


/* Functions usefull */

?>