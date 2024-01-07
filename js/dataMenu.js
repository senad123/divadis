dataMenu = [
  {
    title: "Salat / Vorspeise",
    image: "./images/menu/menu_1.jpeg",
    text: "Erleben Sie die Frische und Raffinesse unserer Salat- und Vorspeisenauswahl. Unsere Küchenkünstler zaubern eine Vielfalt an köstlichen und gesunden Gerichten.",
  },
  {
    title: "Unsere Spezialitäten",
    image: "./images/menu/menu_2.JPG",
    text: "Entdecken Sie die Vielfalt unserer Italienischen- Balkanischen Küche. Von aromatischen Pasta-Gerichten bis zu herzhaften Grillkreationen bieten wir kulinarische Spezialitäten an.",
  },
  {
    title: "Fleischgerichte",
    image: "./images/menu/menu_3.png",
    text: "Entdecken Sie köstliche Fleischgerichte in unserem Restaurant. Von klassischen Spezialitäten wie Cevapcici, Cufte, bis hin zu ''Scharska''' .",
  },
];
const menu = dataMenu.map((el) => ({
  title: el.title,
  image: el.image,
  text: el.text,
}));

const menuContainer = document.getElementById("menuContainer");

dataMenu.forEach((menuItem) => {
  // Create a new div for each item
  const newDiv = document.createElement("div");
  newDiv.classList.add("col-md-4");

  // Populate the div with content
  newDiv.innerHTML = `
    <div class="card mb-4">
      <img src="${menuItem.image}" class="card-img-top" alt="${menuItem.title}" />
      <div class="card-body">
        <h5 class="card-title">${menuItem.title}</h5>
        <p class="card-text">${menuItem.text}</p>
      </div>
    </div>
  `;

  // Append the new div to the menu container
  menuContainer.appendChild(newDiv);
});
