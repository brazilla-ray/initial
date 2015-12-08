/* All the JavaScript for the theme.
*/

jQuery(document).ready(function($) {
    $('#nav-tabs').idTabs("!click"); // For the site navigation.

    $('.plates').cycle({ // For slideshows.
        slides:'> div',
        fx:'fade',
        speed: 1000,
        timeout: 0,
        prev:'.prev',
        next:'.next',
        swipe:"true",
        autoHeight:"container",
    });
});
