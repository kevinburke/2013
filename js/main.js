///DOC READY FUNCTIONS
jQuery( document ).ready(function( $ ) {
    if ( jQuery( '.accordion' )[0] ){
        jQuery( '.accordion' ).find( 'h3' ).click( function( e ){
            e.preventDefault();
            jQuery( this ).next().slideToggle( 'fast' ).css( 'zoom', '1' );
            jQuery( this ).parent( 'li' ).toggleClass( 'collapse' );
        } );
        jQuery( '.accordion > li' ).each( function( $ ){
            if ( !jQuery( this ).hasClass( 'extended' ) ){
                jQuery( this ).find( 'ul' ).slideUp( 'fast' ).css( 'zoom', '1' );
                jQuery( this ).toggleClass( 'collapse' );
            }
        } );
    }
} );
