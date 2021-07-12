
const carouselContainer = $('.banner-container');
const item = $('carousel-item');
const carouselControls = $('.carousel-controls');
var autoSlides;         //setInterval Name

const delay = 4500;     // Set time between automatic change
let carouselPos = 1;
const eq = (carouselPos - 1);

const changeSlide = function () {
    // console.log(carouselPos);
    if ( carouselPos > 0 && carouselPos !== 6 ) {
        carouselPos += 1;
        carouselControls.children().removeClass('active');

        } else {
            carouselPos = 1;
            carouselControls.children().removeClass('active');
            $('.carouselDot:eq(' + eq + ')').addClass('active');
        }

        // Transforms for each slide
        let translate = (1 - carouselPos)*100;
        
        carouselContainer.css('transform', 'translateX(' + translate + '%)');
        $(' .carouselDot:eq(' + ( carouselPos -1 ) + ')').addClass('active');

        $('.carouselDot').on('click', function () {
            carouselControls.children().removeClass('active');
            carouselPos = $( this ).index();
            changeSlide();
            clearInterval(autoSlides);
            startSlides();
        });
}

 //Auto Change all slides every X seconds
 const startSlides = function () {
    autoSlides = setInterval( function () {   changeSlide();   }, delay); 
}

startSlides();