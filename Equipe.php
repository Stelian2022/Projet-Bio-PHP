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
        // include './Components/Slider.php';
        ?>
        <div class="presentation">
            <h2>Une équipe pour vous conseiller</h2>
            <p>Rouen Bio, un magasin d’alimentaire bio implanté depuis 25 ans au sein de Petit-Quevilly, se renouvelle ! </p>

            <p> Les nouveaux gérants depuis le 14 avril 2022 ont de grands projets en tête afin de conserver la clientèle fidèle et d’en attirer une nouvelle.</p>

            <p> Ils misent sur un large choix de produits dans chaque rayon, sur des prix accessibles à tous budgets et sur un engagement auprès des producteurs de la région.</p>

            <p> Rouen Bio évolue grâce à une équipe engagée au quotidien pour être au plus proche de vos attentes. Plus qu’un commerce de proximité, Rouen Bio est un véritable lieu de bien-être !</p>

            <p> Pour un renouvellement efficace, nous avons besoin de vous !</p>

            <p> N’hésitez pas à nous transmettre votre avis et vos recommandations en magasin ou sur notre page Google et à nous recommander auprès de vos proches.</p>
        </div>
        <div class="team">
            <div class="team1">
                <img src="./assets/img/luis-costea-rouenbio-.jpg" alt="">
                <h3>LUIS</h3>
                <p>gérant de Rouen Bio</p>
                <p>Je souhaite vous transmettre des valeurs familiales, de bien-être et de vivre ensemble. Venez nous rencontrer et vous ne serez pas déçu !</p>
            </div>
            <div class="team1">
                <img src="./assets/img/loredana-costea-rouenbio.jpg" alt="">
                <h3>LOREDANA</h3>
                <p>gérante et chargée de la partie « bien-être</p>
                <p>Je souhaite vous transmettre des valeurs familiales, de bien-être et de vivre ensemble. Venez nous rencontrer et vous ne serez pas déçu !</p>
            </div>
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