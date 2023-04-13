const main = document.querySelector("#front-page-main");
const kinoSection = document.querySelector("#front-page-kino-section");
const joannaSection = document.querySelector("#front-page-joanna-section");

if (!/Mobi|Android|iPhone/i.test(navigator.userAgent)) {

  kinoSection.addEventListener("mouseenter", function (e) {
    joannaSection.classList.add("blur");
  });
  
  kinoSection.addEventListener("mouseleave", function (e) {
    joannaSection.classList.remove("blur");
  });
  
  joannaSection.addEventListener("mouseenter", function (e) {
    kinoSection.classList.add("blur");
  });
  
  joannaSection.addEventListener("mouseleave", function (e) {
    kinoSection.classList.remove("blur");
  });  
}

// need to change url when we deploy
kinoSection.addEventListener("click", function (e) {
  window.location.href = "kino";
});

// need to change url when we deploy
joannaSection.addEventListener("click", function (e) {
  window.location.href = "joanna";
});


