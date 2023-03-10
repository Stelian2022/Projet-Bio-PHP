<title>Qui nous sommes</title>

<body>
    <header>
        <?php

        include './Components/Header.php';
        include './Components/Menu.php';
        ?>
    </header>
    <main>
        <div class="newPage">
            <h2>Qui nous sommes</h2>
            <p class="feL"> <a href="./index.php"> Accueil</a> > A propos > Qui nous sommes</p>
        </div>
        <?php
        // include './Components/Slider.php';
        ?>
        <div class="presentation">
            <h2>Présentation du magasin</h2>
            <p>Rouen Bio, un magasin d’alimentaire bio implanté depuis 25 ans au sein de Petit-Quevilly, se renouvelle !

            <p> Les nouveaux gérants depuis le 14 avril 2022 ont de grands projets en tête afin de conserver la clientèle fidèle et d’en attirer une nouvelle.</p>

            <p> Ils misent sur un large choix de produits dans chaque rayon, sur des prix accessibles à tous budgets et sur un engagement auprès des producteurs de la région.</p>

            <p> Rouen Bio évolue grâce à une équipe engagée au quotidien pour être au plus proche de vos attentes. Plus qu’un commerce de proximité, Rouen Bio est un véritable lieu de bien-être !</p>

            <p> Pour un renouvellement efficace, nous avons besoin de vous !</p>

            <p> N’hésitez pas à nous transmettre votre avis et vos recommandations en magasin ou sur notre page Google et à nous recommander auprès de vos proches.</p>
        </div>
        <div class="video">
            <p></p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/9KblFtAskPI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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