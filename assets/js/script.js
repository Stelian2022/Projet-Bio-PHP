import { articles } from "./articles.js";
const bouton = document.getElementById("acc");

// Ajoutez un écouteur d'événement au bouton
bouton.addEventListener("click", function() {
  // Redirigez le navigateur vers une autre page interne
  window.location.href = "./SignUpForm.php";
});
const panier = document.getElementById("panier");

// Ajoutez un écouteur d'événement au bouton
panier.addEventListener("click", function() {
  // Redirigez le navigateur vers une autre page interne
  window.location.href = "./Panier.php";
});




