<title>Les projets</title>

<body>
    <header>
        <?php

        include './Components/Header.php';
        include './Components/Menu.php';
        ?>
    </header>
    <main>
    <div class="newPage">
            <h2>Les Projets</h2>
            <p class="feL"> <a href="./index.php"> Accueil</a> > A propos > Les Projets</p>
        </div>
        <?php
        // include './Components/Slider.php';
        ?>
        <div class="presentation">
            <h2>Les projets</h2>
            <h3>Le salon de thé</h3>


            <p>Prochainement, un salon de thé sera installé au sein du magasin, dans la partie « bien-être ». 

Vous pourrez vous détendre autour d’un thé, tout en profitant de la mélodie du piano, installé depuis peu. </p>
<div class="proj">
    <img src="./assets/img/projets-rb.jpg" alt="">
</div>
 


<h3>Le fast food</h3> 


<p>Prochainement, un fast-food verra le jour au sein de Rouen Bio ! </p>

<p>Vous pourrez y déguster des préparations cuisinées à partir de fruits et légumes abîmés par exemple, pour vous prouver qu’ils sont toujours aussi bons et ainsi lutter contre le gaspillage ensemble. </p>

<p>En préparant des plats végétariens et végans, nous vous montrerons que vous pouvez vous régaler avec des plats rapides à cuisiner !</p>

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