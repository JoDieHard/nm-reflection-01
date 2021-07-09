
const carouselContainer = $('.banner-container');
const item = $('carousel-item');
let carouselPos = 1;

const nextSlide = function () {

    setInterval( function () {
        if ( carouselPos > 0 && carouselPos !== 6 ) {
        carouselPos += 1;
        } else {
            carouselPos = 1;
        }
        console.log(carouselPos);

        // Transforms for each slide
        if ( carouselPos === 1 ) {
            carouselContainer.css('transform', 'translateX(0%)');
        } else if ( carouselPos === 2 ) {
            carouselContainer.css('transform', 'translateX(-100%)');
        } else if ( carouselPos === 3 ) {
            carouselContainer.css('transform', 'translateX(-200%)');
        } else if ( carouselPos === 4 ) {
            carouselContainer.css('transform', 'translateX(-300%)');
        } else if ( carouselPos === 4 ) {
            carouselContainer.css('transform', 'translateX(-400%)');
        } else if ( carouselPos === 5 ) {
            carouselContainer.css('transform', 'translateX(-400%)');
        } else if ( carouselPos === 6 ) {
            carouselContainer.css('transform', 'translateX(-500%)');
        }
    }, 4000); // Set time between automatic change
}

// nextSlide();