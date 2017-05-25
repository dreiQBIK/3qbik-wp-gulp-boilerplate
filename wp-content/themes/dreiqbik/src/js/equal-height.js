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
        //set card height on document.ready for fast results
        equalHeight('.h-equal-01', 961);
        equalHeight('.h-equal-02', 481);
    } else {
        //BUGFIX: set height after fully loading the DOM including images
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
