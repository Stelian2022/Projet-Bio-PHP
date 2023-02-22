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
    <link rel="stylesheet" href="./assets/css/presentation.css">

    <script src="./modules/Menu/menu.js" defer type="module"></script>
    <script src="./assets/js/script.js" defer type="module"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="./assets/img/310809310_105833865640763_7751116440689037532_n.jpg" />
</head>

<title>Equipe</title>

<body>
    <header>
        <?php

        include './Components/Header.php';
        include './Components/Menu.php';
        ?>
    </header>
    <main>
        <div class="newPage">
            <h2>Equipe</h2>
            <p class="feL"> <a href="./index.php"> Accueil</a> > A propos > Equipe</p>
        </div>
        <?php
        include './Components/Slider.php';
        ?>
        <div class="presentation">
            <h2>Une équipe pour vous conseiller</h2>
            <p>Rouen Bio, un magasin d’alimentaire bio implanté depuis 25 ans au sein de Petit-Quevilly, se renouvelle !

                Les nouveaux gérants depuis le 14 avril 2022 ont de grands projets en tête afin de conserver la clientèle fidèle et d’en attirer une nouvelle.

                Ils misent sur un large choix de produits dans chaque rayon, sur des prix accessibles à tous budgets et sur un engagement auprès des producteurs de la région.

                Rouen Bio évolue grâce à une équipe engagée au quotidien pour être au plus proche de vos attentes. Plus qu’un commerce de proximité, Rouen Bio est un véritable lieu de bien-être !

                Pour un renouvellement efficace, nous avons besoin de vous !

                N’hésitez pas à nous transmettre votre avis et vos recommandations en magasin ou sur notre page Google et à nous recommander auprès de vos proches.</p>
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