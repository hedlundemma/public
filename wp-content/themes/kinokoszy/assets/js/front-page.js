const main = document.querySelector("#front-page-main");
const kinoSection = document.querySelector("#front-page-kino-section");
const joannaSection = document.querySelector("#front-page-joanna-section");

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

//remember to write the URL to the home pages
kinoSection.addEventListener("click", function (e) {
  window.location.href = "http://kinokos.local/kino/";
});

joannaSection.addEventListener("click", function (e) {
  window.location.href = "http://kinokos.local/joanna/";
});
