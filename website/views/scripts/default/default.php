<?php 
    $entries = new Object\Plans\Listing();
    $entries->setLimit("5");
    $entries->setOrderKey("oo_id");
    $entries->setOrder("Desc");
    $i = 0;

    if(count($entries)>0)
    {
?>

<div class="container-fluid">
    <div class="row">
        <div class="frame-featured">
            <?php foreach($entries as $entry){ ?>
            <?php //echo "<pre>"; print_r($entry->images); die(); ?>
                <?php if($i == 0){ ?>
                    <div class="main-featured">
                        <a href="javascript:void(0)">
                            <?php foreach($entry->images as $image){ ?>
                                <div class="image-featured" style="background: url('<?php echo $image->Image; ?>') no-repeat center center; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;">
                                    <div class="image-featured-overlay">
                                        <!--<span><i class="fa fa-eye"></i></span>-->
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="title-featured">
                                <p><?php echo $entry->Plan->PlanName; ?></p>
                            </div>
                        </a>
                    </div>
                <?php }else{ ?> 
                    <div class="featured">
                        <a href="javascript:void(0)">
                            <?php foreach($entry->images as $image){ ?>
                                <div class="image-featured" style="background: url('<?php echo $image->Image; ?>') no-repeat center center; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover">
                                <div class="image-featured-overlay">
                                    <!--<span><i class="fa fa-eye"></i></span>-->
                                </div>
                                </div>
                            <?php } ?>
                            <div class="title-featured">
                                <p><?php echo $entry->Plan->PlanName; ?></p>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            <?php $i++; } ?>
        </div>
    </div>
</div>
<?php } ?>

<?php echo $this->template("includes/menu-partial.php")?>
    
<div class="container">
    <div class="frame-latest">
        <div class="title-latest">
            <h2>Latest Product</h2>
            <hr></hr>
        </div>
        <?php
            echo $this->areablock('latetProductArea', array(
            'allowed' => array('latest-product')))
        ?>
    </div>
</div>
<div class="container">
    <div class="frame-ad">
        <a href="javascript:void(0)">
            <?= $this->image("banner") ?>
        </a>
    </div>
</div>
<div class="container">
    <div class="frame-about">
        <div class="title-about">
            <h2>About Us</h2>
            <hr></hr>
        </div>
        <div class="main-about">
            <?= $this->wysiwyg("about-us");
                        ?> 
        </div>
    </div>
</div>