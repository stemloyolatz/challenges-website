'use-scrict';

/* Fix the footer */
$(document).ready(function () {
    'use strict';
    var docHeight = $(window).height();
    var footerHeight = $('#footer').height();
    var footerTop = $('#footer').position().top + footerHeight;

    if (footerTop < docHeight) {
        $('#footer').css('margin-top', 0 + (docHeight - footerTop) + 'px');
    }
});