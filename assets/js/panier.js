import { articles } from "./articles.js";

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

  
  const cardDesc = document.createElement("p");
  card.append(cardDesc);
  const buyButton = document.createElement("button");
    buyButton.classList.add("btn", "btn-primary");
   buyButton.innerText = "";
    card.append(buyButton);
  // const buyIcon = document.createElement("i");
    buyButton.classList.add("fa-solid", "fa-cart-plus");
  return card;
}

for (let index = 0; index < articles.length; index++) {
  let n = index;
  const element = articles[n];
  let tmpCard = createCard();
  articlesElements.push(tmpCard);
  articlesElements[n].childNodes[1].innerText = element.name;
  articlesElements[n].childNodes[2].innerText = element.price + " €";
  const buyButton = document.querySelectorAll(".btn");
  const cart = []; // array to store the cart items
  buyButton.forEach(function (button) {
    button.addEventListener("click", function () {
      const item = {
        name: element.name,
        price: element.price,
      };
      cart.push(item);
      console.log("Item added to cart:", item);
      console.log("Cart:", cart);
    });
    const cartItems = document.querySelectorAll("#votrePanier");
    function displayCart() {
      cart.forEach(function (item) {
        const li = document.createElement("li");
        li.innerHTML = `
        <span>${item.data.name}</span>
        <span>${item.data.price}</span>
      `;
        cartItems.appendChild(li);
      });
    }

    displayCart();
  });
}