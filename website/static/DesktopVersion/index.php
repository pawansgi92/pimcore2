<?php include('header-lunching.php'); ?>
	<section class="backVideo">
		<div class="backVideoContent">
		  	<h1 class="title-backVideoContent"><strong>NWCO</strong></h1>
		  	<p class="content__teaser">VIDEO PLAY IN THE BACKGROUND OR IMAGE</p>
		</div><!-- /content -->

		<video id="my-video" class="video" muted loop>
		  	<source src="images/demo.mp4" type="video/mp4">
		  	<source src="images/demo.ogv" type="video/ogg">
		  	<source src="images/demo.webm" type="video/webm">
		</video><!-- /video -->

		<script>
		(function() {
		  	/**
		   	 * Video element
		     * @type {HTMLElement}
		   	*/
		  	var video = document.getElementById("my-video");
		  	/**
		   	 * Check if video can play, and play it
		   	*/
		  	video.addEventListener( "canplay", function() {
			    video.play();
		  	});
		})();
		</script>
	</section>
	<section class="feauturedImg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-5 col-sm-5 fImg">
					<div class="row">
						<a href="">
							<img src="http://placehold.it/420x200/b7b7b7">
							<h3>UNLIMITED BROADBAND</h3>
						</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 fImg">
					<div class="row">
						<a href="">
							<img src="http://placehold.it/300x178/5e5e5e">
							<h3>GALAXY S6 EDGE</h3>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 fImg">
					<div class="row">
						<a href="">
							<img src="http://placehold.it/264x209/3f3f3f">
							<h3>UNLIMITED DATA</h3>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="accessories">
		<h4 class="text-center"><strong>PERSONALIZE PRODUCT FOR YOUR MUSIC TASTE</strong></h4>
		<p class="text-center">Since you have already bought a Sportify subscription.</p>
		<br>
		<div class="container">
			<divc class="row">
				<div class="col-md-3">
					<div class="row">
						<div class="list-img">
							<img src="http://placehold.it/225x175/191919">
							<span><strong>RM 50</strong></span>
						</div>
						<button class="btn-custom-dark btn-half">Detail</button><button class="btn-custom-darker btn-half">Add to Cart</button>
					</div>
				</div> 
				<div class="col-md-3">
					<div class="row">
						<div class="list-img">
							<img src="http://placehold.it/225x175/959595">
							<span><strong>RM 50</strong></span>
						</div>
						<button class="btn-custom-lightgrey btn-half">Detail</button><button class="btn-custom-grey btn-half">Add to Cart</button>
					</div>
				</div> 
				<div class="col-md-3">
					<div class="row">
						<div class="list-img">
							<img src="http://placehold.it/225x175/191919">
							<span><strong>RM 50</strong></span>
						</div>
						<button class="btn-custom-dark btn-half">Detail</button><button class="btn-custom-darker btn-half">Add to Cart</button>
					</div>
				</div> 
				<div class="col-md-3">
					<div class="row">
						<div class="list-img">
							<img src="http://placehold.it/225x175/959595">
							<span><strong>RM 50</strong></span>
						</div>
						<button class="btn-custom-lightgrey btn-half">Detail</button><button class="btn-custom-grey btn-half">Add to Cart</button>
					</div>
				</div> 
			</div>
		</div>
	</section>
<?php include('footer.php'); ?>