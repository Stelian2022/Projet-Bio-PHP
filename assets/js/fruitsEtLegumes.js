import { articles } from "./articles.js";



//modale d'affichage
const imgElements = document.querySelectorAll(".article img");
console.dir(imgElements);
const imgFull = [];
const frameImg = document.createElement("div");
frameImg.style.width = "100vw";
frameImg.style.height = "100vh";
frameImg.style.backdropFilter = "blur(18px)";
frameImg.style.backgroundColor = "rgba(0,0,0,0.7)";
frameImg.style.display = "none";
frameImg.style.justifyContent = "center";
frameImg.style.alignItems = "center";
frameImg.style.position = "fixed";
frameImg.style.zIndex = 2;
document.body.prepend(frameImg);
//affichage des articles

//creation d'un array destiné a contenir mes cards
const articlesElements = [];
//
function createCard() {
  const card = document.createElement("div");
  card.classList.add("article");
  //creation des elements qui vont constituer cette card
  const cardImg = document.createElement("img");
  card.append(cardImg);
  const cardName = document.createElement("figcaption");
  card.append(cardName);

  const cardPrice = document.createElement("p");
  cardPrice.classList.add("price");
  card.append(cardPrice);

  const cardLargeur = document.createElement("p");
  card.append(cardLargeur);

  const cardDesc = document.createElement("p");
  card.append(cardDesc);



const buyButton = document.createElement('button');
buyButton.classList.add('btn', 'btn-primary');
buyButton.innerText = '';
card.appendChild(buyButton);
const buyIcon =document.createElement('i');
buyButton.classList.add('fa-solid', 'fa-cart-plus');
buyButton.append(buyIcon);

buyButton.addEventListener('click', function() {
  
});
  return card;
  
}

//creation d'une card pour mes articles

//boucle for pour le tableau

const produits = document.querySelector("#produits");
for (let index = 0; index < articles.length; index++) {
  let n = index;
  const element = articles[n];
  //ajoute les src, price, name,etc...
  let tmpCard = createCard();
  articlesElements.push(tmpCard);
  articlesElements[n].childNodes[0].src = element.url;
  articlesElements[n].childNodes[1].innerText = element.name;
  articlesElements[n].childNodes[2].innerText = element.price + " €";
  // articlesElements[n].childNodes[3].innerText = "Taille:" + element.largeur;
  articlesElements[n].childNodes[4].innerText = element.description;
 

  produits.append(articlesElements[n]);
}

