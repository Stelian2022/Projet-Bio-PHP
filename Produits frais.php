<title>Produits frais</title>

<body>
    <header>
        <?php

        include './Components/Header.php';
        include './Components/Menu.php';
        ?>

    </header>
    <main>
        <div class="newPage">
            <h2>Produits frais</h2>
            <p class="feL"> <a href="./index.php"> Accueil</a> > Categories > Produits frais</p>
        </div>
        <div>
            <p> Nous vous proposons un large choix de produits au rayon frais tout en répondant à tous modes de vie!</p>
            <p>Fromages, beurres, yaourts, desserts, boissons, viandes, poissons…</p>
            <p>Végétariens, végans, personnes intolérantes au gluten ou au lactose, vous trouverez tous votre bonheur chez Rouen Bio !</p>
            <p>Le produit d’exception du moment : le lait de jument de la marque Chevalait, installée à Chailloué en Normandie.</p>
        </div>

        <?php
        //  include './Components/Articles.php';
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