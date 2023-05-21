<?php

$listEquipes = $user->get_equipe_reserve($id_sportif);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
     <h1> Mes sport </h1>
     <div class="elements">
        <?php 
        
        foreach($elm in $listEquipes){
        ?>
        <div class="element">
            <div class="cover_element"></div>
            <h3><?php echo $elm['nom-sport']?><h3>
            <div>Nom coach:<?php echo $elm['nom-sport']?></diviv>
            <div>Prix :<?php echo $elm['nom-sport']?></diviv>
        </div>
        <?php 
        }
        ?>
     </div>
     
</div> 
</body>
</html>