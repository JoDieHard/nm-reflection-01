
const website = $('.website');   // Webiste Container { Event Target – Takes Class 'active' }
const menuBtn = $('#menu-btn');  // Menu Button {Event Bubbles Up}
const homepage = $('.homepage'); // Homepage {Event Handler}

    homepage.on('click', function (event) {
        // If Event Target is menuBtn AND Website does NOT have the class 'active'
        if  ( event.target.classList.contains('headerBtn') && !website.hasClass('active') ) {   
            website.addClass('active');
            $( 'html' ).css('overflow', 'hidden');

        // Else If Event Target is website AND website does have the class 'active'
        } else if ( event.target.classList.contains('website') && website.hasClass('active') ) {
            website.removeClass('active');
            $( 'html' ).css('overflow', 'auto');
        };
    });
