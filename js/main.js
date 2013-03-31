jQuery(document).ready(function($) {
    if (jQuery('.accordion')[0]) {
        jQuery('.accordion').find('h3').click(function(e) {
            e.preventDefault();
            var h3 = jQuery(this);
            h3.next().slideToggle('slow', function() {
                h3.siblings('ul').toggleClass('hidden-phone');
            }).css('zoom', '1');
        } );
    }
} );
