<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="./modules/Menu/menu.js" defer type="module"></script>
  <script src="./assets/js/fruitsEtLegumes.js" defer type="module"></script>
  <script src="./assets/js/script.js" defer type="module"></script>
   <!-- <script src="./assets/js/cart.js" defer type="module"></script> -->
  <script src="./assets/js/fruitsEtLegumes.js" defer type="module"></script>
  <link rel="stylesheet" href="./assets/css/all.css" />
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="stylesheet" href="./modules/Menu/menu.css">
  <link rel="stylesheet" href="./assets/css/slider.css">


  

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" type="image/png" href="./assets/img/310809310_105833865640763_7751116440689037532_n.jpg" />
</head>


<body>
  <header>
    <?php

    include './Components/Header.php';
    include './Components/Menu.php';
    ?>

  </header>
  <main>
    <div class="newPage">
      <h2>Fruits et Légumes</h2>
      <p class="feL"> <a href="./index.php"> Accueil</a> > Categories > Fruits et légumes</p>
    </div>
  <div>
  Nous optons pour des fruits et légumes Bio et Demeter locaux (de Bretagne et de Normandie) lorsque cela est possible pour le bien de votre santé 
(cliquez ici pour en savoir plus sur nos produits locaux)
Nous les proposons à des prix accessibles pour que chacun d’entre vous puisse avoir la chance de consommer des produits de haute qualité. 
De plus, nous aimons vous surprendre chaque semaine avec des produits d’exception ! 
  </div>
    <?php
   include './Components/Articles.php';
    include './Components/Main.php';
    ?>
  </main>
  <footer>
    <?php
    include './Components/Footer.php';
    ?>
  </footer>
</body>

</html>