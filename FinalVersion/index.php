<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="view/assets/css/main.css">
    <title>Document</title>
</head>
<body>
  <?php
    include("view/componants/header.php");
  ?>
<div class="slideshow-container" id="home">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="view/assets/images/img444.webp" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="view/assets/images/img222.jpeg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="view/assets/images/img333.jpg" style="width:100%">
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>
<script src="js.js"></script>


<section class="cards" id="sports">
<h2 class="title">Sports</h2>
<h1></h1>
<div class="content">

<div class="card">
  <div class="sport">
      <img src="view/assets/images/football.png">
  </div>
  <div class="info">
    <h3>football</h3>
  </div>
 </div>

<div class="card">
  <div class="sport">
      <img src="view/assets/images/basketball.png">
  </div>
  <div class="info">
    <h3>Basketball</h3>
  </div>
</div>


  


</div>
</section>
<section class="about" id="about">
<h2 class="title">A Propos De Nous</h2>

<div class="row">
<div class="col50">
  <pre>
        Bienvenue à tous les passionnés de sport !
      Si vous cherchez à pratiquer le football et le basketball dans
      un environnement compétitif et convivial, TetouanSport est 
      l'endroit qu'il vous faut.

      Nous sommes une association sportive dynamique,
      déterminée à offrir à tous nos membres une
      expérience de qualité. Nous croyons que le sport peut
      rassembler les gens de tous horizons, favoriser le
      développement personnel et renforcer les liens sociaux.

      Chez TetouanSport, vous trouverez des entraîneurs qualifiés,
     des équipements de qualité et des installations modernes 
     pour pratiquer votre sport préféré dans les meilleures conditions.</pre>

</div>
<div class="col50">
  <div class="img">
          
    <img src="view\assets\images\img123.jpg">
    
  </div>
</div>
</div>
</section>


<script src="view/assets/js/main.js"></script>


</body>
<?php
    include("view/componants/footer.php");
  ?>
</html>