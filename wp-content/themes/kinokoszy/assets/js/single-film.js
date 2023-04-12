const leftArrow = document.querySelector(".left-arrow");
const rightArrow = document.querySelector(".right-arrow");
const linkContainer = document.querySelector(".single-film-link-container");

const distance = linkContainer.offsetWidth + 20; // + 16; //window.innerWidth * 0.02; // 20 is the gap between the link-containers, 2% is the padding of the section.

const linksContainer = document.querySelector(".single-film-links-container");

leftArrow.addEventListener("click", () => {
  console.log("click");
  linksContainer.scrollBy({
    left: -distance,
    behavior: "smooth",
  });
});

rightArrow.addEventListener("click", () => {
  console.log("right srrow");
  linksContainer.scrollBy({
    left: distance,
    behavior: "smooth",
  });
});
