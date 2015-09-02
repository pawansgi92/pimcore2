<?php echo $this->template("includes/menu-partial.php");?>

<div class="container no-index">
    <div class="col-md-3">
        <div class="frame-sidemenu">
            <div class="title-sidemenu">
                <h2>Category / Plan type</h2>
                <hr></hr>
            </div>
            <div class="main-sidemenu">
                <ul class="list-sidemenu">
                    <a href="javascript:void(0)" class="active"><li><i class="fa fa-angle-double-right"></i> Plan Type 1</li></a>
                    <a href="javascript:void(0)"><li><i class="fa fa-angle-double-right"></i> Plan Type 2</li></a>
                    <a href="javascript:void(0)"><li><i class="fa fa-angle-double-right"></i> Plan Type 3</li></a>
                    <a href="javascript:void(0)"><li><i class="fa fa-angle-double-right"></i> Plan Type 4</li></a>
                    <a href="javascript:void(0)"><li><i class="fa fa-angle-double-right"></i> Plan Type 5</li></a>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="frame-listproduct">
            <div class="title-listproduct">
                <h2>Product | <font class="count-product"> Items</font></h2>
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
                    foreach($this->product as $result){
                ?>
                <div class="col-xs-6 col-md-4 frame-product">
                    <!-- <a href="/product/product-detail"> -->
                    <a href="<?php echo $this->url(array($result->o_key,$result->o_id),"product-detail");?>">
                        <div class="image-wrapper">
                            <?php foreach($result->images as $image){ 
                                    $i = 0;
                                    if(count($image)>0)
                                    {
                                ?>
                                <img src="<?php echo $image->Image; ?>">
                            <?php } ?>
                            <hr></hr>
                            <div class="image-overlay">
                                <span><i class="fa fa-eye"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="text-product">
                        <p class="title-product"><?php echo $result->name; ?></p>
                        <p class="price-product">IDR <?php echo $result->price; ?></p>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>


        </div>
        <?php 
            echo $this->paginationControl($this->product, 'Sliding', 'includes/paging.php', array(
                'urlprefix' => $this->document->getFullPath() . '?page=', 'appendQueryString' => true
            ));
        ?>
    </div> 
</div>
