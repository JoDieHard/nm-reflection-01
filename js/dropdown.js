
const dropdown = $('.dropdown');
const contents = $('.dropdown-contents');

dropdown.on("click", function(e){
    e.preventDefault();

    if(contents.hasClass("active")){
        contents.removeClass("active");
        dropdown.removeClass("active");
        console.log('The Dropdown is closed!');
    } else {
        contents.addClass("active");
        dropdown.addClass("active");
        console.log('The Dropdown is open!');
    }
});