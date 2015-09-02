    <?php
        $products_mobile = $this->products_mobile;
        $products_broadband = $this->products_broadband;
    ?>

    <div class="container-fluid header-no-menu">
        <div class="row store">
            <div class="col-xs-12 title-store">
                <h3>STORE</h3>
            </div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="/website/static/Wireframe/img/slideshow.jpg" alt="...">
                        <div class="carousel-caption">
                        </div>
                    </div>
                    <div class="item">
                        <img src="/website/static/Wireframe/img/slideshow.jpg" alt="...">
                        <div class="carousel-caption">
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row t-menu">
            <div class="nav nav-pills">
                <div class="col-xs-6 mmenu mobile active"><a data-toggle="pill" href="#mobile"><p>MOBILE</p></a></div>
                <div class="col-xs-6 mmenu broadbrand"><a data-toggle="pill" href="#broadband"><p>BROADBRAND</p></a></div>
            </div>
        </div>
    </div>
    <div class="tab-content">
        <div id="mobile" class="tab-pane fade in active">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-3">
                        <a href="#filterby" class="btn btn-block pnav-trigger">Filter By<i class="fa fa-caret-down"></i></a>
                    </div>
                    <div class="col-xs-3">
                        <a href="#sortby" class="btn btn-block pnav-trigger">Sort By<i class="fa fa-caret-down"></i></a>
                    </div><!--/ .col-xs-6 -->
                        <!--/ OVERLAY MENUS -->
                        <section class="pnav" id="filterby">
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
                        </section><!--/ .pnav -->

                        <section class="pnav" id="sortby">
                            <div class="col-xs-6" >
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
                        </section><!--/ .pnav -->

                        <!--/ END OVERLAY MENUS -->

                    <div class="col-xs-6 compare">
                        <div class="compare-box">
                            <a href="javascript:void(0)" class="compare-button is_compare">
                                <div class="compare-button-inner">
                                    <i class="fa fa-check fa-2x"></i> Compare
                                </div><!--/ .compare-button-inner -->
                            </a><!--/ .compare-button -->
                            <div class="compare-items">
                                <a href="#" class="compare-item" id="compareItemA">
                                    <div class="close-button"><i class="fa fa-times"></i></div>
                                    <img src="http://placehold.it/256x256" alt="Compare Product" class="img-responsive">
                                    <i class="fa fa-2x fa-mobile-phone"></i>
                                    <input type="hidden" name="compareProductA" value="0">
                                </a><!--/ .compare-item -->
                                <a href="#" class="compare-item" id="compareItemB">
                                    <div class="close-button"><i class="fa fa-times"></i></div>
                                    <img src="http://placehold.it/256x256" alt="Compare Product" class="img-responsive">
                                    <i class="fa fa-2x fa-mobile-phone"></i>
                                    <input type="hidden" name="compareProductB" value="0">
                                </a><!--/ .compare-item -->
                            </div><!--/ .compare-items -->
                        </div><!--/ .compare-box -->
                    </div>
                </div><!--/ .row -->
                <div class="row">
                    <div class="col-xs-12 scroll-mobile">
                        <?php

                            $url_request = Website_P1GlobalFunction::getBaseUrl() . "/core/product/getproduct";
                            $getProduct=Website_P1GlobalFunction::CallAPI("POST", $url_request ,array('' =>"")); 
                            $getproducts=json_decode($getProduct);

                            // print_r($getProduct);
                            // die();

                            
                            $i = 0; 
                            foreach($getproducts as $productlist) {
                            $i++; 
                                
                            foreach ($productlist->data as $product) {
                                
                             //   print_r($product);
                               //     die();
                            
                         ?>                            
                                    <div class="product" data-product-id="<?php echo $i; ?>" data-product-name="<?php echo $product->Name ?>">
                                       <?php if ($product->TypeProduct=="bundle"){?>
                                            <img src="<?php echo $product->Product->Images->path."/".$product->Product->Images->filename; ?>">
                                        <?php } else{ ?>
                                            <img src="<?php echo $product->Images->path."/".$product->Images->Filename; ?>">
                                        <?php } ?>
                                        <div class="title-product">
                                            <p>
                                                <b>
                                                    <font class="title">
                                                        (
                                                        <?php 
                                                            echo $product->Name;
                                                            echo $product->Product->Name;
                                                          
                                                            if ($product->TypeProduct=="bundle"){
                                                                echo "+";
                                                                echo $product->Plans->Name;
                                                            }
                                                        ?>
                                                        )

                                                    </font>
                                                </b>
                                                <br>from <b><font class="title">RM <?php echo $product->Price ?></font></b></p>
                                        </div>
                                        <div class="btn-product">
                                            <a href="/product-detail/<?php echo $product->O_key . "_" . $product->O_id ?>"> <button> View </button> </a>
                                            <?php
                                                if ($product->TypeProduct=="bundle"){
                                                    ?>
                                                    <button class="btn-compare" data-product-id="<?php echo $product->O_id; ?>">Compare</button>
                                                <?php
                                                }
                                            ?>
                                        </div>
                                    </div>
                        <?php  
                                }
    
                            } 
                        ?>
                        <!-- <div class="row">
                            <a href="autoload-product-mobile" class="loadmore"><i class="fa fa-arrow-circle-down"> <b>SCROLL DOWN TO LOAD MORE</b></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div id="broadband" class="tab-pane fade">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xs-6">
                        <a href="#filterby" class="btn btn-block pnav-trigger">Filter By<i class="fa fa-caret-down"></i></a>
                    </div><!--/ .col-xs-6 -->
                    <div class="col-xs-6">
                        <a href="#sortby" class="btn btn-block pnav-trigger">Sort By<i class="fa fa-caret-down"></i></a>
                    </div><!--/ .col-xs-6 -->
                </div><!--/ .row -->
                <!--/ OVERLAY MENUS -->
                <section class="pnav" id="filterby">
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
                </section><!--/ .pnav -->

                <section class="pnav" id="sortby">
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
                </section><!--/ .pnav -->

                <!--/ END OVERLAY MENUS -->

                <div class="row">
                    <div class="col-xs-12">
                        <div class="check-coverage">
                            <p><i class="fa fa-wifi fa-2x"></i> Check the network<br>coverage at your area.</p>
                            <div class="checkCoverage">
                                <div class="input-group">
                                    <input type="text" name="cCover" class="cCover" placeholder="">
                                    <span class="input-group-btn group-search">
                                        <button class="btn-search" type="button"><i class="fa fa-search"></i></button>
                                    </span>
                                </div><!-- /input-group -->
                                <p class="error-coverage">Sorry, your address is not in our network</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 scroll-broadband">
                        <?php foreach($products_broadband as $product) { ?>
                        <?php $image_broadband = ''; ?>
                        <div class="product">
                            
                            <?php try{ ?>
                                <?php foreach($product->Images->items as $image){ ?>
                                    <img src="<?php echo $image->Image; ?>">
                                    <?php $image_broadband = $image->Image; ?>
                                <?php } ?>
                            <?php }catch(Exception $ex){} ?>

                            <div class="desc-product">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ornare neque consequat venenatis sollicitudin. 
                                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse vel 
                                    sem mattis, aliquam lorem sed, iaculis felis. Mauris hendrerit quis neque quis sollicitudin. Vestibulum efficitur 
                                    augue a turpis dictum tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent lacinia laoreet metus, 
                                    sit amet iaculis nisi efficitur ut. Nullam eu elementum neque, id molestie erat. Pellentesque molestie metus elit, eget 
                                    sollicitudin nibh consequat non.</p>
                            </div>
                            <div class="option-product">
                                <ul class="optionProduct">
                                    <li><input type="radio" name="op">No Modem</li>
                                    <li>
                                        <input type="radio" name="op">LTI MiFi<br>
                                        <ul>
                                            <li>RM 12x24 months fee</li>
                                            <li>RM 20x5 months rebate</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <input type="radio" name="op">USB Modem<br>
                                        <ul>
                                            <li>RM 20x24 months fee</li>
                                            <li>RM 20x5 months rebate</li>
                                        </ul>
                                    </li>
                                    <li>
                                        <input type="radio" name="op">FWT Modem<br>
                                        <ul>
                                            <li>RM 25x24 months fee</li>
                                            <li>RM 20x5 months rebate</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="title-product">
                                <p>
                                    <b><font class="title"><?php echo $product->Name; ?></font></b><br>
                                    from
                                    <b><font class="title">RM <?php echo $product->Price; ?></font></b>
                                </p>
                            </div>
                            <div class="btn-product addcart">
                                <button><a href="javascript:void(0);" onclick="addToCart('<?php echo $product->o_id; ?>', '<?php echo $product->name; ?>', '<?php echo $product->price; ?>', '<?php echo $image_broadband; ?>');">ADD TO CART</a></button>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- <div class="row">
                            <a href="/autoload-product-broadband" class="loadmore"><i class="fa fa-arrow-circle-down"> <b>SCROLL DOWN TO LOAD MORE</b></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /#wrapper -->

    <script type="text/javascript">
        function addToCart(id, name, price, image) {
            var product_id = id;
            var product_price = price;
            var product_name = name;
            var product_image = image;
            
            var listCart = new Object;
            var tempProduct;
            if(localStorage.getItem("ListCart") !== null){
                listCart = JSON.parse(localStorage.getItem("ListCart"));                    
            }

            tempProduct = { "id" : product_id, "name" : product_name, "price" : product_price, "image" : product_image, "type" : "plans" };         

            listCart[product_id] = tempProduct;                                
            localStorage.setItem("ListCart", JSON.stringify(listCart));
            
	    if(localStorage.getItem("ListCart") !== null){
		listCart = JSON.parse(localStorage.getItem("ListCart"));
		if (Object.keys(listCart).length > 0) {
		    document.getElementById("count-cart").innerHTML = Object.keys(listCart).length;
		    document.getElementById("count-cart").style.display = "block";					
		}
		else
		{
		    document.getElementById("count-cart").style.display = "none";					
		}
	    }				
            
            //console.log(localStorage);            
            //location.href='/cart';
        }

    </script>
    
    
