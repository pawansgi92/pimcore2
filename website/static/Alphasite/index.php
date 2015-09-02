<?php include("metadata.php"); ?>
    	<div class="container-fluid frame">
    		<div class="row">
    			<div class="frame-featured">
    				<div class="main-featured">
                        <a href="javascript:void(0)">
                            <div class="image-featured" style="background: url('img/product.jpg') no-repeat center center; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover">
                                <div class="image-featured-overlay">
                                    <!--<span><i class="fa fa-eye"></i></span>-->
                                </div>
                            </div>
                            <div class="title-featured">
                                <p>P1 Promo Alpha 001</p>
                            </div>
                        </a>
    				</div>
    				<?php 
    					$i = 1;
    					for($i; $i <= 4 ; $i++) {
    				?>
                    <div class="featured">
                        <a href="javascript:void(0)">
                            <div class="image-featured" style="background: url('img/promo.jpg') no-repeat center center; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover">
                                <div class="image-featured-overlay">
                                    <!--<span><i class="fa fa-eye"></i></span>-->
                                </div>
                            </div>
                            <div class="title-featured">
                                <p>P1 Promo Alpha 00<?php echo $i+1; ?></p>
                            </div>
                        </a>
    				</div>
    				<?php
    					}
    				?>
    			</div>
    		</div>
    	</div>
    	
        <?php include("header.php"); ?>

    	<div class="container">
    		<div class="frame-latest">
    			<div class="title-latest">
    				<h2>Latest Product</h2>
    				<hr></hr>
    			</div>
    			<div class="main-latest">
    				<?php 
    					$i = 1;
    					for($i; $i <= 6 ; $i++) {
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
    				</div>
    				<?php
    					}
    				?>
    			</div>
    		</div>
    	</div>
    	<div class="container">
    		<div class="frame-ad">
    			<a href="javascript:void(0)">
    				<img src="img/banner.jpg">
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
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more.</p>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                </div>
            </div>
    	</div>
        
        <?php include("footer.php"); ?>