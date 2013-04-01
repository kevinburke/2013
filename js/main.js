!function(d,s,id){
    var js,fjs=d.getElementsByTagName(s)[0]; if(!d.getElementById(id)){
        js=d.createElement(s);js.id=id; js.src="//platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js,fjs);
    }
}(document,"script","twitter-wjs");

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
    if (jQuery('.twitter-timeline-rendered').length > 0) {
        callback();
    } else {
        setTimeout(function() {
            checkTwitterFrame(callback);
        }, 100);
    }
};

checkTwitterFrame(function() {
    jQuery('.twitter-timeline-rendered').addClass('hidden-phone');
});

var options = {
    "url": "css/twitter.css"
};
CustomizeTwitterWidget(options);

var _gaq=[['_setAccount','UA-566397-2'],['_trackPageview']];
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
s.parentNode.insertBefore(g,s)}(document,'script'));
