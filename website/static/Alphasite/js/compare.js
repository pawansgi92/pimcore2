/**
 * compare.js
 * JavaScripts for comparing products
 */

$(function(){

    var compare_count = $( '.compare-items > a.compare-item.active' ).length;
    var compare_items = [];

    /* Require Bootstrap Tooltip */
    bootstrapTooltipInit();

    if( $( '.compare-items' ).length > 0 )
    {
        $( '.compare-items > a.compare-item' ).each(function(index, value){
            $( this ).click(function(e){
                e.preventDefault();
                if( $( this ).hasClass( 'active' ) )
                {
                    var product_id = $( this ).attr( 'data-product-id' );
                    var btn_compare=  $( '.btn-compare[data-product-id="' + product_id + '"]' );
                    compareButtonReset( btn_compare );
                    compareBarItemReset( $( this ) );
                    if( compare_count > 0 )
                    {
                        compare_count--;
                        compareBarDetectCounter( compare_count );
                    }
                }
                return false;
            });
        });
    }

    if( $( '.btn-compare' ).length > 0 )
    {
        $( 'body' ).on( 'click', 'a.btn-compare', function(e){
            e.preventDefault();
            var product_id      = $( this ).attr( 'data-product-id' );
            var product_name    = $( this ).attr( 'data-product-name' );
            if( $( this ).hasClass( 'active' ) )
            {
                if( compare_count > 0 )
                {
                    var compareItem = $( '.compare-items > .compare-item[data-product-id="' + product_id + '"]' );
                    compare_count--;
                    compareBarDetectCounter( compare_count );
                    compareButtonReset( $( this ) );
                    compareBarItemReset( compareItem );
                }

            }
            else
            {
                if( compare_count < 3 )
                {
                    compare_count++;
                    compareBarDetectCounter( compare_count );
                    compareButtonCheck( $( this ) );
                    var compareItem = $( '.compare-items > .compare-item:nth-child(' + compare_count + ')' );
                    compareBarAdd( compareItem, product_id, product_name );
                }
            }
            return false;
        });
    }

});

function bootstrapTooltipInit()
{
    if( $( '[data-toggle="tooltip"]' ).length > 0 )
    {
        $('[data-toggle="tooltip"]').tooltip();
    }
}

function compareButtonDetectCounter( int )
{
    if( int >= 2 )
    {
        $( '.compare-bar .btn-compare' ).removeClass( 'disabled' );
    }
    else
    {
        $( '.compare-bar .btn-compare' ).addClass( 'disabled' );
    }
}

function compareBarDetectCounter( int )
{
    var msg = $( '.compare-bar p.message' );
    compareButtonDetectCounter( int );
    if( int > 0 )
    {
        if( !$( '.compare-bar' ).hasClass( 'active' ) )
        {
            $( '.compare-bar' ).addClass( 'active' );
        }

        if( int == 1 )
        {
            msg.html( 'Choose <span>1</span> or <span>2</span> more products to compare' );
        }
        else if( int == 2 )
        {
            msg.html( 'Compare now or choose <span>1</span> more products to compare' );
        }
        else if( int == 3 )
        {
            msg.html( 'You can compare those products now' );
        }
    }
    else
    {
        msg.html( 'Choose <span>2</span> or <span>3</span> Products to compare&hellip;' );
        $( '.compare-bar' ).removeClass( 'active' );
    }
}

function compareBarItemReset( elem )
{
    elem.removeClass( 'active' );
    elem.attr( 'title', '' );
    elem.attr( 'data-original-title', '' );
    elem.attr( 'data-product-id', 0 );
    elem.find( 'i.fa' ).removeClass( 'fa-mobile' );
    elem.find( 'i.fa' ).addClass( 'fa-plus' );
}

function compareButtonReset( elem )
{
    elem.removeClass( 'active' );
    elem.find( 'i.fa' ).addClass( 'fa-square-o' );
    elem.find( 'i.fa' ).removeClass( 'fa-check-square' );
    elem.find( 'span' ).text( 'Click to Compare' );
}

function compareButtonCheck( elem )
{
    elem.addClass( 'active' );
    elem.find( 'i.fa' ).removeClass( 'fa-square-o' );
    elem.find( 'i.fa' ).addClass( 'fa-check-square' );
    elem.find( 'span' ).text( 'Selected' );
}

function compareBarAdd( elem, product_id, product_name )
{
    elem.addClass( 'active' );
    elem.attr( 'title', product_name );
    elem.attr( 'data-original-title', product_name );
    elem.attr( 'data-product-id', product_id );
    elem.find( 'i.fa' ).removeClass( 'fa-plus' );
    elem.find( 'i.fa' ).addClass( 'fa-mobile' );
}
