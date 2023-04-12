const overlay = document.querySelector('#photo-overlay')
const overlayImg = document.querySelector('#photo-overlay-img img');
const galleryImages = document.querySelectorAll('.wp-block-image img');
const photoOverlayNext = document.querySelector("#photo-overlay-nav-next");
const photoOverlayPrevious = document.querySelector("#photo-overlay-nav-previous");
const photoOverlayClose = document.querySelector("#photo-overlay-close");
let currentImgIndex = 0;

galleryImages.forEach((img, i) => {
    img.setAttribute('data-index', i);

    img.addEventListener('click', (e) => {
        overlay.classList.toggle('hide');
        currentImgIndex = e.target.getAttribute('data-index');
        overlayImg.src = e.target.src;
    });
});

photoOverlayNext.addEventListener('click', (e) => {
    nav(1);
});
photoOverlayPrevious.addEventListener('click', (e) => {
    nav(-1);
});
photoOverlayClose.addEventListener('click', () =>{
    overlay.classList.toggle('hide');
});

function nav(dir) {
    currentImgIndex += dir;
    currentImgIndex = wrap(currentImgIndex, 0, galleryImages.length - 1 );   
    overlayImg.src = galleryImages[currentImgIndex].getAttribute('src');
    console.log(currentImgIndex);
}

function wrap(num, min, max){
    const range = max - min + 1; 
    const wraped = ((num - min) % range + range) % range; 
    return wraped + min;
};