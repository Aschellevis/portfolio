const images = document.querySelectorAll('.carrousel-image');
const previousButton = document.querySelector('.previous');
const nextButton = document.querySelector('.next');

previousButton.addEventListener('click', function() {
    let activeImageID = -4;
    let nextImage;
    for (i = 0; i < images.length; i++) {
        const checkImage = images[i];
        if (checkImage.classList.contains('active')) {
            activeImageID = i;
            nextImage = activeImageID + 1;
        }

        if (nextImage >= images.length) {
            nextImage = 0;
        }
    }

    images[activeImageID].classList.remove('active');
    images[nextImage].classList.add('active');
});

nextButton.addEventListener('click', function() {
    let activeImageID = -4;
    let nextImage;
    for (i = 0; i < images.length; i++) {
        const checkImage = images[i];
        if (checkImage.classList.contains('active')) {
            activeImageID = i;
            nextImage = activeImageID - 1;
        }

        if (nextImage < 0) {
            nextImage = images.length - 1;
        }
    }

    console.log(nextImage);
    console.log(activeImageID);
    images[activeImageID].classList.remove('active');
    images[nextImage].classList.add('active');
});