
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- <link rel="stylesheet" href="./assets/css/all.css" /> -->
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="stylesheet" href="./modules/Menu/menu.css">
    <link rel="stylesheet" href="./assets/css/slider.css">
    <link rel="stylesheet" href="./assets/css/presentation.css">

    <script src="./modules/Menu/menu.js" defer type="module"></script>
    <script src="./assets/js/script.js" defer type="module"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="./assets/img/310809310_105833865640763_7751116440689037532_n.jpg" />
</head>

<title>Les projets</title>

<body>
    <header>
        <?php

        include './Components/Header.php';
        include './Components/Menu.php';
        ?>
    </header>
    <main>
    <div class="newPage">
            <h2>Les Projets</h2>
            <p class="feL"> <a href="./index.php"> Accueil</a> > A propos > Les Projets</p>
        </div>
        <?php
        // include './Components/Slider.php';
        ?>
        <div class="presentation">
            <h2>Les projets</h2>
            <h3>Le salon de thé</h3>


            <p>Prochainement, un salon de thé sera installé au sein du magasin, dans la partie « bien-être ». 

Vous pourrez vous détendre autour d’un thé, tout en profitant de la mélodie du piano, installé depuis peu. </p>
<div class="proj">
    <img src="./assets/img/projets-rb.jpg" alt="">
</div>
 


<h3>Le fast food</h3> 


<p>Prochainement, un fast-food verra le jour au sein de Rouen Bio ! </p>

<p>Vous pourrez y déguster des préparations cuisinées à partir de fruits et légumes abîmés par exemple, pour vous prouver qu’ils sont toujours aussi bons et ainsi lutter contre le gaspillage ensemble. </p>

<p>En préparant des plats végétariens et végans, nous vous montrerons que vous pouvez vous régaler avec des plats rapides à cuisiner !</p>

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