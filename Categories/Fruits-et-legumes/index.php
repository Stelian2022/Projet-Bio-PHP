<title>Fruits et Légumes</title>

<body>
  <header>
    <?php

    include '../Components/Header.php';
    include '../Components/Menu.php';
    ?>
  </header>
  <main>
    <div class="newPage">
      <h2>Fruits et Légumes</h2>
      <p class="feL"> <a href="./../../index.php"> Accueil</a> > Categories > Fruits et légumes</p>
    </div>
    <div>
      Nous optons pour des fruits et légumes Bio et Demeter locaux (de Bretagne et de Normandie) lorsque cela est possible pour le bien de votre santé
      (cliquez ici pour en savoir plus sur nos produits locaux)
      Nous les proposons à des prix accessibles pour que chacun d’entre vous puisse avoir la chance de consommer des produits de haute qualité.
      De plus, nous aimons vous surprendre chaque semaine avec des produits d’exception !
    </div>
    <div class="fruits">
      <img src="./../../assets/img/fruits-et-legumes-bio-rouen.jpg" alt="">
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