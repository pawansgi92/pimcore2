<?php include("metadata.php"); ?>
    <?php include("header.php"); ?>
        <div class="container no-index">
            <div class="col-md-4">
                <div class="frame-detail">
                    <div class="main-detail">
                        <img src="img/main-detail.jpg">
                    </div>
                    <div class="thumb-detail">
                        <ul class="thumb">
                            <li><img src="img/thumb-1.jpg"></li>
                            <li><img src="img/thumb-2.jpg"></li>
                            <li><img src="img/thumb-1.jpg"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
               <div class="frame-dpro">
                    <div class="title-dpro">
                        <h2>Product Information</h2>
                        <hr></hr>
                    </div>
                    <div class="dpro">
                        <h3>Product P1-001 <font class="codepro">[P1#001]</font></h3>
                        <h2>IDR 499.000</h2>
                        <ul class="color">
                            <li>Color :</li>
                            <li class="white"></li>
                            <li class="black"></li>
                            <li class="red"></li>
                            <li class="brown"></li>
                        </ul>
                        <div class="qty">
                            <p>
                                Qty : 
                                    <select name="qty">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                            </p>
                        </div>
                        <div class="cart">
                            <input type="submit" name="cart" value="Add to Cart" class="add-cart">
                        </div>
                        <div class="frame-desc">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Description #1
                                                <i class="fa fa-angle-up"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 
                                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. 
                                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch 
                                            et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan 
                                            excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you 
                                            probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Description #2
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 
                                            3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. 
                                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                            Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. 
                                            Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth 
                                            nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div> 
        </div>
        <div class="container frame-related">
            <div class="title-related">
                <h2>Related Product</h2>
                <hr></hr>
            </div>
            <div class="main-related">
            <?php 
                $i = 1;
                for($i; $i <= 4 ; $i++) {
            ?>
                <div class="col-md-3 frame-product">
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
                </div>
            <?php } ?>
            </div>
        </div>
    <?php include("footer.php"); ?>