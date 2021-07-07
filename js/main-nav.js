
const header = $('header');
const nav = $('.main-nav');
const createDiv = function () {  $('.website').prepend($('<div>', {"class": "slidingNav"})); }; // This Function creates an empty Div
let lastScrollValue = 0;

$( window ).scroll( function(event) {
    // console.log('You are scrolling!');
    let sv = $(this).scrollTop();       // This gets the Current Scroll Value

    if ( sv > lastScrollValue && sv > 220 ) {  // Check if lastScrollValue is less than current scroll value (sv)
        setTimeout(function(){ 
        $('.slidingNav').css('transform', 'translateY(0px)');
        }, 500);

        if ( $('.slidingNav').length === 0) {   // Check there is no navSliders befor making another
            console.log('There is no slidingNav!');
            createDiv();
            setTimeout(function(){ 
                $('header').clone().appendTo('.slidingNav');
                $('.main-nav').clone().appendTo('.slidingNav');
                console.log('cloned the shits');
            }, 1000);
        }
        // console.log('scrolling down...');
    } else {
        // console.log('scrolling up!!!');
        setTimeout(function(){ 
        $('.slidingNav').css('transform', 'translateY(210px)');
        }, 500);

    };

    if ( sv === 0 ) {
        $('.slidingNav').remove();
    };
    lastScrollValue = sv;
});





