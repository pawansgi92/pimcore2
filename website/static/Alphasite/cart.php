<?php include("metadata.php"); ?>
    <?php include("header.php"); ?>
    <div class="container no-index">
    	<div class="row">
	    	<div class="col-md-8">
	    		<div class="frame-cart">
		    		<div class="title-cart">
		    			<h2>Cart</h2>
		    			<hr></hr>
		    		</div>
		    	</div>
		    	<div class="main-cart">
		    		<table border="0" width="100%">
		    			<thead align="center">
		    				<td width="50%">Item's</td>
		    				<td width="20%">Price</td>
		    				<td width="10%">Qty</td>
		    				<td width="20%">Sub Total</td>
		    			</thead>
		    			<tbody>
		    				<td>
		    					<img src="img/thumb-2.jpg" style="float:left;">
		    					<p style="float:left; width: 60%; padding: 20px 10px 0;">P1-0001 - Black</p>
		    					<p style="float:left; width: 60%; padding: 0px 10px 10px;">SKU : #001</p>
		    				</td>
		    				<td align="center">IDR 699.000</td>
		    				<td align="center">1</td>
		    				<td align="center">IDR 699.000</td>
		    			</tbody>
		    		</table>
		    	</div>
	    	</div>
	    	<div class="col-md-4">
	    		<div class="frame-cart">
		    		<div class="title-cart">
		    			<h2>Total Cart</h2>
		    			<hr></hr>
		    		</div>
		    	</div>
		    	<div class="main-cart">
		    		<table border="0" width="100%">
		    			<tr>
		    				<td width="30%">Sub total</td>
		    				<td width="50%" align="right">IDR</td>
		    				<td width="20%" align="right">699.000</td>
		    			</tr>
		    			<tr>
		    				<td width="30%">Voucher</td>
		    				<td width="50%" align="right" style="color:red">IDR</td>
		    				<td width="20%" align="right" style="color:red">- 100.000</td>
		    			</tr>
		    			<tr><td colspan="3" height="30px"></td></tr>
		    			<tr>
		    				<td width="30%">IDR</td>
		    				<td width="50%" align="center" style="color:red"><font style="font-size:60px;">599</font></td>
		    				<td width="20%" align="right">.000</td>
		    			</tr>
		    			<tr><td colspan="3" height="20px"></td></tr>
		    			<tr>
		    				<td colspan="3"><input type="text" name="voucher" value="" class="text-voucher"><input type="submit" name="Apply" value="Apply" class="btn-voucher"></td>
		    			</tr>
		    		</table>
		    		<div class="checkout">
		    			<button>Checkout</button>
		    		</div>
		    		<div class="backtoshop">
		    			<button>Back to Shop</button>
		    		</div>
		    	</div>
	    	</div>
	    </div>
    </div>
    <?php include("footer.php"); ?>