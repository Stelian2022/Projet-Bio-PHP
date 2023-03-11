<title>Epicerie</title>

<body>
    <header>
        <?php

        include '../Components/Header.php';
        include '../Components/Menu.php';
        ?>

    </header>
    <main>
        <div class="newPage">
            <h2>Produits frais</h2>
            <p class="feL"> <a href="./../../index.php"> Accueil</a> > Categories > Epicerie</p>
        </div>
        <div>
            <p> Le salé</p>
            <p> Sauces, condiments, huiles, riz, pâtes, biscuits apéritif, légumes en bocaux, terrines, plats cuisinés… Un large choix de produits de la vie quotidienne vous est proposé.</p>
            <p> Nos marques : Priméal, Pural, Moulin des Moines, Emile Noël, Bio Planète, Prosain, Bonneterre Danival, Autour du Riz…</p>
            <p> Le sucré</p>
            <p> Biscuits, gâteaux, chocolats, confitures, compotes, miels, pâtes à tartiner, mueslis, biscottes, thés, cafés, fruits secs, sucres, farines… Un large choix de produits de la vie quotidienne vous est proposé.</p>
            <p>Nos marques : Evernat, Bisson, Bonneterre Danival, Rapunzel, Mamie Bio, Perl’Amande, Jean Hervé, Saveurs Fruits, Mellidor, Prosain Favrichon, Destination…</p>
        </div>

        <?php
        //  include './Components/Articles.php';
        include '../Components/Main.php';
        ?>
    </main>
    <footer>
        <?php
        include '../Components/Footer.php';
        ?>
    </footer>
</body>

</html>