/******************************************************************
    _GLOBAL.JS

        > FUNCTIONS
        > PUBLIC_FUNCTIONS

******************************************************************/


var global = (function ($) {


    /******************************************************************
        FUNCTIONS
    ******************************************************************/

    function debounce(func, wait, immediate) {
        var timeout;
        return function () {
            var context = this,
                args = arguments;
            var later = function () {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };
            var callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
        };
    }


    /******************************************************************
        PUBLIC_FUNCTIONS
    ******************************************************************/

    return {
        debounce: debounce()
    };

})(jQuery);

/******************************************************************
    M_FORM.JS

        > VARS
        > EVENTS
        > FUNCTIONS
        > PUBLIC_FUNCTIONS

******************************************************************/


var mForm = (function ($) {


    /******************************************************************
        VARS
    ******************************************************************/

    // get all input fields and trigger float labels on focus
    var $formInputs = $('.m_form__input');


    /******************************************************************
        EVENTS
    ******************************************************************/

    // remove label classes and return to initial state after form was sent successfully
    $(document).on('mailsent.wpcf7', function () {
        returnToInitialState();
    });

    $formInputs.on('focusin', makeLabelActive);
    $formInputs.on('focusout', makeLabelInactive);


    /******************************************************************
        FUNCTIONS
    ******************************************************************/

    function makeLabelActive() {

        var $activeInput = $(this);
        var $activeFormLabel = $activeInput.parents('p').find('.m_form__label');

        // add active state
        $activeFormLabel.addClass('active');
    }

    function makeLabelInactive() {

        var $activeInput = $(this);
        var $activeFormLabel = $activeInput.parents('p').find('.m_form__label');

        // remove active state
        $activeFormLabel.removeClass('active');

        // check if field isn't empty and add done state
        if ($activeInput.val() && $activeInput.val().length) {
            $activeFormLabel.addClass('done');

            // return to initial state if field is empty
        } else {
            $activeFormLabel.removeClass('done');
        }
    }

    function returnToInitialState() {
        var $formLabels = $('.m_form__label');
        $formLabels.removeClass('active done');
    }


    /******************************************************************
        PUBLIC_FUNCTIONS
    ******************************************************************/

    return {
        // your code here
    };

})(jQuery);

/******************************************************************
    N_MAIN.JS

        > VARS
        > EVENTS
        > FUNCTIONS
        > PUBLIC_FUNCTIONS

******************************************************************/


var nMain = (function ($) {


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
    $(window).resize(function () {

        // set breakpoint
        breakpointJSWidth = breakpointJS.width();

        // check for mobile device and hide/show nav
        if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {

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
        showNav: showNav(),
        hideNav: hideNav()
    };

})(jQuery);

/******************************************************************
    _EXAMPLE.JS

        > VARS
        > EVENTS
        > FUNCTIONS
        > PUBLIC_FUNCTIONS

        @USAGE
        e.g. nMain.showNav();
        e.g. $(window).on('scroll', global.debounce(nMain.hideNav, 1000));

******************************************************************/


var example = (function ($) {


    /******************************************************************
        VARS
    ******************************************************************/

    // your code here


    /******************************************************************
        EVENTS
    ******************************************************************/

    // your code here


    /******************************************************************
        FUNCTIONS
    ******************************************************************/

    // your code here


    /******************************************************************
        PUBLIC_FUNCTIONS
    ******************************************************************/

    return {
        // your code here
    };

})(jQuery);
