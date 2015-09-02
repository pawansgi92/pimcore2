<?php include("metadata.php"); ?>
    <?php include("header.php"); ?>
        <div class="container no-index">
            <div class="col-md-3">
                <div class="row no-margin-right">
                    <div class="frame-sidemenu">
                        <div class="title-sidemenu">
                            <h2>Category / Plan type</h2>
                            <hr></hr>
                        </div>
                        <div class="main-sidemenu">
                            <ul class="list-sidemenu">
                                <a href="javascript:void(0)"><li><i class="fa fa-angle-double-right"></i> Plan Type 1</li></a>
                                <a href="javascript:void(0)"><li><i class="fa fa-angle-double-right"></i> Plan Type 2</li></a>
                                <a href="javascript:void(0)"><li><i class="fa fa-angle-double-right"></i> Plan Type 3</li></a>
                                <a href="javascript:void(0)" class="active"><li><i class="fa fa-angle-double-right"></i> Plan Type 4</li></a>
                                <a href="javascript:void(0)"><li><i class="fa fa-angle-double-right"></i> Plan Type 5</li></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="frame-listproduct">
                    <div class="title-listproduct">
                        <h2>Product | <font class="count-product">128 Items</font></h2>
                        <hr></hr>
                        <div class="filter">
                            <p>
                                Filter :
                                        <select name="filter">
                                            <option value="low-high">Price Low - High</option>
                                            <option value="high-low">Price High - Low</option>
                                        </select>
                            </p>
                        </div>
                    </div>
                    <div class="main-listproduct">
                        <?php
                            $i = 1;
                            for($i; $i <= 12 ; $i++) {
                        ?>
                        <div class="col-xs-6 col-md-4 frame-product">
                            <a href="detail-product.php">
                                <div class="image-wrapper">
                                    <img src="img/product.jpg">
                                    <hr></hr>
                                    <div class="image-overlay">
                                        <span><i class="fa fa-eye"></i></span>
                                    </div>
                                </div>
                            </a>
                            <div class="text-product">
                                <p class="title-product">Product P1-00<?php echo $i; ?></p>
                                <p class="price-product">IDR 499.000</p>
                            </div>
                            <div class="clearfix"></div>
                            <div class="compare-product">
                                <a href="#" class="btn btn-compare" data-product-id="<?php echo $i; ?>" data-product-name="Product P1-00<?php echo $i; ?>">
                                    <i class="fa fa-square-o"></i> <span>Click to Compare</span>
                                </a>
                            </div><!--/ .compare-product -->
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
                <div class="frame-pagging">
                    <div class="main-pagging">
                        <hr></hr>
                        <div class="show">
                            <p>Show :
                                    <select name="filter">
                                        <option value="12">12</option>
                                        <option value="18">18</option>
                                        <option value="24">24</option>
                                    </select>
                            </p>
                        </div>
                        <div class="pagging">
                            <ul class="page">
                                <li><a href="javascript:void(0)">|&lt;</a></li>
                                <li><a href="javascript:void(0)">&lt;</a></li>
                                <li><a href="javascript:void(0)">1</a></li>
                                <li><a href="javascript:void(0)">2</a></li>
                                <li class="active"><a href="javascript:void(0)">3</a></li>
                                <li><a href="javascript:void(0)">4</a></li>
                                <li><a href="javascript:void(0)">5</a></li>
                                <li><a href="javascript:void(0)">&gt;</a></li>
                                <li><a href="javascript:void(0)">&gt;|</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="compare-bar">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <p class="message">Choose <span>2</span> or <span>3</span> Products to compare&hellip;</p>
            </div><!--/ .col-xs-12 -->
            <div class="col-xs-12 col-md-6 text-right">
                <div class="compare-items">
                    <a href="#" class="compare-item btn btn-default" data-product-id="0" data-toggle="tooltip" data-placement="top" title="">
                        <i class="fa fa-plus"></i>
                    </a><!--/ .compare-item -->
                    <a href="#" class="compare-item btn btn-default" data-product-id="0" data-toggle="tooltip" data-placement="top" title="">
                        <i class="fa fa-plus"></i>
                    </a><!--/ .compare-item -->
                    <a href="#" class="compare-item btn btn-default" data-product-id="0" data-toggle="tooltip" data-placement="top" title="">
                        <i class="fa fa-plus"></i>
                    </a><!--/ .compare-item -->
                </div><!--/ .compare-items -->
                <a href="#" class="btn btn-primary btn-compare disabled"><i class="fa fa-copy"></i> Compare Now!</a>
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</div><!--/ .compare-bar -->

        <?php include("footer.php"); ?>
