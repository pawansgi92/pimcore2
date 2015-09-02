<?php include('header-with-menu.php'); ?>

    <div class="icon-cart">
        <a href="cart.php"><img src="img/icon-cart.png"></a>
    </div>

    <div class="tab-content header-with-menu">
        <div id="mobile" class="tab-pane fade in active">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-xs-6">
                        <a href="#filterby" class="btn btn-block pnav-trigger">Filter By<i class="fa fa-caret-down"></i></a>
                    </div><!--/ .col-xs-6 -->
                    <div class="col-xs-6">
                        <a href="#sortby" class="btn btn-block pnav-trigger">Sort By<i class="fa fa-caret-down"></i></a>
                    </div><!--/ .col-xs-6 -->
                </div><!--/ .row -->

                <div class="row">
                    <div class="col-xs-12 scroll-mobile">
                        <?php for($i = 0; $i < 3; $i++) { ?>
                        <div class="product" data-product-id="<?php echo $i; ?>" data-product-name="Apple iPhone 6">
                            <img src="http://1.bp.blogspot.com/-Sjwt_o7iEhc/UyTCwawobmI/AAAAAAAAB68/4gyhmgo7E4g/s1600/iPhone-Air-Price.jpg">
                            <div class="title-product">
                                <p><b><font class="title">Apple Iphone 6</font></b><br>from <b><font class="title">RM 100</font></b></p>
                            </div>
                            <div class="btn-product">
                                <button><a href="view-device.php">View</a></button>
                                <button class="btn-compare" data-product-id="<?php echo $i; ?>">Compare</button>
                            </div>
                        </div>
                        <div class="product">
                            <img src="img/simcard.jpg">
                            <div class="title-product">
                                <p><b><font class="title">SIM Card Plan</font></b><br>from <b><font class="title">RM 100</font></b></p>
                            </div>
                            <div class="btn-product">
                                <button>View</button>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="row">
                            <a href="autoload-product-mobile.php" class="loadmore"><i class="fa fa-arrow-circle-down"> <b>SCROLL DOWN TO LOAD MORE</b></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="internet" class="tab-pane fade">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xs-6">
                        <a href="#filterby" class="btn btn-block pnav-trigger">Filter By<i class="fa fa-caret-down"></i></a>
                    </div><!--/ .col-xs-6 -->
                    <div class="col-xs-6">
                        <a href="#sortby" class="btn btn-block pnav-trigger">Sort By<i class="fa fa-caret-down"></i></a>
                    </div><!--/ .col-xs-6 -->
                </div><!--/ .row -->

                <div class="row">
                    <div class="col-md-12 scroll-internet">
                        <?php for($i = 0; $i < 2; $i++) { ?>
                        <div class="product">
                            <img src="img/product.jpg">
                            <div class="title-product">
                                <p>
                                    <b><font class="title">Apple Iphone 6</font></b><br>
                                    from
                                    <b><font class="title">RM 100</font></b>
                                </p>
                            </div>
                            <div class="btn-product addcart">
                                <button><a href="add-cart.php">ADD TO CART</a></button>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="row">
                            <a href="autoload-product-internet.php" class="loadmore"><i class="fa fa-arrow-circle-down"> <b>SCROLL DOWN TO LOAD MORE</b></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /#wrapper -->

    <!--/ OVERLAY MENUS -->

    <section class="pnav" id="filterby">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <form role="form" method="post" action="">
                        <ul class="pnav-menu active" id="pnav-main">
                            <li><a href="#filterby" class="pnav-close">Filter By <i class="fa fa-times"></i></a></li>
                            <li><a href="#pnav-brands">Brands <i class="fa fa-caret-right"></i></a></li>
                            <li><a href="#pnav-feature">Feature <i class="fa fa-caret-right"></i></a></li>
                            <li><a href="#pnav-color">Color <i class="fa fa-caret-right"></i></a></li>
                            <li><a href="#pnav-os">Operating System <i class="fa fa-caret-right"></i></a></li>
                        </ul><!--/ .pnav-menu -->
                        <ul class="pnav-menu" id="pnav-brands">
                            <li><a href="#pnav-main"><i class="fa fa-caret-left"></i> Brands</a></li>
                            <li>
                                <button type="button">
                                    <i class="fa fa-square-o"></i>
                                    <input type="checkbox" name="brands" value="all">
                                    <label>Select All</label>
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <i class="fa fa-square-o"></i>
                                    <input type="checkbox" name="brands" value="Apple">
                                    <label>Apple</label>
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <i class="fa fa-square-o"></i>
                                    <input type="checkbox" name="brands" value="Samsung">
                                    <label>Samsung</label>
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <i class="fa fa-square-o"></i>
                                    <input type="checkbox" name="brands" value="LG">
                                    <label>LG</label>
                                </button>
                            </li>
                        </ul><!--/ .pnav-menu -->
                        <ul class="pnav-menu" id="pnav-feature">
                            <li><a href="#pnav-main"><i class="fa fa-caret-left"></i> Feature</a></li>
                            <li>
                                <button type="button">
                                    <i class="fa fa-square-o"></i>
                                    <input type="checkbox" name="feature" value="all">
                                    <label>Select All</label>
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <i class="fa fa-square-o"></i>
                                    <input type="checkbox" name="feature" value="2G">
                                    <label>2G</label>
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <i class="fa fa-square-o"></i>
                                    <input type="checkbox" name="feature" value="3G/LTE">
                                    <label>3G / LTE</label>
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <i class="fa fa-square-o"></i>
                                    <input type="checkbox" name="feature" value="Bluetooth">
                                    <label>Bluetooth</label>
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <i class="fa fa-square-o"></i>
                                    <input type="checkbox" name="feature" value="Camera">
                                    <label>Camera</label>
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <i class="fa fa-square-o"></i>
                                    <input type="checkbox" name="feature" value="Wifi">
                                    <label>Wifi</label>
                                </button>
                            </li>
                        </ul><!--/ .pnav-menu -->
                        <ul class="pnav-menu" id="pnav-color">
                            <li><a href="#pnav-main"><i class="fa fa-caret-left"></i> Color</a></li>
                            <li>
                                <button type="button">
                                    <i class="fa fa-square-o"></i>
                                    <input type="checkbox" name="color" value="all">
                                    <label>Select All</label>
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <i class="fa fa-square-o"></i>
                                    <input type="checkbox" name="color" value="White">
                                    <label>White</label>
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <i class="fa fa-square-o"></i>
                                    <input type="checkbox" name="color" value="Silver">
                                    <label>Silver</label>
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <i class="fa fa-square-o"></i>
                                    <input type="checkbox" name="color" value="Black">
                                    <label>Black</label>
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <i class="fa fa-square-o"></i>
                                    <input type="checkbox" name="color" value="Gold">
                                    <label>Gold</label>
                                </button>
                            </li>
                        </ul><!--/ .pnav-menu -->
                        <ul class="pnav-menu" id="pnav-os">
                            <li><a href="#pnav-main"><i class="fa fa-caret-left"></i> Operating System</a></li>
                            <li>
                                <button type="button">
                                    <i class="fa fa-square-o"></i>
                                    <input type="checkbox" name="os" value="all">
                                    <label>Select All</label>
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <i class="fa fa-square-o"></i>
                                    <input type="checkbox" name="os" value="Android">
                                    <label>Android</label>
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <i class="fa fa-square-o"></i>
                                    <input type="checkbox" name="os" value="iOS">
                                    <label>iOS</label>
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <i class="fa fa-square-o"></i>
                                    <input type="checkbox" name="os" value="Blackberry">
                                    <label>Blackberry</label>
                                </button>
                            </li>
                            <li>
                                <button type="button">
                                    <i class="fa fa-square-o"></i>
                                    <input type="checkbox" name="os" value="Windows">
                                    <label>Windows</label>
                                </button>
                            </li>
                        </ul><!--/ .pnav-menu -->
                    </form>
                </div><!--/ .col-xs-6 -->
            </div><!--/ .row -->
        </div><!--/ .container -->
    </section><!--/ .pnav -->

    <section class="pnav" id="sortby">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <form role="form" method="post" action="">
                        <ul class="pnav-menu active" id="pnav-main">
                            <li><a href="#sortby" class="pnav-close">Sort By <i class="fa fa-times"></i></a></li>
                            <li><a href="#">Brands</i></a></li>
                            <li><a href="#">Feature</a></li>
                            <li><a href="#">Color</a></li>
                            <li><a href="#">Operating System</a></li>
                        </ul><!--/ .pnav-menu -->
                    </form>
                </div><!--/ .col-xs-6 -->
            </div><!--/ .row -->
        </div><!--/ .container -->
    </section><!--/ .pnav -->

    <!--/ END OVERLAY MENUS -->

<?php include('footer.php'); ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('#frameLogin').modal('show');

        /* Comparison Old */
        var compare_count   = 0;
        $( 'button.btn-compare:not(.active)' ).each(function(index, value){
            $( this ).click(function(e){
                e.preventDefault();
                var href        = $( this ).attr( 'href' );
                var product_id  = $( this ).attr( 'data-product-id' );
                var product     = $( '.product[data-product-id="' + product_id + '"]' );
                var product_name= product.attr( 'data-product-name' );
                var product_img = product.find( 'img' ).attr( 'src' );
                console.log( product_name + ' ' + product_img );
                $( this ).addClass( 'active' );
                if( compare_count < 1 )
                {
                    $( '#compareItemA' ).addClass( 'active' );
                    $( '#compareItemA input[type="hidden"]' ).val( product_id );
                    $( '#compareItemA img' ).attr( 'src', product_img );
                    compare_count++;
                }
                else
                {
                    //document.location.href = 'compare.php';
                    $( '#compareItemB' ).addClass( 'active' );
                    $( '#compareItemB input[type="hidden"]' ).val( product_id );
                    $( '#compareItemB img' ).attr( 'src', product_img );
                    $( '.compare-button' ).addClass( 'enabled' );
                }
                // console.log( compare_count );
                return false;
            });
        });

        $( '.compare-item' ).each(function(index, value){
            $( this ).click(function(e){
                e.preventDefault();
                if( $( this ).hasClass( 'active' ) )
                {
                    var registered_id = $( this ).find( 'input[type="hidden"]' ).val();
                    $( '.btn-compare[data-product-id="' + registered_id + '"].active' ).removeClass( 'active' );
                    $( this ).find( 'input[type="hidden"]' ).val( 0 );
                    $( this ).removeClass( 'active' );
                    compare_count--;
                    if( compare_count < 1 )
                    {
                        $( '.compare-button' ).removeClass( 'enabled' );
                    }
                }
                return false;
            });
        });

    });
</script>
