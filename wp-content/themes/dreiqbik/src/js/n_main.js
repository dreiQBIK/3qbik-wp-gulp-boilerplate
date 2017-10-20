/******************************************************************
	N_MAIN.JS

        > VARS
        > EVENTS
        > FUNCTIONS
        > PUBLIC_FUNCTIONS

******************************************************************/


var nMain = (function($) {


    /******************************************************************
        VARS
    ******************************************************************/

    // get variables for setting js breakpoints equal to css breakpoints
    var breakpointJS = $('#h-breakpoint-js');
    var breakpointJSWidth = breakpointJS.width();
    var breakpoinCSStWidth = 961;

    // cache DOM elements
    var $siteNavigation = $('.n_main');
    var $siteNavigationBurger = $('.n_main-burger');


    /******************************************************************
        EVENTS
    ******************************************************************/

    // set js breakpoints equal to css breakpoints
    $(window).resize(function() {

        // set breakpoint
        breakpointJSWidth = breakpointJS.width();

        // check for mobile device and hide/show nav
        if( !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

            if (breakpointJSWidth >= breakpoinCSStWidth) {
                showNav();

            } else {
                hideNav();
            }
        }
    });

    // toggle nav on click on burger
    $siteNavigationBurger.on('click', toggleNav);


    /******************************************************************
        FUNCTIONS
    ******************************************************************/

    function toggleNav() {
        $siteNavigation.slideToggle('fast');
        $siteNavigationBurger.toggleClass('active');
    }

    function showNav() {
        $siteNavigation.show();
        $siteNavigationBurger.hide();
    }

    function hideNav() {
        $siteNavigation.hide();
        $siteNavigationBurger.show();
    }


    /******************************************************************
        PUBLIC_FUNCTIONS
    ******************************************************************/

    return {
        showNav: showNav,
        hideNav: hideNav
    };

})(jQuery);
