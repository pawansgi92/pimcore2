<?php

    /**
     * ./website/static/Wireframe/compare.php
     * Product Comparison Page
     */

?>
<section class="black-title-bar header-no-menu">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <a href="/" id="back"><i class="fa fa-arrow-circle-left"></i>&nbsp; View all phones</a>
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ . -->
        <?php 

            $product_id1 = $this->_getParam('id1');
            $product_id2 = $this->_getParam('id2');
       
            $product1=Website_P1GlobalFunction::CallAPI("POST", "alphaone.imkepo.com/core/product/getproduct",array('id' =>$product_id1)); 
            $getproducts1=json_decode($product1);
            
            $product2=Website_P1GlobalFunction::CallAPI("POST", "alphaone.imkepo.com/core/product/getproduct",array('id' =>$product_id2)); 
            $getproducts2=json_decode($product2);

        ?>
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
            <div class="col-xs-6" id="pro1">
                <div class="compare-item text-center">
                    <div class="image">
                        <img src="<?php echo $getproducts1->data[0]->images->path.$getproducts1->data[0]->images->filename ?>" alt="<?php echo $getproducts1->data[0]->images->imageName ?>" class="img-responsive">
                        <div class="image-label">
                            <p><?php echo $getproducts1->data[0]->name ?></p>
                        </div><!--/ .image-label -->
                    </div><!--/ .image -->
                    <div class="actions">
                        <a href="#">VIEW</a>
                        <a href="javascript:void(0);" class="pro1"><i class="fa fa-times"></i> Remove</a>
                    </div><!--/ .actions -->
                </div><!--/ .compare-item -->
                <table width="100%" class="compare-table">
                    <tr class="ct-head"><td colspan="2">Memory</td></tr>
                    <tr>
                        <td class="text-center">16GB</td>
                    </tr>
                    <tr class="ct-head"><td colspan="2">Talktime</td></tr>
                    <tr>
                        <td class="text-center">Up to 14 hours</td>
                    </tr>
                    <tr class="ct-head"><td colspan="2">Dimensions</td></tr>
                    <tr>
                        <td class="text-center">138.1 x 67.0 x 6.9mm</td>
                    </tr>
                </table>
            </div><!--/ .col-xs-6 -->
            <div class="col-xs-6"  id="pro2">
                <div class="compare-item text-center">
                    <div class="image">
                        <img src="<?php echo $getproducts2->data[0]->images->path.$getproducts2->data[0]->images->filename ?>" alt="<?php echo $getproducts2->data[0]->images->imageName ?>" class="img-responsive">
                        <div class="image-label">
                            <p><?php echo $getproducts2->data[0]->name ?></p>
                        </div><!--/ .image-label -->
                    </div><!--/ .image -->
                    <div class="actions">
                        <a href="#">VIEW</a>
                        <a href="javascript:void(0);" class="pro2"><i class="fa fa-times"></i> Remove</a>
                    </div><!--/ .actions -->
                </div><!--/ .compare-item -->
                <table width="100%" class="compare-table">
                    <tr class="ct-head"><td colspan="2">Memory</td></tr>
                    <tr>
                        <td class="text-center">32GB</td>
                    </tr>
                    <tr class="ct-head"><td colspan="2">Talktime</td></tr>
                    <tr>
                        <td class="text-center">Up to 24 hours</td>
                    </tr>
                    <tr class="ct-head"><td colspan="2">Dimensions</td></tr>
                    <tr>
                        <td class="text-center">158.1 x 77.8 x 7.1mm</td>
                    </tr>
                </table>
            </div><!--/ .col-xs-6 -->
        </div><!--/ .row -->

        <!--/ .row -->
    </div><!--/ .container -->
</section><!--/ .page-comparison -->
<script type="text/javascript">
    $(document).ready(function(){
        $('.pro1').click(function(){
            $('#pro1,.pro1').hide();
            $('#pro2').removeClass('col-xs-6');
            $('#pro2').addClass('col-xs-12');
            $('.pro2').hide();
        });
        $('.pro2').click(function(){
            $('#pro2,.pro2').hide();
            $('#pro1').removeClass('col-xs-6');
            $('#pro1').addClass('col-xs-12');
            $('.pro1').hide();
        });

    });
</script>
