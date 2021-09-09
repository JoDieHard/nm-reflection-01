
const carouselContainer = $('.banner-container');
const item = $('carousel-item');
const carouselControls = $('.carousel-controls');
var autoSlides;         //setInterval Name

const delay = 4500;     // Set time between automatic change
let carouselPos = 1;
const eq = (carouselPos - 1);
let translate;
// How much the carousel will move when dragged
// const carouselSensitivity = ;

const sliderTranslate = function () {
    translate = (1 - carouselPos)*100;

    // Transforms for each slide        
    carouselContainer.css('transform', 'translateX(' + translate + '%)');
    carouselControls.children().removeClass('active');
    $(' .carouselDot:eq(' + ( carouselPos -1 ) + ')').addClass('active');
}

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
        sliderTranslate();
}

$('.carouselDot').on('click', function () {
    carouselControls.children().removeClass('active');
    carouselPos = $( this ).index();
    changeSlide();
    clearInterval(autoSlides);
    startSlides();
});

 //Auto Change all slides every X seconds
 const startSlides = function () {
    autoSlides = setInterval( function () {   changeSlide();   }, delay); 
}

startSlides();


// SWITCH SLIDE FUNCTION FOR WHEN CAROUSEL IS DRAGGED

    let dragDir = null;

const switchSlide = function () {
    if ( dragDir == 'right' ) {
        if ( carouselPos > 1 && carouselPos !== 6 ) {
            carouselPos -= 1;
        } else if (carouselPos == 1) {
            carouselPos = 6;
        }
        sliderTranslate();

    } else if ( dragDir == 'left' ) {
        if ( carouselPos > 0 && carouselPos != 6 ) {
            carouselPos += 1;
        } else {
            carouselPos = 1;
        }
        sliderTranslate();
    }
}

carouselPressed = false; 
let dragX;
let dragXstart;
let dragXend;


// ON MOUSE DOWN CANCEL AUTO SLIDE
    carouselContainer.on('mousedown', function (event) {
        carouselPressed = true;
        dragXstart = event.offsetX;
        dragX = dragXstart - carouselContainer.offsetLeft;

        // console.log( 'dragXstart is: ' + dragXstart + 'px' );
        clearInterval(autoSlides);

        // ADD AN OFFSET BASED ON DISTANCE DRAGGED
    carouselContainer.on('mousemove', function (event) {
        if ( carouselPressed == true ) {
            //Transform Offset
            // console.log('Offset the Carousels drag by ' + (dragXstart - event.offsetX) + 'px.')
            carouselContainer.css('transform', 'translateX(' + translate + '% ) translateX(' + ((dragXstart - event.offsetX) * -10) + 'px' + ' )');
        } /* else {
            console.log('carousel not Pressed');
        } */
    });
    });

    //ON MOUSE UP WHERE IS THE MOUSE
    carouselContainer.on('mouseup', function (event){
        dragXend = event.offsetX;
        dragX = dragXstart - dragXend;

        carouselPressed = false;
        // console.log('dragX End is: ' + dragXend + 'px' );
        // console.log( 'dragX is: ' + dragX + 'px' );

        // IF DRAGGED, DETERMINE WHETHER IT WAS LEFT OR RIGHT. 
        if ( dragX == 0 ) { 
            return; 
        } else if  ( dragX > 0 ) { 
            // console.log( 'You have dragged left.' );
            dragDir = 'left';
            // carouselPos - 1;
            switchSlide();
            console.log( carouselPos );

        } else if ( dragX < 0 ) {
            // console.log( 'You have dragged right.' );
            //Move Carousel Right 
            // carouselPos - 1;
            dragDir = 'right';
            switchSlide();
            console.log( carouselPos );
        }
    });

// GO TO APPROPRIATE SLIDE BASED ON DRAG

// clearInterval(autoSlides); IS THE FUNCTION TO STOP SET INTERVAL.