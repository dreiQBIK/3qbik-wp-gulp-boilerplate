/******************************************************************
	NAV_BURGER.JS

******************************************************************/

(function($) {

    // get variables for setting js breakpoints equal to css breakpoints
    var breakpointJS = $('#h-breakpoint-js');
    var breakpointJSWidth = breakpointJS.width();
    // set js breakpoints equal to css breakpoints
    $(window).resize(function() {
        breakpointJSWidth = breakpointJS.width();
    });


    var $siteNavigation = $('#site-navigation');
    var $siteNavigationBurger = $('#nav-burger');

    $siteNavigationBurger.on('click', function() {
        $siteNavigation.slideToggle('fast');
        $siteNavigationBurger.toggleClass('active');
    });

    // if not a mobile device
    if( !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        $(window).resize(function() {

            if (breakpointJSWidth >= 1361) {
                $siteNavigation.css('display', 'block');
                $siteNavigationBurger.css('display', 'none');
            } else {
                $siteNavigation.css('display', 'none');
                $siteNavigationBurger.css('display', 'block');
            }
        });
    }

})( jQuery );
