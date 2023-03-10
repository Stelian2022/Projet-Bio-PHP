<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./assets/css/slider.css">
  <link rel="stylesheet" href="./assets/css/all.css" /> 
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="stylesheet" href="./modules/Menu/menu.css">
  <link rel="stylesheet" href="./assets/css/presentation.css">
  <link rel="stylesheet" href="./assets/css/conseils.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="./modules/Menu/menu.js" defer type="module"></script>
  <script src="./assets/js/script.js" defer type="module"></script>
  <script src="./assets/js/slider.js" defer type="module"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="icon" type="image/png" href="./assets/img/310809310_105833865640763_7751116440689037532_n.jpg" />
</head>

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
  <div class="social">
            <a href="https://www.facebook.com/MagasinRouenBio/"> <i class="fab fa-facebook-square"></i></a>
            <a href="https://www.instagram.com/rouen_biomonde/"> <i class="fab fa-instagram"></i></a>
        
         </div>
</div>


<div id="imgHeader">
  <a href="../index.php"><img class="logo" src="../assets/img/Logo Biomonde-rond-01.png" alt="Biomonde Rouen"></a>
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