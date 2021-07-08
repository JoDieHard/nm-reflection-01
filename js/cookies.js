// const e = require("express");

/**
 * Cookies need to have a variable
 * Local Storage needs to set a variable to true when button is clicked
 * If cookies aren't accepted then the cookies will be displayed
 * 
 *      1. Check IF cookies is accepted.
        2. ELSE IF cookies aren’t accepted then display cookie modal.
        3. Create an event handler on the cookies modal “Accept” button.
        4. When clicked, Use local storage to keep track of when the user has accepted cookies:
	             localStorage.setItem(“cookies”, “accepted”);

* May have to create a variable for cookies like:
	let cookiesCheck = localStorage.getItem(“cookies“);
 */
    let cookiesCheck = localStorage.getItem("cookies");

    let fcSetting;
    let paSetting;


    $( window ).on("load", function() {

        if ( cookiesCheck === "true") {
            // console.log('Cookies are allowed!');
            $('#cookie-app').css("display", "none");
            $('#cookie-app').css("opacity", "0");

            localStorage.setItem('fcSetting', fcSetting);
            localStorage.setItem('paSetting', paSetting);

        } else { 
            // console.log('cookies haven't been accepted');
            $('#cookie-app').css("display", "flex");
            $('#cookie-app').css("opacity", "1");
            $( 'html' ).css('overflow', 'hidden');      // Disable scrolling

            // Disable Advanced Cookie Settings
            localStorage.setItem('fcSetting', "disabled");
            localStorage.setItem('paSetting', "disabled");
        }
    });

    // Clicked COOKIES ACCEPT Buttton
    $('.cookies-accept-btn').on("click", function () {
        localStorage.setItem('cookies', true);
        localStorage.setItem('fcSetting', fcSetting)
        localStorage.setItem('paSetting', paSetting)
        $('#cookie-app').css('opacity', '0');
        $('#cookie-app').css("display", "none");
        $( 'html' ).css('overflow', 'auto');      // Enable scrolling
    });

    // Clicked COOKIES SETTINGS Button
    $('#cookies-settings').on("click", function () {
        $('#cookieSettings').css('display', 'flex');
    });

    // Clicked the SETTINGS CANCEL Button
    $('#cancelSettings').on("click", function () {
        $('#cookieSettings').css('display', 'none');
    });

    // Clicked the DETAILED PREFERENCES Button
    $('.table-btn').on("click", function () {
        if ( $('.table').css('display') == 'none' ) {
        $('.table').css('display', 'flex');
        $('.settings-container h3').css('marginTop', '850px')
        } else {
            $('.table').css('display', 'none');
            $('.settings-container h3').css('marginTop', '320px')
        }
    });


    // ENABLE / DISABLE buttons -----------------------------

    //Clicked a Toggle Button 
    $('.toggle-btn').on('click', function (event) {

        // Checks which group of buttons was clicked 
        const checkParent = function () {
    
            if ( currentButton.parent().is('#performanceAnalytics') ) {
                // console.log('A Performance Analytics Button was Clicked.')

                // Checks what button was clicked so it can set values
                if ( currentButton.hasClass('enable-btn') ) {
                    paSetting = "enabled";
                } else if ( currentButton.hasClass('disable-btn') ) {
                    paSetting = "disabled";
                }

            } else if ( currentButton.parent().is('#functionalCookies') ) {
                // console.log('A Functional Cookies Button was Clicked.')

                // Checks what button was clicked so it can set values
                if ( currentButton.hasClass('enable-btn') ) {
                    fcSetting = "enabled";
                } else if ( currentButton.hasClass('disable-btn') ) {
                    fcSetting = "disabled";
                }
            };
        } //-------------------------------------------------------------------

        let currentButton = $(event.target);

        if ( currentButton.hasClass('enable-btn') ) {
            if (currentButton.hasClass('active-setting')) {
                return;
            } else {
                // console.log( currentButton + 'Not active' );
                $( this ).addClass('active-setting');
                $( this ).siblings().removeClass('active-setting');
                checkParent();
            }

        } else if ( currentButton.hasClass('disable-btn') ) {

            if (currentButton.hasClass('active-setting')) {
                // console.log( currentButton + ' setting is active');
            } else {
                // console.log( currentButton + 'Not active' );
                $( this ).addClass('active-setting');
                $( this ).siblings().removeClass('active-setting');
                checkParent();
            }
        }
    });

