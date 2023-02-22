const bouton = document.getElementById("acc");

// Ajoutez un écouteur d'événement au bouton
bouton.addEventListener("click", function() {
  // Redirigez le navigateur vers une autre page interne
  window.location.href = "../Account/SignUpForm.php";
});
