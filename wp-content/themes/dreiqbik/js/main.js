/******************************************************************
	CUSTOM.JS

******************************************************************/


(function($) {


    /******************************************************************
        VARS
    ******************************************************************/

    // your code here


    /******************************************************************
        FUNCTIONS
    ******************************************************************/

    // your code here

})( jQuery );

/******************************************************************
	EQUAL_HEIGHT.JS

******************************************************************/

(function($) {

    /******************************************************************
    	RESIZE_ON_CSS_BREAKPOINTS
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

    var container = $('.container');

    if(!$(container).hasClass('h-container--dom-rdy')) {
        // set card height on document.ready for fast results
        equalHeight('.h-equal-01', 961);
        equalHeight('.h-equal-02', 481);
    } else {
        // BUGFIX: set height after fully loading the DOM including images
        $(window).load(function() {
            equalHeight('.h-equal-01', 961);
            equalHeight('.h-equal-02', 481);
        });
    }

    // set card height on resize
    $(window).resize(function() {
        equalHeight('.h-equal-01', 961);
        equalHeight('.h-equal-02', 481);
    });


    /******************************************************************
    	FUNCTION
    ******************************************************************/

    function equalHeight(
        equalHeightItem,                // set itemGroup-class for equalHeight     ['.class']
        breakpoinCSStWidth              // set breakpoint for using equalHeight    [INT]
    ) {

        // BUGFIX: avoid overflowing Content on resize
        $(equalHeightItem).css('height', 'auto');

        if (breakpointJSWidth >= breakpoinCSStWidth) {
            // Cache the highest
            var highestBox = 0;

            // Select and loop the elements you want to equalise
            $(equalHeightItem).each(function(){

                // If this box is higher than the cached highest then store it
                if($(this).height() > highestBox) {
                    highestBox = $(this).height();
                }
            });
            // Set the height of all those children to which was highest
            $(equalHeightItem).height(highestBox);

        } // end IF
    } // end equalHeight

})( jQuery );

/******************************************************************
	FORM.JS

******************************************************************/


(function($) {


    /******************************************************************
        RESET_AFTER_SENDING
    ******************************************************************/

    // remove label classes and return to initial state after form was sent successfully
    $(document).on('mailsent.wpcf7', function () {
        returnToInitialState();
    });


    /******************************************************************
        VARS
    ******************************************************************/

    // get all input fields and trigger float labels on focus
    var $formInputs = $('.m_form__input');
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
        if ( $activeInput.val() && $activeInput.val().length ) {
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

})( jQuery );

/******************************************************************
	NAV_BURGER.JS

******************************************************************/

(function($) {

    /******************************************************************
    	RESIZE_ON_CSS_BREAKPOINTS
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

    var $siteNavigation = $('.n_main');
    var $siteNavigationBurger = $('.n_main-burger');

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
