<div class="container-fluid header-no-menu">
    <div class="row">
        <div class="col-xs-12">
                            <h2>Your Shopping Cart Order</h2>
                    </div>
                    <div class="col-xs-12">
                    <div class="row">
                                    <div class="col-xs-8 account-line">
                                            <div class="accountline">
                                                    <p class="text"> Account/Lines Summary<br>
                                                            No. of account : 1<br>
                                                            No. of lines : 1
                                                    </p>
                                                    <p class="note">* You can have only a maximum<br> of 2 accounts and maximum 4<br>lines to each of your account</p>
                                            </div>
                                    </div>
                                    <div class="col-xs-4 check-account">
                                        <div class="error-checkaccount"><p>Current<br>Account<br>summary</p></div>
                                    </div>
                            </div>
                    </div>
            </div>
    
            <div class="row" id="list-cart"></div>
    
            <div class="row">
                    <div class="col-xs-12 total-cart">
                            <p>Subtotal : <b id="sub-total">RM 0</b></p>
                            <p>GST <span id="gst-percent">0</span>% : <b id="gst">RM 0</b></p>
                            <p>Total : <b id="total-payment">RM 0</b></p>
                            <div class="buy-now">
                                    <a href="/credit-check-pass"><button>BUY NOW</button></a>
                            </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-xs-12">
                            <div class="terms" id="terms">
                                    <div class="title-terms">
                                            <a role="button" data-toggle="collapse" data-parent="#terms" href="#term-condition">
                                                    <p class="title">
                                                    Terms & Conditions 
                                                            <i class="fa fa-caret-up fa-2x"></i>
                                                    </p>
                                    </a>
                                        <hr>
                                    </div>
                                    <div id="term-condition" class="term-condition collapse in">
                                    <div class="term-condition">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                    </div>
            </div>
    </div>
</div>
<script>
	var listCart = new Object;
	var subTotal = 0;
	var GST = 0;
	var contentCart = '';

	if(localStorage.getItem("ListCart") !== null){
	    processCart();
	}
	
	function processCart(){
            listCart = JSON.parse(localStorage.getItem("ListCart"));

            if(listCart !== null){
                subTotal = 0;
                contentCart = "";
                var i = 0;
                Object.keys(listCart).forEach(function(key) {
                    contentCart += '<div class="col-xs-12">';
                    contentCart += '    <div class="list-product-cart">';
                    contentCart += '        <div class="row">';
                    contentCart += '            <div class="col-xs-4 cart-img">';
                    contentCart += '                    <img src="' + listCart[key].image + '" width="100" height="100">';
                    contentCart += '            </div>';
                    contentCart += '            <div class="col-xs-4 cart-title">';
                    contentCart += '                    <p>' + listCart[key].name + '<br>' + listCart[key].type + '</p>';
                    contentCart += '                    <a href="javascript:void(0)" class="cart-change"><p>CHANGE</p></a>';
                    contentCart += '            </div>';
                    contentCart += '            <div class="col-xs-4 cart-price">';
                    contentCart += '                    <h3>RM' + formatNumber(listCart[key].price) + ' <i class="fa fa-caret-down"></i></h3>';
                    contentCart += '                    <a href="javascript:void(0)" onclick="removeFromCart(' + listCart[key].id + ')" class="cart-remove"><p><i class="fa fa-trash-o"></i> REMOVE</p></a>';
                    contentCart += '            </div>';
                    contentCart += '            <div class="col-xs-12">';
                    contentCart += '                <div class="option-check-number">';
                    contentCart += '                    <p><input type="radio" name="op'+i+'" value="1" class="radio-keep" checked> Choose new number</p>';
                    contentCart += '                    <p><input type="radio" name="op'+i+'" value="2" class="radio-switch"> Switch my number line and keep this number</p>';
                    contentCart += '                </div>';
                    contentCart += '            </div>';
                    contentCart += '        </div>';
                    contentCart += '    </div>';
                    contentCart += '</div>';
                    
                    subTotal += parseInt(listCart[key].price);    
                });
                
                var gstAmount = (GST / 100) * subTotal;
                $("#gst-percent").html(GST);
                $("#gst").html("RM " + gstAmount);	
    
                $("#sub-total").html("RM " + formatNumber(subTotal));	
                $("#total-payment").html('<font style="font-size:40px;">' + "RM " + formatNumber(subTotal - gstAmount) + '</font>');	
                
                $("#list-cart").html(contentCart);
            }
            else{
                $("#sub-total").html("RM " + formatNumber(0));	
                $("#total-payment").html('RM ' + formatNumber(0));	
                
                $("#list-cart").html("");
            }            
	}
		
	function removeFromCart(productId){
            listCart = JSON.parse(localStorage.getItem("ListCart"));

	    delete listCart[productId];
	    localStorage.setItem("ListCart", JSON.stringify(listCart));
    
	    processCart();
	}
	
	function formatNumber (num) {
            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
        }

    </script>
    