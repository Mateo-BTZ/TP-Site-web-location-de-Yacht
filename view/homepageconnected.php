<!doctype html>
<html lang="en">
<?php
include '../partials/head.php';
?>
<body>


   <div class="responsive-iframe">
       <?php
    include '../partials/navbar.php';
    ?>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10511.706441048069!2d-3.4527092202602216!3d48.802379300207974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48122e7175651909%3A0x6cfc3a6ccded39e4!2sLe%20Port%2C%2022700%20Perros-Guirec!5e0!3m2!1sfr!2sfr!4v1591798105927!5m2!1sfr!2sfr" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>



<!---BOITE QUI FILTRE LA RECHERCHE----->
<div class="filtrer" style="background-color: royalblue; margin-left: 300px; margin-top: -50px; position: absolute;">
    <label for="bday" style="padding-left: 255px; font-family: 'Trebuchet MS', Helvetica, sans-serif;">Date de départ &nbsp</label>
    <label for="bday" style="font-family: 'Trebuchet MS', Helvetica, sans-serif;">Date d'arrivée</label> </br> </br>
    <input placeholder= "Destination" style="width: 170px; height: 50px; border: 2px solid black; margin-left: 80px;"></input>
    <input style="height: 50px; border: 2px solid black;" type="date" id="start" name="trip-start"
       value="Date de départ"
       min="2020-06-10" max="2050-12-31">
       <input style="height: 50px; border: 2px solid black;" type="date" id="end" name="trip-end"
       value="Date d'arrivée"
       min="2020-06-10" max="2050-12-31">
       <select name="pets" id="pet-select" style="height: 50px; border: 2px solid black;">
    <option value="">--Taille du bateau--</option>
    <option value="30">30m2</option>
    <option value="40">40m2</option>
    <option value="50">50m2</option>
    <option value="60">60m2</option>
    <option value="70">70m2</option>
    <option value="80">80m2</option>
</select>
    <a href="#0" class="btn" style="box-shadow: 7px 5px 5px black; background-color: darkorange; font-family: 'Trebuchet MS', Helvetica, sans-serif;">RECHERCHER</a>
    <section class="padding-y-xl">
    <div class="text-component text-center margin-bottom-lg"> 
      <h1 style="font-family: 'Trebuchet MS', Helvetica, sans-serif;">Résultat de votre recherche</h1>
      <p style="text-decoration: underline; font-family: 'Trebuchet MS', Helvetica, sans-serif;">Ou voir tous les Yachts disponibles</p>
</div>
      <div class="filtrerdeux" style="padding-top: 15px; padding-left: 25px;">
      <filtre style="color: darkorange; font-family: 'Trebuchet MS', Helvetica, sans-serif;">Filtrer la </br> sélection &nbsp </filtre>
      <input type="number" placeholder="Taille du bateau" style="border: none; color: blue;"></input>
      <input type="number" placeholder="Points d'achats" style="border: none; color: blue;"></input>
      <input type="number" placeholder="Pers. à bord" style="border: none; color: blue;"></input>
      <input type="checkbox" class="disponible" style="margin-right: 15px;"> <label for="disponibilité">Disponibilité</label></input>
      

</div>

</br>


<div class="container col-12" style="display: flex; justify-content: space-between;">
  <div class="row">
  <!-- METTRE LA BOUCLE PHP POUR CHAQUE PRODUIT -->
  <div class="column">
  <div class="card col-12" style="width: 250px; border: 2px black solid; margin-left: 150px;">
  <figure class="card__img">
    <img src="../assets/images/yacht1.jpg">
  </figure>

  <div class="card__content">
    <div class="text-component">
      <h4 style="font-family: 'Trebuchet MS', Helvetica, sans-serif;">Nom du Yacht - 42 mètres</h4>
      <input type="checkbox" style="color: green; font-family: 'Trebuchet MS', Helvetica, sans-serif;" checked>Disponible</input>
      <p class="text-sm color-contrast-medium">Grand Yacht de croisière spacieux</p>
    </div>
    
    <div class="margin-top-sm">
      <a class="btn btn--subtle btn--sm" style="background-color: royalblue; box-shadow: 7px 5px 5px black; font-family: 'Trebuchet MS', Helvetica, sans-serif;" href="#0">Book now</a>
    </div>
  </div>
</div>
</div>
<!--FIN CARD -->
<div class="column">
<div class="card col-12" style="width: 250px; border: 2px black solid; margin-left: 150px;">
  <figure class="card__img">
    <img src="../assets/images/yacht1.jpg">
  </figure>

  <div class="card__content">
    <div class="text-component">
      <h4>Nom du Yacht - 42 mètres</h4>
      <input type="checkbox" style="color: green;" checked>Disponible</input>
      <p class="text-sm color-contrast-medium">Grand Yacht de croisière spacieux</p>
    </div>
    
    <div class="margin-top-sm">
      <a class="btn btn--subtle btn--sm" style="background-color: royalblue; box-shadow: 7px 5px 5px black;" href="#0">Book now</a>
    </div>
  </div>
</div>
</div>

<div class="column">
<div class="card col-12" style="width: 250px; border: 2px black solid; margin-left: 150px;">
  <figure class="card__img">
    <img src="../assets/images/yacht1.jpg">
  </figure>

  <div class="card__content">
    <div class="text-component">
      <h4>Nom du Yacht - 42 mètres</h4>
      <input type="checkbox" style="color: green;" checked>Disponible</input>
      <p class="text-sm color-contrast-medium">Grand Yacht de croisière spacieux</p>
    </div>
    
    <div class="margin-top-sm">
      <a class="btn btn--subtle btn--sm" style="background-color: royalblue; box-shadow: 7px 5px 5px black;" href="#0">Book now</a>
    </div>
  </div>
</div>
</div>

    




</div>
</div>
</div>
<main class="col-2" style="display: flex; justify-content: flex-start; margin-left: 25px;">
        <!-- start main content -->
        <div class="text-component padding-y-md padding-0@md" id="sidebar">
          <h2 style="text-align: center; font-family: 'Trebuchet MS', Helvetica, sans-serif;">Nos Actualités</h2> </br>
          <img src="../assets/images/yachtbuilding.jpg" style="height: 200px;">
          <a href="#">La société Boat & Co lance son nouveau prototype toujours plus puissant !</a> </br>
          <img src="../assets/images/yachtowner.jpg" style="height: 200px;">
          <a href="#">Hausse de la taxe carburant, les propriétaires maritimes en danger ?</a> </br>
          <img src="../assets/images/yachtdriver.jpg" style="height: 200px;">
          <a href="#">Formation conducteur de croisières, un métier d'avenir !</a> 
          </div>
            <!-- end main content -->
      </main>



<h2 style="text-align: center; font-family: 'Trebuchet MS', Helvetica, sans-serif;">Les actualités du Yacht</h2>
<h4 style="padding-left: 1200px; font-family: 'Trebuchet MS', Helvetica, sans-serif;"><a href="#">Voir toute l'actualité </a></h4>

<!-- DEBUT CAROUSEL -->

<div class="carousel flex flex-column js-carousel" data-drag="on">
  <p class="sr-only">Carousel items</p>

  <div class="carousel__wrapper order-2 overflow-hidden">
    <ol class="carousel__list">
      <li class="carousel__item">
        <img src="../assets/images/yacht1.jpg">
        <div class="bg-contrast-lower height-xxxxl flex flex-center text-md">1</div>
      </li>

      <li class="carousel__item">
        <div class="bg-contrast-lower height-xxxxl flex flex-center text-md">2</div>
      </li>

      <li class="carousel__item">
        <div class="bg-contrast-lower height-xxxxl flex flex-center text-md">3</div>
      </li>

      <li class="carousel__item">
        <div class="bg-contrast-lower height-xxxxl flex flex-center text-md">4</div>
      </li>

      <li class="carousel__item">
        <div class="bg-contrast-lower height-xxxxl flex flex-center text-md">5</div>
      </li>

      <li class="carousel__item">
        <div class="bg-contrast-lower height-xxxxl flex flex-center text-md">6</div>
      </li>

      <li class="carousel__item">
        <div class="bg-contrast-lower height-xxxxl flex flex-center text-md">7</div>
      </li>

      <li class="carousel__item">
        <div class="bg-contrast-lower height-xxxxl flex flex-center text-md">8</div>
      </li>

      <li class="carousel__item">
        <div class="bg-contrast-lower height-xxxxl flex flex-center text-md">9</div>
      </li>

      <li class="carousel__item">
        <div class="bg-contrast-lower height-xxxxl flex flex-center text-md">10</div>
      </li>

      <li class="carousel__item">
        <div class="bg-contrast-lower height-xxxxl flex flex-center text-md">11</div>
      </li>

      <li class="carousel__item">
        <div class="bg-contrast-lower height-xxxxl flex flex-center text-md">12</div>
      </li>
    </ol>
  </div>

  <nav class="margin-bottom-xs order-1 no-js:is-hidden">
    <ul class="flex gap-xxxs justify-end">
      <li>
        <button class="reset carousel__control carousel__control--prev js-carousel__control js-tab-focus">
          <svg class="icon" viewBox="0 0 20 20">
            <title>Show previous items</title>
            <polyline points="13 18 5 10 13 2" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" />
          </svg>
        </button>
      </li>

      <li>
        <button class="reset carousel__control carousel__control--next js-carousel__control js-tab-focus">
          <svg class="icon" viewBox="0 0 20 20">
            <title>Show next items</title>
            <polyline points="7 18 15 10 7 2" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="2" />
          </svg>
        </button>
      </li>
    </ul>
  </nav>

</div>


<?php
    include '../partials/footer.php';
    ?>

</div>
</div>
</section>





<script src="assets/js/scripts.js"></script>
</body>
</html>