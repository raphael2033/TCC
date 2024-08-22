const minPriceInput = document.getElementById("min-price");
const maxPriceInput = document.getElementById("max-price");
const filterButton = document.getElementById("filter");
const productsContainer = document.getElementById("products");

let products = [
  {
    id: 1,
   
    image: "img/produto-1.jpg",
    name: "Blazer Rosa",
    price: 100,
  },
  {
    id: 2,
    name: "Cropped Azul Balonê",
    price: 60,
    image: "img/produtos1.webp",
  },
  {
    id: 3,
    name: "Vestido preto",
    price: 50,
    image: "img/produto4.webp",
  },
  {
    id: 4,
    name: "Cropped Amarelo",
    price: 50,
    image: "img/cropped.webp",
  },
  {
    id: 5,
    name: "Cardigan Rosa",
    price: 100,
    image: "img/produto3.webp",
  },
  {
    id: 6,
    name: "Saia Midi Estampada",
    price: 65,
    image: "img/saia.webp",
  },
  {
    id: 7,
    name: "Saia Midi tule Verde",
    price: 150,
    image: "img/categoria4.webp",
  },
  {
    id: 8,
    name: "Jaqueta Off White",
    price: 350,
    image: "img/jaqueta.jpg",
  },
  {
    id: 9,
    name: "Calça de Couro",
    price: 150,
    image: "img/categoria2.jpg",
  },
  {
    id: 10,
    name: "Short Saia Preto",
    price: 70,
    image: "img/produto 4.webp",
  },
  {
    id: 11,
    name: "Blazer Laranja",
    price: 200,
    image: "img/produto-2.jpg",
  },
  {
    id: 12,
    name: "Vestido longo Trico",
    price: 200,
    image: "img/categoria1.jpg",
  },
  {
    id: 13,
    name: "Blusa Manga Longa",
    price: 50,
    image: "img/capa.webp",
  },
  {
    id: 14,
    name: "Short com cordão",
    price: 37,
    image: "img/short.webp",
  },
  {
    id: 15,
    name: "Short de couro sintetico",
    price: 70,
    image: "img/couro.webp",
  },
  {
    id: 16,
    name: "Calça Pantalona Preta",
    price: 70,
    image: "img/pantalona.jpg",
  },

  
];

filterButton.addEventListener("click", () => {
  const minPrice = parseInt(minPriceInput.value);
  const maxPrice = parseInt(maxPriceInput.value);

  products = products.filter((product) => {
    return product.price >= minPrice && product.price <= maxPrice;
  });

  productsContainer.innerHTML = "";

  for (const product of products) {
    const productElement = document.createElement("div");
    productElement.classList.add("product");
   
   

   
   
      

    const imageElement = document.createElement("img");
    imageElement.src = product.image;

    const productNameElement = document.createElement("p");
      productNameElement.textContent = product.name;
      productElement.appendChild(productNameElement);
  
      
      const productPriceElement = document.createElement("p");
      productPriceElement.textContent = `R$ ${product.price}`;
      productElement.appendChild(productPriceElement);


    productElement.appendChild(imageElement);

    productsContainer.appendChild(productElement);
  }
});