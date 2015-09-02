/**
 * ./website/static/Wireframe/js/custom.pnav.js
 * Custom overlay menu
 */

function pnav_height_adjust()
{
    if( $( '.pnav' ).length > 0 )
    {
        var windowHeight    = $( window ).outerHeight();
        var pnavTop         = $( '.pnav' ).css( 'top' );
        var pnavHeight      = windowHeight - ( 1 * pnavTop.replace('px','') );
        $( '.pnav, .pnav-menu' ).css( 'min-height', pnavHeight );
    }
}

function pnav_checkbox_sync()
{
    if( $( '.pnav-menu' ).length > 0 )
    {
        $( '.pnav-menu' ).each(function(index, value ){
            $( this ).find( 'button' ).each(function(index, value){
                var icon            = $( this ).find( 'i.fa' );
                var checkbox        = $( this ).find( 'input[type="checkbox"]' );
                var checkbox_name   = checkbox.attr( 'name' );
                var checkbox_state  = checkbox.prop( 'checked' );
                if( checkbox_state )
                {
                    icon.removeClass( 'fa-square-o' );
                    icon.addClass( 'fa-check-square-o' );
                }
            });
        });
    }
}

$(function(){

    pnav_height_adjust();
    pnav_checkbox_sync();

    $( 'a.pnav-close' ).click(function(e){
        e.preventDefault();
        var href = $( this ).attr( 'href' );
        if( $( '.pnav' + href ).length > 0 )
        {
            $( '.pnav' + href ).stop().fadeOut( 'fast',function(){
                $( this ).removeClass( 'active' );
            });
        }
        return false;
    });

    $( 'a.pnav-trigger' ).each(function(index, value){
        $( this ).click(function(e){
            e.preventDefault();
            var href = $( this ).attr( 'href' );
            if( $( '.pnav' + href ).length > 0 )
            {
                $( '.pnav' + href ).stop().fadeIn( 'fast', function(){
                    $( this ).addClass( 'active' );
                });
            }
            return false;
        });
    });

    if( $( '.pnav-menu' ).length > 0 )
    {
        $( '.pnav-menu' ).each(function(index, value){

            /* Switching between menus */
            $( this ).find( 'a' ).click(function(e){
                e.preventDefault();
                var href = $( this ).attr( 'href' );
                if( $( '.pnav-menu' + href ).length > 0 )
                {
                    $( '.pnav-menu' + href ).stop().fadeIn( 'fast', function(){
                        $( this ).addClass( 'active' );
                        $( '.pnav-menu.active:not(' + href + ')' ).stop().fadeOut( 'fast', function(){
                            $( this ).removeClass( 'active' );
                        });
                    });
                }
                return false;
            });

            /* Dealing with checkboxes */
            $( this ).find( 'button' ).click(function(e){
                e.preventDefault();
                var icon            = $( this ).find( 'i.fa' );
                var checkbox        = $( this ).find( 'input[type="checkbox"]' );
                var checkbox_name   = checkbox.attr( 'name' );
                var checkbox_state  = checkbox.prop( 'checked' );
                var checkbox_value  = checkbox.val();
                if( checkbox_value != "all" )
                {
                    if( !checkbox_state )
                    {
                        checkbox.prop( 'checked', true );
                        icon.removeClass( 'fa-square-o' );
                        icon.addClass( 'fa-check-square-o' );
                    }
                    else
                    {
                        checkbox.prop( 'checked', false );
                        icon.removeClass( 'fa-check-square-o' );
                        icon.addClass( 'fa-square-o' );
                    }
                }
                else
                {
                    // Brace yourself, we are going to make those checkboxes checked...
                    if( !checkbox_state )
                    {
                        checkbox.prop( 'checked', true );
                        $( this ).parent().parent().find( 'input[name="' + checkbox_name + '"]' ).prop( 'checked', true );
                        $( this ).parent().parent().find( 'i.fa' ).removeClass( 'fa-square-o' );
                        $( this ).parent().parent().find( 'i.fa' ).addClass( 'fa-check-square-o' );
                    }
                    else
                    {
                        checkbox.prop( 'checked', false );
                        $( this ).parent().parent().find( 'input[name="' + checkbox_name + '"]' ).prop( 'checked', false );
                        $( this ).parent().parent().find( 'i.fa' ).removeClass( 'fa-check-square-o' );
                        $( this ).parent().parent().find( 'i.fa' ).addClass( 'fa-square-o' );
                    }
                }
                return false;
            });

        });

    }

});

$(window).resize(function(){
    pnav_height_adjust();
});
