/**
 *
 *
 * @package hantus
 *
 * @author    Nayra Theme
 */
var hantus_customize_tabs_focus = function ( $ ) {
    'use strict';
    $( function () {
        var customize = wp.customize;
        $( '.customize-partial-edit-shortcut' ).live( 'DOMNodeInserted', function () {
            $( this ).on( 'click', function() {
                var controlId = $( this ).attr( 'class' );
                var tabToActivate = '';

                if ( controlId.indexOf( 'widget' ) !== -1 ) {
                    tabToActivate = $( '.cleverfox-customizer-tab>.widgets' );
                } else {
                    var controlFinalId = controlId.split( ' ' ).pop().split( '-' ).pop();
                    tabToActivate = $( '.cleverfox-customizer-tab>.' + controlFinalId );
                }

                customize.preview.send( 'tab-previewer-edit', tabToActivate );
            } );
        } );
    } );
};

hantus_customize_tabs_focus( jQuery );