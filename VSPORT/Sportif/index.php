<?php
  $home = '../';
  include $home."modele/Session.php";


  if(!strcasecmp($_SESSION['Role'],"sportif")){//Si le role est admin
    
  }else{
    $_SESSION['alert'] = "Error401 : Vous n'avez pas l'autorisation pour visualiser cette page";
    $_SESSION['alert_type']="error";
    // Redirect to a specific URL
    //  headerUser
    header("Location: $home");
    exit;
  }
  include $home.'composantes/header.php';

  include $home.'Sportif/composantes/main.php';
  ?>

Bienvenue Sportif !

<?php
  include $home.'composantes/footer.php';
?>