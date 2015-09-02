<?php 
    $entries = new Object\Product\Listing();
    $entries->setLimit("6");
    $entries->setOrderKey("oo_id");
    $entries->setOrder("desc");
?>
<?php //echo "<pre>"; print_r($this->product); die(); ?>
<div class="main-latest">
    <?php
        foreach($entries as $entry){
          
    ?>
    <div class="col-xs-6 col-md-4 frame-product">
        <a href="<?php echo $this->url(array($entry->o_key,$entry->o_id),"product-detail");?>">
            <div class="imagee-wrapper">

                        <?php foreach($entry->images as $image){ ?>
                            <img src="<?php echo $image->Image; ?>">
                        <?php } ?>
                <hr></hr>
                <div class="image-overlay">
                    <span><i class="fa fa-eye"></i></span>
                </div>
            </div>
        </a>
        <div class="text-product">
            <p class="title-product"><?php echo $entry->name; ?></p>
            <p class="price-product">IDR <?php echo $entry->price; ?></p>
        </div>
    </div>
    <?php
        }
    ?>
</div>
