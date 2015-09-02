<?php echo $this->template("includes/menu-partial.php")?>
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
		    				<td width="5%">Qty</td>
		    				<td width="20%">Sub Total</td>
						<td width="5%"></td>
		    			</thead>
		    			<tbody id="table-cart"> </tbody>
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
		    				<td width="50%" align="right">RM &nbsp;</td>
		    				<td width="20%" align="right" id="sub-total">0</td>
		    			</tr>
		    			<tr>
		    				<td width="30%">Voucher</td>
		    				<td width="50%" align="right" style="color:red">RM &nbsp;</td>
		    				<td width="20%" align="right" style="color:red" id="voucher">- 0</td>
		    			</tr>
		    			<tr><td colspan="3" height="30px"></td></tr>
					<tr><td colspan="3" height="25px" align="center"><p>Total Payment</p></td></tr>
		    			<tr>
		    				<td width="30%"><font style="font-size: 40px;">RM</font></td>
		    				<td width="20%" align="center"></td>
		    				<td width="50%" align="right" id="total-payment"><font style="font-size:40px;">0</font></td>
		    			</tr>
		    			<tr><td colspan="3" height="20px"></td></tr>
		    			<tr>
		    				<td colspan="3"><input type="text" placeholder="Voucher Code" id="input-voucher" name="voucher" value="" class="text-voucher"><input type="button" name="Apply" value="Apply" class="btn-voucher" onclick="checkVoucher();"></td>
		    			</tr>
		    		</table>
		    		<div class="checkout">
		    			<button onclick="location.href='/process-registration'">Checkout</button>
		    		</div>
		    		<div class="backtoshop">
		    			<button onclick="location.href='/product'">Back to Shop</button>
		    		</div>
		    	</div>
	    	</div>
	    </div>
    </div>
    
    <script>
	var voucherDiscount = 0;
	var listCart = new Object;
	var subTotal = 0;
	var contentCart = '';

	if(localStorage.getItem("ListCart") !== null){
	    listCart = JSON.parse(localStorage.getItem("ListCart"));
	    
	    processCart();
	}
	
	function processCart(){
	    subTotal = 0;
	    contentCart = "";
	    Object.keys(listCart).forEach(function(key) {
		contentCart += '<tr>';
		contentCart += '	<td>';
		contentCart += '		<img src="/website/static/img/thumb-2.jpg" style="float:left;">';
		contentCart += '		<p style="float:left; width: 60%; padding: 20px 10px 0;">' + listCart[key].name + ' - Black</p>';
		contentCart += '		<p style="float:left; width: 60%; padding: 0px 10px 10px;">SKU : #' + listCart[key].code + '</p>';
		contentCart += '	</td>';
		contentCart += '	<td align="center">RM ' + formatNumber(listCart[key].price) + '</td>';
		contentCart += '	<td align="center">' + listCart[key].quantity + '</td>';
		contentCart += '	<td align="center">RM ' + formatNumber((listCart[key].price * listCart[key].quantity)) + '</td>';
		contentCart += '	<td align="center"><div onclick="removeFromCart(\'' + listCart[key].code + '\');" class="removeCart">X</div></td>';
		contentCart += '</tr>';
		contentCart += '<tr><td colspan="6" height="10px"></td></tr>';
		
		subTotal += listCart[key].price * listCart[key].quantity;    
	    });
	    
	    document.getElementById("sub-total").innerHTML = formatNumber(subTotal);	
	    document.getElementById("total-payment").innerHTML = '<font style="font-size:40px;">' + formatNumber(subTotal - voucherDiscount) + '</font>';	
	    
	    document.getElementById("table-cart").innerHTML = contentCart;
	}
	
	function checkVoucher(){
	    var voucherCode = document.getElementById("input-voucher").value;
	    
	    if (voucherCode == "") {
		alert("Please input your voucher first");
	    }
	    else if (voucherCode == "dreamcube123") {
		voucherDiscount = 100000;
		alert("The voucher is valid, you have discount RM " + formatNumber(voucherDiscount));
		document.getElementById("voucher").innerHTML = formatNumber(voucherDiscount);	
		processCart();
	    }
	    else{
		alert("Sorry the voucher is not valid");
	    }
	}
	
	function removeFromCart(productCode){
	    delete listCart[productCode];
	    localStorage.setItem("ListCart", JSON.stringify(listCart));
    
	    processCart();
	}
	
	function formatNumber (num) {
            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
        }

    </script>
    