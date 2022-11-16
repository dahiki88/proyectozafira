<?php include "head.php" ?>
<!-- Carousel -->
<div class="container">
<div id="main" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators/dots -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#main" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#main" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#main" data-bs-slide-to="2"></button>
</div>

<!-- The slideshow/carousel -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="images/carrusel1.jpg" alt="Los Angeles" class="d-block" style="width:100%">
    <div class="carousel-caption">
         <h3>Eventos Empresariales</h3>
         <p>We had such a great time in LA!</p>
     </div>
    </div>
  <div class="carousel-item">
    <img src="images/carrusel2.jpg" alt="Chicago" class="d-block" style="width:100%">
    <div class="carousel-caption">
         <h3>Eventos Familiares</h3>
         <p>We had such a great time in LA!</p>
      </div>
    </div>
  <div class="carousel-item">
    <img src="images/carrusel3.jpg" alt="New York" class="d-block" style="width:100%">
    <div class="carousel-caption">
         <h3>Eventos Tematicos</h3>
         <p>We had such a great time in LA!</p>
    </div>
  </div>
</div>
  
<!-- Left and right controls/icons -->
<button class="carousel-control-prev" type="button" data-bs-target="#main" data-bs-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#main" data-bs-slide="next">
  <span class="carousel-control-next-icon"></span>
     </button>
     </div>

  </div>
 <?php $password="senderos88";?>
<?php 
$password=md5($password);
echo $password;
include "fotter.php" ?>

