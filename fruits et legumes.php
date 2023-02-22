<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="./assets/css/all.css" />
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="stylesheet" href="./modules/Menu/menu.css">
  <link rel="stylesheet" href="./assets/css/slider.css">

  <script src="./modules/Menu/menu.js" defer type="module"></script>
  <script src="./assets/js/fruitsEtLegumes.js" defer type="module"></script>
  <script src="./assets/js/script.js" defer type="module"></script>
  <script src="./assets/js/cart.js" defer type="module"></script>
  

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

    <div id="page-panier"><ul></ul></div>

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