const dropdown = document.querySelector(".dropdown");
const navLinksContainer = document.querySelector(".nav-links-container");
const xMenu = document.querySelector(".x-menu");

dropdown.addEventListener("click", () => {
  navLinksContainer.classList.toggle("active");
});

xMenu.addEventListener("click", () => {
  navLinksContainer.classList.toggle("active");
});
