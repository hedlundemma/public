const overlayImg = document.querySelector('#photo-overlay-img img');
const galleryImages = document.querySelectorAll('.wp-block-image img');


console.log('im here');
galleryImages.forEach(img => {
    img.addEventListener('click', (e) => {
        console.log('test');
    });
});