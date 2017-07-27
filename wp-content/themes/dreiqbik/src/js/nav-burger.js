/******************************************************************
	NAV_BURGER.JS

******************************************************************/

(function($) {

    /******************************************************************
    	FIRE_RESIZE_ON_CSS_BREAKPOINTS
    ******************************************************************/

    // get variables for setting js breakpoints equal to css breakpoints
    var breakpointJS = $('#h-breakpoint-js');
    var breakpointJSWidth = breakpointJS.width();
    // set js breakpoints equal to css breakpoints
    $(window).resize(function() {
        breakpointJSWidth = breakpointJS.width();
    });


    /******************************************************************
    	SETTINGS
    ******************************************************************/

    var breakpoinCSStWidth = 961;


    /******************************************************************
    	NAV_BURGER
    ******************************************************************/

    var $siteNavigation = $('.n_nav');
    var $siteNavigationBurger = $('.n_nav-burger');

    $siteNavigationBurger.on('click', function() {
        $siteNavigation.slideToggle('fast');
        $siteNavigationBurger.toggleClass('active');
    });

    // if not a mobile device
    if( !/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        $(window).resize(function() {

            if (breakpointJSWidth >= breakpoinCSStWidth) {
                $siteNavigation.css('display', 'block');
                $siteNavigationBurger.css('display', 'none');
            } else {
                $siteNavigation.css('display', 'none');
                $siteNavigationBurger.css('display', 'block');
            }
        });
    }

})( jQuery );
