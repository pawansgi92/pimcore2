                        <?php $products_mobile = $this->products_mobile; ?>
                        <?php foreach($products_mobile as $product) { ?>                            
                            <div class="product" data-product-id="<?php echo $i; ?>" data-product-name="<?php echo $product->name ?>">
                                <?php foreach($product->product->images->items as $image){ ?>
                                    <img src="<?php echo $image->Image ?>">
                                <?php } ?>
                                <div class="title-product">
                                    <p><b><font class="title"><?php echo $product->name ?> (<?php echo $product->product->name ?> + <?php echo $product->plans->name ?>) </font></b><br>from <b><font class="title">RM <?php echo $product->price ?></font></b></p>
                                </div>
                                <div class="btn-product">
                                    <a href="/product-detail/<?php echo $product->o_key . "_" . $product->o_id ?>"> <button> View </button> </a>
                                    <button class="btn-compare" data-product-id="<?php echo $i; ?>">Compare</button>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="row">
                            <a href="autoload-product-mobile" class="loadmore"><i class="fa fa-arrow-circle-down"> <b>SCROLL DOWN TO LOAD MORE</b></i></a>
                        </div>