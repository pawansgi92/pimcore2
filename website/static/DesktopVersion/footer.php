<footer>
		<div class="container">
			<ul class="menu-footer">
				<li><a href="">Link 1</a></li>
				<li><a href="">Link 2</a></li>
				<li><a href="">Link 3</a></li>
				<li><a href="">Link 4</a></li>
			</ul>
			<ul class="social-media">
				<li><a href=""><i class="fa fa-facebook"></i></a></li>
				<li><a href=""><i class="fa fa-twitter"></i></a></li>
			</ul>
		</div>
	</footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    	$(document).ready(function(){
            $('.toggle-search').click(function(){
                $("#inp-search").animate({width:'show'},500);
                $(this).removeClass('toggle-search');
            });
    		$('#grid-list').click(function(){
    			$('#grid-box').removeClass("active");
    			$('#grid-list').addClass("active");
    			$('.frame-product').animate({opacity:0}, function(){
    				$('.frame-product').addClass("grid-list");
    				$('.frame-product').stop().animate({opacity:1});
    			});
    		});
    		$('#grid-box').click(function(){
    			$('#grid-list').removeClass("active");
    			$('#grid-box').addClass("active");
    			$('.frame-product').animate({opacity:0}, function(){
    				$('.frame-product').removeClass("grid-list");
    				$('.frame-product').stop().animate({opacity:1});
    			});
    		});
    		$('.btn-filter').click(function(){
                var $this = $('.btn-filter > h3 > i');
                if ($this.hasClass("fa-caret-down")) {
                    $this.removeClass("fa-caret-down").addClass("fa-caret-up");
                	$('.list-filter').slideDown("fast");
                	$('.list-sortby').hide();
                    return;
                }
                if ($this.hasClass("fa-caret-up")) {
                    $this.removeClass("fa-caret-up").addClass("fa-caret-down");
                    $('.list-filter').slideUp("fast");
                    $('.list-sortby').hide();
                    return;
                }
            });
    		$('.btn-sort').click(function(){
                var $this = $('.btn-sort > h3 > i');
                if ($this.hasClass("fa-caret-down")) {
                    $this.removeClass("fa-caret-down").addClass("fa-caret-up");
                    $('.list-sortby').slideDown("fast");
                    $('.list-filter').hide();
                    return;
                }
                if ($this.hasClass("fa-caret-up")) {
                    $this.removeClass("fa-caret-up").addClass("fa-caret-down");
                    $('.list-sortby').slideUp("fast");
                    $('.list-filter').hide();
                    return;
                }
            });
    	});
    </script>
    <div class="modal fade bs-example-modal-sm" id="quickpeek" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	  	<div class="modal-dialog modal-sm">
	    	<div class="modal-content">
		      	<div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        	<h4 class="modal-title" id="myModalLabel"><br></h4>
		      	</div>
		      	<div class="modal-body">
			        <div class="row">
				        <div class="col-sm-6"><img src="http://placehold.it/140x100"></div>
				        <div class="col-sm-6"><p><strong>HTC</strong><br>HTC M8, BLACK<br>RM 1,399</p></div>
				        <div class="col-sm-12"><br><button class="btn-custom-dark btn-rounded btn-full"><strong>SEE DETAILS</strong></button></div>
			        </div>
		      	</div>
	  		</div>
	  	</div>
	</div>
    <div class="modal fade bs-example-modal-sm" id="quickcart" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
	  	<div class="modal-dialog modal-sm">
	    	<div class="modal-content">
		      	<div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        	<h4 class="modal-title" id="myModalLabel"><p><strong>OPTION SHOPPING</strong></p></h4>
		      	</div>
		      	<div class="modal-body">
		      		<p>Do you want a new number or keep your old number?</p>
				    <div class="custom-background-grey">
				    	<input type="radio" name="shopOption" value="1"> <strong>I want a new number</strong>
				    </div>
				    <div class="custom-background-grey">
				    	<input type="radio" name="shopOption" value="2"> <strong>Keep my old number</strong>
				    </div>
				    <p>How many lines do you have in your current account?</p>
				    <br>
				    <br>
				    <button class="btn-custom-black btn-full"><strong>ADD TO CART</strong></button>
		      	</div>
	  		</div>
	  	</div>
	</div>
  </body>
</html>
