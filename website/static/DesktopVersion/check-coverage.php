<?php include('header.php'); ?>
<section>
	<div class="container">
		<div class="title">
			<h3><strong>PLEASE ENTER YOUR ADDRESS TO FIND<br>IF YOU ARE IN OUR COVERAGE AREA</strong></h3>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<form>
				<div class="col-md-4">
					<div class="form-group">
  						<input type="text" class="form-control" placeholder="Place Enter Address">
					</div>
				</div>
				<div class="col-md-8">
					<div class="msg-coverage-success">
						<h3><strong>YOU ARE COVERED!</strong></h3>
						<input type="submit" name="submit" value="CONTINUE TO CART!" class="btn btn-default">
					</div>
					<div class="msg-coverage-error">
						<h3><strong>Oops... we haven't gone there yet</strong></h3>
						<p>However, you can still sign-up for one of our mobile plans or phones<br>to enjoy the NWCO community. <strong>Click here to see our phones.</strong></p>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
<section class="maps">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2938.409156603826!2d-83.80336839206541!3d42.56783728924269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1440476788709" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>
<?php include('footer.php'); ?>