						<?php $products_broadband = $this->products_broadband; ?>
                        <?php foreach($products_broadband as $product) { ?>
                        <?php $image_broadband = ''; ?>
                        <div class="product">
                            <?php foreach($product->images->items as $image){ ?>
                                <img src="<?php echo $image->Image; ?>">
                                <?php $image_broadband = $image->Image; ?>
                            <?php } ?>
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
                                    <b><font class="title"><?php echo $product->name; ?></font></b><br>
                                    from
                                    <b><font class="title">RM <?php echo $product->price; ?></font></b>
                                </p>
                            </div>
                            <div class="btn-product addcart">
                                <button><a href="javascript:void(0);" onclick="addToCart('<?php echo $product->o_id; ?>', '<?php echo $product->name; ?>', '<?php echo $product->price; ?>', '<?php echo $image_broadband; ?>');">ADD TO CART</a></button>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="row">
                            <a href="/autoload-product-broadband" class="loadmore"><i class="fa fa-arrow-circle-down"> <b>SCROLL DOWN TO LOAD MORE</b></i></a>
                        </div>