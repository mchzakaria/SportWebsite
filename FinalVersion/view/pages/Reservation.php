<?php
$home = '../';
include $home . "modele/Session.php";
include $home . "modele/Connexion.php";
include $home ."composantes/headerUser";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
  <?php
  class Reservation extends User{
    $R = new User();
    $R->getDonnesCoach();
  }
  ?> 
   

</body>
</html>