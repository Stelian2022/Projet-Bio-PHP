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

 <title>Le vrac</title>

 <body>
     <header>
         <?php

            include './Components/Header.php';
            include './Components/Menu.php';
            ?>
     </header>
     <main>
         <div class="newPage">
             <h2>Le Vrac</h2>
             <p class="feL"> <a href="./index.php"> Accueil</a> > Ethique et mode de vie > Le vrac</p>
         </div>
         <?php
            // include './Components/Slider.php';
            ?>
         <div class="conseils">
             <p> Pourquoi acheter en vrac ? </p>

             <p> • Pour produire moins de déchets : vous pouvez apporter vos bocaux et sacs réutilisables</p>
             <p> • Pour réaliser des économies : l’emballage des produits a un prix</p>
             <p> • Pour privilégier une consommation responsable : vous achetez seulement ce que vous avez besoin, inutile d’acheter une grosse quantité d’un produit qui sera périmé avant que vous puissiez le terminer</p>
             <p> • Pour varier sa consommation d’aliments : en achetant des petites quantités, vous pourrez varier les aliments et en essayer des nouveaux sans craindre le gaspillage alimentaire</p>
             <p>Puisque le vrac est une des solutions contre le gaspillage alimentaire et la production de déchets, notre rayon se renouvelle ! </p>
             <p>Nous vous proposons des produits du quotidien mais aussi des produits uniques pour le petit-déjeuner, le goûter, le dîner ou des préparations (fruits secs, mélanges mueslis, pâtes, riz, lentilles, noix de coco rapée…).</p>

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