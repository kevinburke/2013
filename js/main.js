jQuery(document).ready(function($) {
    if (jQuery('.accordion')[0]) {
        jQuery('.accordion').find('h3').click(function(e) {
            e.preventDefault();
            if (jQuery(this).siblings('.accordion-items').is(':visible')) {
                // wide view enabled. return
            }
            jQuery(this).next().slideToggle('fast').css('zoom', '1');
            jQuery(this).siblings('ul').toggleClass('hidden-phone');
        } );
    }
} );
