<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="./assets/css/all.css" />
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="stylesheet" href="./assets/css/SignUpForm.css">
  <link rel="stylesheet" href="./modules/Menu/menu.css">
  <link rel="stylesheet" href="./assets/css/slider.css">


  <script src="./modules/Menu/menu.js" defer type="module"></script>
  <script src="./assets/js/script.js" defer type="module"></script>


  <link rel="icon" type="image/png" href="./assets/img/310809310_105833865640763_7751116440689037532_n.jpg" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<title>Register</title>

<body>
  <header>

    <?php

    include './Components/Header.php';
    include './Components/Menu.php';
    ?>

  </header>
 <div class="newPage">
    <h2>Inscription / Log In</h2>
    <p class="feL"> <a href="./index.php"> Accueil</a> > Création compte / Log In</p>
  </div>

  <main>
    <div class=" contactForm">
      <form>
        <label>
          <h2>Création compte</h2>
          <input type="text" name="nom" placeholder="Nom" />
          <input type="text" name="prenom" placeholder="Prénom" />
          <input type="text" name="email" placeholder="Email" />
          <input type="password" name="pwd" placeholder="Password" required />
          <input type="password" name="pwd" placeholder="Repeat your Password" required />
        </label>
        <div class="checkbox">
          <input type="checkbox" id="accept" name="accept" value="yes" />
          <h3> I agree all statemants in Terms of service</h3>
        </div>
        <div class="submit">
          <input type="submit" value="SIGN UP" />
        </div>
      </form>

      <!-- log in -->
      <!-- <div id="create-account-wrap">
    <p>Not a member? <a href="#">Create Account</a><p>
  </div> -->

      <div class="login">
        <form class="login-form">
          <h2>Login</h2>

          <input type="text" id="username" name="username" placeholder="Username" required><i class="validation"></i>


          <input type="email" id="email" name="email" placeholder="Email Address" required><i class="validation"></i>


          <input type="submit" id="login" value="LOGIN">




        </form>

      </div>
    </div>


    <!-- log in -->

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