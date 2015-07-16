(function($){
    "use strict";
    $(document).ready(function ($) {

    /*-----------------------------------------------------------------*/
    /* Sticky Header
    /* Override to cope for extra search row added by child theme
    /*-----------------------------------------------------------------*/

    if( $('body').hasClass('sticky-header') ){

      $(window).scroll(function(){

        var $window = $(this);

        if( $window.width() > 600 ){    // work only above 600px screen size
            var $body = $('body');
            var $header = $('#header');

            /* get the admin bar height */
            var adminBarHeight = 0;
            if( $body.hasClass('admin-bar') ){
                adminBarHeight = $('#wpadminbar').outerHeight();
            }

            /* header, header top bar and search top bar heights */
            var headerTopBarHeight = $('.header-top').outerHeight();
            var searchTopBarHeight = $('.topbar-search').outerHeight();
            var headerHeight = $header.outerHeight();

            if ( $window.scrollTop() > (headerTopBarHeight + searchTopBarHeight)) {
                $header.addClass('stick');
                $header.css('top', adminBarHeight);
                $body.css( 'padding-top', headerHeight );
            }else{
                $header.removeClass('stick');
                $header.css('top', 'auto');
                $body.css( 'padding-top', 0);
            }
        }

      });
    }

});

})(jQuery);
