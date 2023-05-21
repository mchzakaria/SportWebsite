<?php
  $home = '../';
  include $home."modele/Session.php";


  if(!strcasecmp($_SESSION['Role'],"coach")){//Si le role est coach
    
  }else{
    $_SESSION['alert'] = "Error401 : Vous n'avez pas l'autorisation pour visualiser cette page";
    $_SESSION['alert_type']="error";
    // Redirect to a specific URL
    header("Location: $home");
    exit;
  }
  include $home.'composantes/header.php';

  ?>

Bienvenue Coach !

<?php
  include $home.'composantes/footer.php';
?>