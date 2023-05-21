<?php
  $home = '';
  include $home."modele/Session.php";
  /*
  $user =new User();
  */
  /*$_SESSION['Role']=$user->get_role();
 */
  if(!strcasecmp($_SESSION['ROLE'],"admin")){
    header("Location: ./admin");
    exit;
  }else if(!strcasecmp($_SESSION['Role'],"secretaire")){
    header("Location: ./secretaire");
    exit;
    
  }else if(!strcasecmp($_SESSION['Role'],"coach")){
    header("Location: ./coach");
    exit;
    
  }else if(!strcasecmp($_SESSION['Role'],"sportif")){
      header("Location: ./Sportif");
      exit;
  }




  include $home.'composantes/header.php';
  include $home.'composantes/main.php';
  ?>


<?php
  include $home.'composantes/footer.php';
?>