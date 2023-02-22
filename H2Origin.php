

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

<title>H2Origin</title>

<body>
    <header>
        <?php

        include './Components/Header.php';
        include './Components/Menu.php';
        ?>
    </header>
    <main>
    <div class="newPage">
            <h2>H2Origin</h2>
            <p class="feL"> <a href="./index.php"> Accueil</a> > A propos > H2Origin</p>
        </div>
        <?php
        include './Components/Slider.php';
        ?>
        <div class="presentation">
            <h2>H2Origine</h2>
           


           <p> Depuis quelques mois, nous avons installé une toute nouvelle machine unique en Normandie qui filtre l’eau de la métropole !</p>

<p>Nous vous proposons une eau d’une grande qualité, idéale à boire au quotidien car elle ne contient ni pesticides, ni produits chimiques comme peut en contenir l’eau du robinet. </p>

<p>Le concept :</p>

<p>Vous achetez le contenant une première fois (bouteille en PET alimentaire réutilisable ou en verre) et le contenu (eau plate ou eau gazeuse) sera toujours gratuit !</p>

<p>Ce concept vous revient alors beaucoup moins cher que d’acheter des packs de bouteilles d’eau en plastique en supermarché puisque vous pouvez venir en magasin remplir vos bouteilles d’eau tous les jours si vous le voulez.</p> 

<p>Un cabas qui peut contenir 6 bouteilles et quelques courses vous est également proposé.</p>

<p>Notre but :</p>

<p>Réduire les déchets ensemble</p>
<p>Vous proposer une eau de qualité à boire quotidiennement</p>
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