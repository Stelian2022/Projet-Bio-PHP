


<script src="./Pages/Components/assets/js/Categories/Fel/Fel.js" defer type="module"></script>
<title>Fruits et Légumes</title>


<body>
  <header>
    <?php

    include './Pages/Components/Header.php';
    include './Components/Menu.php';
    ?>

  </header>
  <main>
    <div class="newPage">
      <h2>Fruits et Légumes</h2>
      <p class="feL"> <a href="../Account/index.php"> Accueil</a> > Categories > Fruits et légumes</p>
    </div>

    <?php
    include '../Components/Articles.php';
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