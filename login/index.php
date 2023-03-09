<?php
session_start();
require '../inc/fonctions.php';
require '../inc/pdo.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') :
    $email = htmlentities(trim($_POST['email']));
    $pwd = trim($_POST['pwd']);
    $requete = 'SELECT * FROM user where email=:email';
    $resultat = $conn->prepare($requete);
    $resultat->bindValue(':email', $email, PDO::PARAM_STR);
    $resultat->execute();
    $resultatEmail = $resultat->fetch();
    if (!$resultatEmail) :
        echo 'Votre email n\'est pas enregistré comme utilisateur de notre site.';
        exit();
    else :
        //   if(password_verify($pwd,$resultatEmail['pwd'])) :
        $_SESSION['login'] = true;
        header('Location: /');
        exit();
    //   else:
    //     echo 'Le mot de passe est non valide.';
    endif;
endif
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../assets/css/all.css" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/SignUpForm.css">
    <link rel="stylesheet" href="../modules/Menu/menu.css">
    <link rel="stylesheet" href="../assets/css/slider.css">


    <script src="../modules/Menu/menu.js" defer type="module"></script>
    <script src="../assets/js/script.js" defer type="module"></script>


    <link rel="icon" type="image/png" href="../assets/img/310809310_105833865640763_7751116440689037532_n.jpg" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<title>Register</title>
<!-- <form method="POST" class="connection">
    <div>
        <label for="email">
            Email
        </label>
        <input type="email" name="email" id="email" required>
    </div>
    <div>
        <label for="pwd">
            Password
        </label>
        <input type="password" name="pwd" id="pwd">
    </div>
    <div>
        <input type="submit" value="Connexion">
    </div>
</form> -->

<body>
    <header>

        <?php

        include '../Components/Header.php';
        include '../Components/Menu.php';
        ?>
    </header>
    <div class="newPage">
        <h2>Inscription / Log In</h2>
        <p class="feL"> <a href="./index.php"> Accueil</a> > Création compte / Connection</p>
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
                    <input type="submit" value="INSCRIPTION" />
                </div>
            </form>

            <!-- log in -->
            <!-- <div id="create-account-wrap">
    <p>Not a member? <a href="#">Create Account</a><p>
  </div> -->

            <div class="login">
                <form method="POST" class="login-form">
                    <h2>Login</h2>

                    <input type="text" id="email" name="email" placeholder="Email" required><i class="validation"></i>


                    <input type="password" id="pwd" name="pwd" placeholder="Password" required><i class="validation"></i>


                    <input type="submit" id="login" value="CONNEXION">




                </form>

            </div>
        </div>

        <?php
        include '../Components/Main.php';
        ?>
    </main>

    <footer>
        <?php
        include '../Components/Footer.php';
        ?>
    </footer>
</body>