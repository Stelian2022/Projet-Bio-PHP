import menuContent from "./menuContent.js";
const ulPrincipal = document.querySelector("#menuPrincipal>ul");
menuContent.map((value, index) => {
  const menuEntrie = document.createElement("li");

  menuEntrie.innerText = value.nom;

  // j'ai besoin d'inserer mon element menuEntrie dans son parent ulPrincipal
  //j'ajote une class css  .menEntrie a mon li
  menuEntrie.classList.add("menuEntrie");

  ulPrincipal.append(menuEntrie);
  const arrow = document.createElement("i");
  arrow.classList.add("fa-solid");
  arrow.classList.add("fa-angle-down");
  menuEntrie.append(arrow);

  menuEntrie.addEventListener("click", () => {
    if (
      document.body.contains(document.querySelector("#ulSecondary" + index))
    ) {
      // si l'élément secondary existe alors je le détruis
      // ...
      document.querySelector("#ulSecondary" + index).remove();
    } else {
      //je detruit tout les elements de sousMenu

      menuContent.map((value3, index3) => {
        if (
          document.body.contains(
            document.querySelector("#ulSecondary" + index3)
          )
        ) {
          // si l'élément secondary existe alors je le détruis
          // ...
          document.querySelector("#ulSecondary" + index3).remove();
        }
      });

      // si il n'existe pas je le crée
      const ulSecondary = document.createElement("ul");
      ulSecondary.id = "ulSecondary" + index;
      ulSecondary.classList.add("ulSecondary");
      menuEntrie.append(ulSecondary);
      value.sousMenu.map((value2, index2) => {
        const subMenuEntrie = document.createElement("li");
        subMenuEntrie.innerText = value2.nom;

        ulSecondary.append(subMenuEntrie);

        subMenuEntrie.addEventListener("click", function () {
          //A propos section
          if (subMenuEntrie.innerText === "Equipe") {
            window.location.href = "../Categories/Equipe";
          }
          if (subMenuEntrie.innerText === "Qui nous sommes") {
            window.location.href = "../Categories/Qui-nous-sommes";
          }
          if (subMenuEntrie.innerText === "Conseils personalisé") {
            window.location.href = "../Categories/Conseils-personalise";
          }
          if (subMenuEntrie.innerText === "H2Origin") {
            window.location.href = "../Categories/H2Origin";
          }
          if (subMenuEntrie.innerText === "Les projets") {
            window.location.href = "./Les-projets";
          }

          //Ethique et mode de vie section
          if (subMenuEntrie.innerText === "Le Végan") {
            window.location.href = "./Le-Vegan";
          }
          if (subMenuEntrie.innerText === "Le Vrac") {
            window.location.href = "./Le-Vrac";
          }
          if (subMenuEntrie.innerText === "Sans gluten") {
            window.location.href = "./Sans-gluten";
          }
          if (subMenuEntrie.innerText === "Produits locaux") {
            window.location.href = "./Produits-locaux";
          }
          //Catégories section
          if (subMenuEntrie.innerText === "Fruits et Légumes") {
            window.location.href = "../Categories/fruits-et-legumes";
          }
          if (subMenuEntrie.innerText === "Produits Frais") {
            window.location.href = "../Categories/Produits-frais";
          }
          if (subMenuEntrie.innerText === "Epiceries") {
            window.location.href = "../Categories/Epicerie";
          }
          if (subMenuEntrie.innerText === "Pains") {
            window.location.href = "../Categories/Pains";
          }
          if (subMenuEntrie.innerText === "Boissons") {
            window.location.href = "../Categories/Boissons";
          }
          if (subMenuEntrie.innerText === "Compléments alimentaires") {
            window.location.href = "../Categories/Complements-alimentaires";
          }
          if (subMenuEntrie.innerText === "Cosmétiques") {
            window.location.href = "../Categories/Cosmetiques";
          }
          if (subMenuEntrie.innerText === "Hygiéne") {
            window.location.href = "../Categories/Hygiene";
          }
          if (subMenuEntrie.innerText === "Bébé") {
            window.location.href = "../Categories/Bébé";
          }
          if (subMenuEntrie.innerText === "Maison et entretien") {
            window.location.href = "../Categories/Maison-et-entretien";
          }
          if (subMenuEntrie.innerText === "Surgelé") {
            window.location.href = "../Categories/Surgele";
          }
          if (subMenuEntrie.innerText === "Cave a Vin") {
            window.location.href = "../Categories/Cave-a-Vin";
          }
         
          //Bonnes affaires
          if (subMenuEntrie.innerText === "Des prix au plus juste") {
            window.location.href = "../Categories/Des-prix-au-plus-juste";
          }
          //Nouveautés
          //Nos marsques
          // Redirigez le navigateur vers une autre page interne
        });
      });
    }
  });

  // subMenu test

  //sub menu test
});
