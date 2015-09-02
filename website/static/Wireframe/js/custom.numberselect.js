/**
 * ./website/static/Wireframe/js/custom.numberselect.js
 * Custom scripts for number selection dropdown
 */

$(function(){

    console.log( 'custom.numberselect.js is loaded' );

    if( $( '.number-boxes > .number-box' ).length > 0 )
    {
        $( '.number-boxes > .number-box' ).each(function( index, value ){
            var el = $( this );                         // 'el' stands for 'element'
            var tr = $( this ).find( 'a.nbc-trigger' ); // 'tr' stands for 'trigger'
            var cl = $( this ).find( 'a.nbc-close' );   // 'cl' stands for 'close'
            tr.click(function(e){
                e.preventDefault();
                var href = $( this ).attr( 'href' );
                if( $( '.number-box' + href + ' > .number-box--content' ).length > 0 )
                {
                    var nbc = $( '.number-box' + href + ' > .number-box--content' );
                    if( nbc.hasClass( 'active' ) )
                    {
                        nbc.stop().slideUp( 'fast', function(){
                            $( this ).removeClass( 'active' );
                        });
                    }
                    else
                    {
                        nbc.stop().slideDown( 'fast', function(){
                            $( this ).addClass( 'active' );
                        });
                    }
                }
                console.log( 'The trigger has been clicked, run for your life!!' );
                return false;
            });

            cl.click(function(e){
                e.preventDefault();
                var href = $( this ).attr( 'href' );
                if( $( '.number-box' + href + ' > .number-box--content' ).length > 0 )
                {
                    var nbc = $( '.number-box' + href + ' > .number-box--content' );
                    if( nbc.hasClass( 'active' ) )
                    {
                        nbc.stop().slideUp( 'fast', function(){
                            $( this ).removeClass( 'active' );
                        });
                    }
                }
                return false;
            });

        });
    }

    /* Number box tabs */
    if( $( '.number-box-tab' ).length > 0 )
    {
        $( '.number-box-tab' ).each(function(index, value){
            var nbtHead = $( this ).find( '.number-box-tab--head' );
            var nbtContent = $( this ).find( '.number-box-tab--content' );
            var nbtSwitch = nbtHead.find( 'input[type="radio"]' );
            nbtSwitch.on( 'change', function(e){
                console.log( e );
                if( $( this ).is( ':checked' ) )
                {
                    console.log( 'checked' );
                    $( '.number-box-tab--content.active' ).stop().fadeOut( 'fast', function(){
                        $( this ).removeClass( 'active' );
                    });
                    nbtContent.stop().fadeIn( 'fast', function(){
                        $( this ).addClass( 'active' );
                    });
                }
            });
        });
    }

});
