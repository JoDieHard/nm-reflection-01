
const header = $('header');
const nav = $('.main-nav');
const slidingNav = $('.slidingNav');
const createDiv = function () {  $('.homepage').prepend($('<div>', {"class": "slidingNav"})); }; // This Function creates an empty Div

createDiv();
setTimeout(function(){ 
    $('header').clone().appendTo('.slidingNav');
    $('.main-nav').clone().appendTo('.slidingNav');
    console.log('cloned the shits');
 }, 1000);


