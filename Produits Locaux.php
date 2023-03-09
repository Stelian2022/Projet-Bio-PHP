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
     <link rel="stylesheet" href="./assets/css/conseils.css">

     <script src="./modules/Menu/menu.js" defer type="module"></script>
     <script src="./assets/js/script.js" defer type="module"></script>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="icon" type="image/png" href="./assets/img/310809310_105833865640763_7751116440689037532_n.jpg" />
 </head>

 <title>Produits locaux</title>
<body>
     <header>
         <?php

            include './Components/Header.php';
            include './Components/Menu.php';
            ?>
     </header>
     <main>
         <div class="newPage">
             <h2>Produits locaux</h2>
             <p class="feL"> <a href="./index.php"> Accueil</a> > Ethique et mode de vie > Produits locaux</p>
         </div>
         <?php
            // include './Components/Slider.php';
            ?>
         <div class="conseils">
         <p> Nous nous engageons auprès de producteurs partageant les mêmes valeurs que Rouen Bio. </p>
<p> Parmi nos producteurs locaux, nous pouvons citer la ferme Saint Mamert et ses pains au levain (Buis sur Damville dans l’Eure), la boulangerie Le Petit Minotier et ses pains sans gluten (Darnétal), Biofair et ses compléments protéinés (Darnétal également) ainsi que Les Vergers Du Quesnay et ses boissons (Pissy-Pôville). </p>
<p> 5 bonnes raisons d’acheter des produits locaux en tant que consommateur :</p>
<p> • Profiter de pro</p>
onomie locale
<p> • Pour l’écologie, le circuit court évitant les trajets inutiles et limitant l’impact environnemental</p>
<p> • Avoir plus de choix de</p>
duits de saison, sains et d’une haute qualité
<p> • Encourager l’éc variétés (étant donné que certains produits supportent mal le transport, ils ne peuvent pas être exportés, il n’y a pas ce problème avec les producteurs régionaux)</p>
<p> • Manger sain à des prix accessibles </p>

         </div>
         <?php
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