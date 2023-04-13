const overlay = document.querySelector("#photo-overlay");
const overlayImg = document.querySelector("#photo-overlay-img img");
const galleryImages = document.querySelectorAll(".wp-block-image img");
const photoOverlayNext = document.querySelectorAll(".photo-overlay-nav-next");
const photoOverlayPrevious = document.querySelectorAll(
  ".photo-overlay-nav-previous"
);
const photoOverlayClose = document.querySelector("#photo-overlay-close");
let currentImgIndex = 0;

galleryImages.forEach((img, i) => {
  img.setAttribute("data-index", i);

  img.addEventListener("click", (e) => {
    overlay.classList.toggle("hide");
    currentImgIndex = parseInt(e.target.getAttribute("data-index"));
    overlayImg.src = e.target.src;
    console.log(currentImgIndex);
  });
});

photoOverlayNext.forEach((node) => {
  node.addEventListener("click", (e) => {
    nav(1);
  });
});

photoOverlayPrevious.forEach((node) => {
  node.addEventListener("click", (e) => {
    nav(-1);
  });
});

photoOverlayClose.addEventListener("click", (e) => {
    overlay.classList.toggle("hide");
  });

function nav(dir) {
  currentImgIndex += dir;
  currentImgIndex = wrap(currentImgIndex, 0, galleryImages.length - 1);
  overlayImg.src = galleryImages[currentImgIndex].getAttribute("src");
  console.log(currentImgIndex);
}

function wrap(num, min, max) {
  const range = max - min + 1;
  const wraped = (((num - min) % range) + range) % range;
  return wraped + min;
}
