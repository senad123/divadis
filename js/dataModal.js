const dataModal = [
  {
    title: "Pizza",
    image: "./images/pizza.png",
    items: [
      { itemTitle: "Margherita", itemPrice: "7,00€" },
      { itemTitle: "Pepperoni", itemPrice: "8,00€" },
      // Add more items as needed
    ],
  },
  {
    title: "Pasta",
    image: "./images/pasta.png",
    items: [
      { itemTitle: "Carbonara", itemPrice: "7,00€" },
      { itemTitle: "Bolognese", itemPrice: "8,00€" },
      // Add more items as needed
    ],
  },
  // Add more categories as needed
];

const menuContainer = document.getElementById("menuContainer");
const modalBody = document.getElementById("modalBody");

// Use map to create arrays of elements
const menuElements = dataModal.map((category) => {
  const newDiv = document.createElement("div");
  newDiv.classList.add("col-md-4");
  newDiv.innerHTML = `
    <div class="card mb-4">
      <img src="${category.image}" class="card-img-top" alt="${category.title}" />
      <div class="card-body">
        <h5 class="card-title">${category.title}</h5>
      </div>
    </div>
  `;
  return newDiv;
});

// Append the menu elements to the menuContainer
menuElements.forEach((element) => menuContainer.appendChild(element));

// Use map to create arrays of modal elements
const modalElements = dataModal.map((category) => {
  const categoryDiv = document.createElement("div");
  categoryDiv.classList.add("row");
  categoryDiv.innerHTML = `
    <div class="col-md-6">
      <div class="card mb-4">
        <img src="${category.image}" class="card-img-top" alt="${
    category.title
  }" />
        <div class="card-body">
          <h5 class="card-title">${category.title}</h5>
          <ul class="list-group list-group-flush">
            ${category.items
              .map(
                (item) => `
              <li class="list-group-item d-flex justify-content-between align-items-center">
                ${item.itemTitle}
                <span class="badge badge-primary badge-pill">${item.itemPrice}</span>
              </li>`
              )
              .join("")}
          </ul>
        </div>
      </div>
    </div>
  `;
  return categoryDiv;
});

// Append the modal elements to the modalBody
modalElements.forEach((element) => modalBody.appendChild(element));
