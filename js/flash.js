
const flash = $(".message-area");

// function flashClose(e) {
//     e.preventDefault();
//     flash.css("display", "none");
// };

flash.on("click", function (e) {
    e.preventDefault();
    flash.css("display", "none");
});