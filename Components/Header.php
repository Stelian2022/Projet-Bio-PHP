<?php
session_start();

?>
<script src="../assets/js/script.js" defer type="module"></script>
<div class="top">
  <?php
  // var_dump($_SESSION['login']);
  ?>
  <div>
    <p>Adresse : 79 Bd du 11 Novembre , Le Petit Quevilly 76140</p>
    <p>Telephone : 02 35 73 72 70</p>
  </div>
  <div class="inscription">
    <ul> <?//php if (($_SESSION['login'])) { ?>
        <li>
          <!-- <a href="./login/deconnexion.php">Deconnection</a> -->
        </li>
      <?//php } else { ?>
        <li>
          <!-- <a href="./login/index.php">Inscription/Connection</a> -->
        </li>
      <?//php } ?>
    </ul>
  </div>
</div>


<div id="imgHeader">
  <img class="logo" src="../assets/img/Logo Biomonde-rond-01.png" alt="">
  <div class="text">
    <h2>Rouen Bio</h2>
    <h2>L'Art de la simplicité</h2>
  </div>
  <div class="account">
    <!-- <a href="../profil.php"></a>  -->
    <button id="acc"> <img src="./assets/img/user.png" alt="" /><span> Mon Compte</span></button>
    <button id="panier"><img src="./assets/img/cart.png" alt="" /><span>Mon Panier</span></button>

  </div>

</div>


<!-- <div class="shoppingCart">
  <div class="misc">
    <i class="fas fa-shopping-cart"></i>
    <i class="fas fa-search"></i>
  </div>
</div> -->