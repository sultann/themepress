;(function ($) {
    $(document).ready(function () {
        'use strict';
        var navbarHeight = $('.navbar-fixed-top').outerHeight();
        //margin adjust
        $('.wrapper-navbar').next('div').css('margin-top', navbarHeight+'px');

        //form validation
        $('#commentform').on('submit', function (e) {
            // e.preventDefault();
        });
    });
})(jQuery);