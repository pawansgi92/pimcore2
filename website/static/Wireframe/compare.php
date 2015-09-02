<?php

    /**
     * ./website/static/Wireframe/compare.php
     * Product Comparison Page
     */

?>

<?php include_once( 'header-no-menu.php' ); ?>

<section class="black-title-bar header-no-menu">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <a href="#"><i class="fa fa-arrow-circle-left"></i>&nbsp; View all phones</a>
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ . -->

<div class="container-fluid">
    <ul class="breadcrumb">
        <li><a href="#"><h3>Store</h3></a></li>
        <li><h3>&gt;</h3></li>
        <li class="active"><h3>Compare Phones</h3></li>
    </ul><!--/ .breadcrumb -->
</div><!--/ .container -->

<section class="page-compare">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <div class="compare-item text-center">
                    <div class="image">
                        <img src="http://placehold.it/480x640" alt="Product Image" class="img-responsive">
                        <div class="image-label">
                            <p>Apple iPhone 6</p>
                        </div><!--/ .image-label -->
                    </div><!--/ .image -->
                    <div class="actions">
                        <a href="#">VIEW</a>
                        <a href="#"><i class="fa fa-times"></i> Remove</a>
                    </div><!--/ .actions -->
                </div><!--/ .compare-item -->
            </div><!--/ .col-xs-6 -->
            <div class="col-xs-6">
                <div class="compare-item text-center">
                    <div class="image">
                        <img src="http://placehold.it/480x640" alt="Product Image" class="img-responsive">
                        <div class="image-label">
                            <p>Apple iPhone 6</p>
                        </div><!--/ .image-label -->
                    </div><!--/ .image -->
                    <div class="actions">
                        <a href="#">VIEW</a>
                        <a href="#"><i class="fa fa-times"></i> Remove</a>
                    </div><!--/ .actions -->
                </div><!--/ .compare-item -->
            </div><!--/ .col-xs-6 -->
        </div><!--/ .row -->
        <div class="row">
            <div class="col-xs-12">
                <table width="100%" class="compare-table">
                    <tr class="ct-head"><td colspan="2">Memory</td></tr>
                    <tr>
                        <td class="text-center">16GB</td>
                        <td class="text-center">32GB</td>
                    </tr>
                    <tr class="ct-head"><td colspan="2">Talktime</td></tr>
                    <tr>
                        <td class="text-center">Up to 14 hours</td>
                        <td class="text-center">Up to 24 hours</td>
                    </tr>
                    <tr class="ct-head"><td colspan="2">Dimensions</td></tr>
                    <tr>
                        <td class="text-center">138.1 x 67.0 x 6.9mm</td>
                        <td class="text-center">158.1 x 77.8 x 7.1mm</td>
                    </tr>
                </table>
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ .page-comparison -->

<?php include_once( 'footer.php' ); ?>
