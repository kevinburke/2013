jQuery(document).ready(function($) {
    if (jQuery('.accordion')[0]) {
        jQuery('.accordion').find('h3').click(function(e) {
            e.preventDefault();
            var h3 = jQuery(this);
            h3.next().slideToggle('slow', function() {
                h3.siblings('ul, iframe').toggleClass('hidden-phone');
            }).css('zoom', '1');
        } );
    }

});

var checkTwitterFrame = function(callback) {
    if ($('.twitter-timeline-rendered').length > 0) {
        callback();
    } else {
        setTimeout(function() {
            checkTwitterFrame(callback);
        }, 100);
    }
};

checkTwitterFrame(function() {
    $('.twitter-timeline-rendered').addClass('hidden-phone');
});

var options = {
    "url": "css/twitter.css"
};
CustomizeTwitterWidget(options);
