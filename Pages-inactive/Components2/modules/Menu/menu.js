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
        subMenuEntrie.innerText =value2.url;
        ulSecondary.append(subMenuEntrie);
        

        
      });
    
      
    }
  });

  

});



