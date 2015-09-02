<?php include('header-no-menu.php'); ?>
	<div class="back-to-cart header-no-menu">
		<div class="container-fluid">
			<a href="cart.php"><p><i class="fa fa-arrow-circle-left"></i> Back to your shopping cart</p></a>
		</div>
	</div>
	<div class="space"></div>
	<div class="container-fluid">
		<div class="row nav nav-pills">
            <div class="col-xs-3 tab-menu menustep1 active"><div class="row"><a data-toggle="pill" href="javascript:void(0)"><p>1.<br>Number Section</p></a></div></div>
            <div class="col-xs-3 tab-menu menustep2"><div class="row"><a data-toggle="pill" href="#javascript:void(0)"><p>2.<br>Account Registration</p></a></div></div>
            <div class="col-xs-3 tab-menu menustep3"><div class="row"><a data-toggle="pill" href="#javascript:void(0)"><p>3.<br>Order Summary</p></a></div></div>
            <div class="col-xs-3 tab-menu menustep4"><div class="row"><a data-toggle="pill" href="#javascript:void(0)"><p>4.<br>Payment</p></a></div></div>
        </div>
		<div class="tab-content">
        	<div id="tab-1" class="tab-pane fade in active">
				<div class="row">
		            <div class="col-xs-12">
						<h2>Complete your order</h2>
		        		<p><b>Step 1. Number Selection</b></p>
					</div>
					<div class="col-xs-12">
		        		<div class="row">
							<div class="col-xs-8 account-line">
								<div class="accountline">
									<p class="text"> Account/Lines Summary<br>
										No. of account : 1<br>
										No. of lines : 4
									</p>
									<p class="note">* You can have only a maximum<br> of 2 accounts and maximum 4<br>lines to each of your account</p>
								</div>
							</div>
							<div class="col-xs-4 check-account">
								<div class="error-checkaccount"><p>Current<br>Account<br>summary</p></div>
							</div>
						</div>
					</div>
					<div class="col-xs-12">
						<div id="step1Carousel" class="carousel slide" data-ride="carousel" data-interval="false">
		                    <div class="carousel-inner" role="listbox">
		                        <div class="item active">
		                        	<div class="list-product-cart">
										<div class="row">
											<div class="col-xs-4 cart-img">
												<img src="img/cart.jpg">
											</div>
											<div class="col-xs-4 cart-title">
												<p>Apple iPhone 6<br>16GB White</p>
											</div>
											<div class="col-xs-4 cart-price">
												<h3>RM149</h3>
												<b><p>(With SIM)</p></b>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12">
												<div class="pick-number">
													<h4>Pick your new number</h4>
													<div class="row">
														<div class="col-xs-12">
														<?php for ($i=1; $i <= 10; $i++){ ?>
														<div class="col-xs-6 list-number">6000000<?php echo $i ?></div>
														<?php } ?>
														</div>
													</div>
													<p>Not the number are you looking for? Key in your preferred last 5 digit.</p>
													<div class="row">
														<div class="col-xs-12">
															<div class="row">
																<div class="col-xs-6 submit-number"><input type="text" name="digit" value="" placeholder="12345"></div>
																<div class="col-xs-6 submit-number"><button>SUBMIT</button></div>
																<div class="col-xs-12 random-number"><button>GET NEW RANDOM NUMBERS</button></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<div class="btn-next">
												<a data-target="#step1Carousel" data-slide-to="1"><button>NEXT</button></a>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="list-product-cart">
										<div class="row">
											<div class="col-xs-4 cart-img">
												<img src="img/cart.jpg">
											</div>
											<div class="col-xs-4 cart-title">
												<p>New Plan<br>SIM Card</p>
											</div>
											<div class="col-xs-4 cart-price">
												<h3>RM149</h3>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12">
												<div class="pick-number">
													<h4>Pick your new number</h4>
													<div class="row">
														<div class="col-xs-12">
														<?php for ($i=1; $i <= 10; $i++){ ?>
														<div class="col-xs-6 list-number">6000000<?php echo $i ?></div>
														<?php } ?>
														</div>
													</div>
													<p>Not the number are you looking for? Key in your preferred last 5 digit.</p>
													<div class="row">
														<div class="col-xs-12">
															<div class="row">
																<div class="col-xs-6 submit-number"><input type="text" name="digit" value="" placeholder="12345"></div>
																<div class="col-xs-6 submit-number"><button>SUBMIT</button></div>
																<div class="col-xs-12 random-number"><button>GET NEW RANDOM NUMBERS</button></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<div class="btn-next">
												<a data-target="#step1Carousel" data-slide-to="2"><button>NEXT</button></a>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="list-product-cart">
										<div class="row">
											<div class="col-xs-4 cart-img">
												<img src="img/cart.jpg">
											</div>
											<div class="col-xs-8 cart-title">
												<p>Apple iPhone 6<br>16GB White</p>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12">
												<div class="keepNumber">
													<h4>Switch my line and keep this number</h4>
													<div class="row">
														<div class="col-xs-12">
															<div class="keepnumber">
												  				<p>MOBILE NUMBER <button>CHECK</button></p>
												  				<hr>
												  				<p class="error">Sorry your number is not eligible for porting.</p>
												  			</div>
														</div>
													</div>
													<p>Please key in the <span>X</span> supplementary mobile number that are nnumber this main line.</p>
													<div class="row">
														<div class="col-xs-12">
															<div class="checkNumber">
																<div class="row">
																<div class="col-xs-4 img-number"><img src="img/plan.jpg"></div>
																<div class="col-xs-8 check-number">
																	<p>supplementary line SIM Card</p>
																	<input type="text" placeholder="MOBILE NUMBER"><button>CHECK</button>
																</div>
																<div class="col-xs-12 tax-code"><input type="text" placeholder="TAX CODE"><button>VERIFY</button></div>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-xs-12">
															<div class="checkNumber">
																<div class="row">
																	<div class="col-xs-4 img-number"><img src="img/plan.jpg"></div>
																	<div class="col-xs-8 check-number">
																		<p>supplementary line SIM Card</p>
																		<input type="text" placeholder="MOBILE NUMBER" disabled>
																		<p class="error">This number has been verified.</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-xs-12">
															<div class="row tipe-line">
																<div class="col-xs-4"><p>Type of line</p></div>
																<div class="col-xs-4"><input type="radio" name="t-line" value="1"> Bussiness</div>
																<div class="col-xs-4"><input type="radio" name="t-line" value="2"> Personal</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-xs-12">
															<div class="ic-pass">
												  				<p>IC / PASSPORT NO.</p>
												  				<hr>
												  				<select name="icpass">
												  					<option>CURRENT SERVER PROVIDER</option>
												  				</select>
												  				<p>Disclaimer :</p>
												  				<ul>
												  					<li>Make sure all this supplementary line is ported out.</li>
												  					<li>IC/Passport no. used must be the same as the registration with previous OLNO</li>
												  					<li>No overdue payment</li>
												  					<li>No contact</li>
												  				</ul>
												  			</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<div class="btn-next">
												<a data-toggle="pill" href="#tab-2" id="menustep2"><button>NEXT</button></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        	<div id="tab-2" class="tab-pane fade">
        		<div class="row">
        			<div class="col-xs-12">
						<h2>Complete your order</h2>
		        		<p><b>Step 2. Account Registration</b></p>
		        		<p class="note">All fields are mandatory</p>
					</div>
        			<div class="col-xs-12">
						<form>
							<div class="form-step2">
								<input type="text" placeholder="FULLNAME">
								<input type="text" placeholder="EMAIL ADDRESS">
								<input type="text" placeholder="IC / PASSPORT NO.">
								<input type="text" placeholder="ADDRESS 1">
								<input type="text" placeholder="ADDRESS 2">
								<input type="text" placeholder="POSTCODE">
								<input type="text" placeholder="CITY">
								<input type="text" placeholder="STATE">
								<select>
									<option>COUNTRY</option>
								</select>
								<input type="text" placeholder="MOBILE">
								<ul class="gender">
									<li>GENDER</li>
									<li><input type="radio" name="gender"> MALE</li>
									<li><input type="radio" name="gender"> FEMALE</li>
								</ul>
								<select>
									<option>RACE</option>
								</select>
								<p>DATE OF BIRTH</p>
								<div class="datebirth">
									<div class="col-xs-4"><select><option>DAY</option></select></div>
									<div class="col-xs-4"><select><option>MONTH</option></select></div>
									<div class="col-xs-4"><select><option>YEAR</option></select></div>
								</div>
								<select>
									<option>NATIONALITY</option>
								</select>
								<p><b>DELIVERY OPTIONS</b></p>
								<div class="rdo">
									<p><input type="radio" name="del" class="radio-pickup"> SELF-PICKUP</p>
									<div class="self-pickup">
										<p>Select the store:</p>
										<select><option>STORE LOCATION</option></select>
										<ul class="getstore">
											<li><a href="javascript:void(0)">Get all stores</a></li>
											<li><a href="javascript:void(0)">Get nearest to my address</a></li>
										</ul>
										<p>Select pikup time:</p>
										<select><option>STORE AVAILABLE TIMING</option></select>
										<p>Pickup time will only be available by Y hour after the payment is completed.</p>
									</div>
									<p><input type="radio" name="del" class="radio-delivery"> DELIVERY TO DOORSTEP</p>
									<div class="doorstep">
										<p><input type="radio" name="doorstep" class="radio-mailing-address" checked> USE MAILING ADDRESS</p>
										<p><input type="radio" name="doorstep" class="radio-altenative-address"> USE ALTERNATIVE ADDRESS</p>
										<div class="altenative-address">
											<input type="text" placeholder="ADDRESS 1">
											<input type="text" placeholder="ADDRESS 2">
											<input type="text" placeholder="POSTCODE">
											<input type="text" placeholder="CITY">
											<input type="text" placeholder="STATE">
											<p class="note">Shipping charges applies*</p>
										</div>
									</div>
								</div>
								<div class="btn-form-step2">
									<a data-toggle="pill" href="#tab-1" id="menustep1"><input type="submit" name="back" value="BACK"></a>
									<a data-toggle="pill" href="#tab-3" id="menustep3"><input type="submit" name="submit" value="SUBMIT"></a>
								</div>
							</div>
						</form>
					</div>
        		</div>
			</div>
        	<div id="tab-3" class="tab-pane fade">
        		<div class="row">
        			<div class="col-xs-12">
        				<div id="step3Carousel" class="carousel slide" data-ride="carousel" data-interval="false">
		                    <div class="carousel-inner" role="listbox">
		                        <div class="item active">
									<div class="step3-title">
										<h2>Complete your order</h2>
			        					<p><b>Step 3. Order Summary</b></p>
		        					</div>
				        			<div class="step3-list-prod">
				        				<table>
				        					<tr align="left" valign="top">
				        						<td width="10%">1.</td>
				        						<td width="65%">Samsung GALAXY Note 4<br>32GB Black (SIM Include)</td>
				        						<td width="25%"></td>
				        					</tr>
				        					<tr align="right">
				        						<td></td>
				        						<td align="right">Device Price (With SIM) :</td>
				        						<td align="left">RM 400</td>
				        					</tr>
				        					<tr>
				        						<td></td>
				        						<td align="right">Online discount :</td>
				        						<td align="left">(RM 30)</td>
				        					</tr>
				        					<tr>
				        						<td></td>
				        						<td align="right">Loyalty discount :</td>
				        						<td align="left">(RM 30)</td>
				        					</tr>
				        					<tr>
				        						<td></td>
				        						<td align="right">Tiered discount :</td>
				        						<td align="left">(RM 30)</td>
				        					</tr>
				        					<tr align="right">
				        						<td></td>
				        						<td><p class="note">(for 3rd line subscription and above)</p></td>
				        						<td></td>
				        					</tr>
				        					<tr>
				        						<td></td>
												<td align="right">Device discount :</td>
												<td align="left">(RM 30)</td>
				        					</tr>
				        					<tr align="right">
				        						<td></td>
				        						<td><p class="note">(applicable if SIM is include)</p></td>
				        						<td></td>
				        					</tr>
				        					<tr>
				        						<td></td>
												<td align="right">Voucher discount :</td>
												<td align="left">(RM 30)</td>
				        					</tr>
				        					<tr align="right">
				        						<td></td>
				        						<td><p class="note">(voucher is valid till 31 july 2015)</p></td>
				        						<td></td>
				        					</tr>
				        					<tr align="right">
				        						<td></td>
				        						<td>
				        							<div class="voucher" id="voucher">
														<div class="title-voucher">
															<a role="button" data-toggle="collapse" data-parent="#voucher" href="#input-voucher">
																<p class="title">
					        										Do you have any voucher code?
																	<i class="fa fa-caret-up"></i>
																</p>
													        </a>
														</div>
														<div id="input-voucher" class="input-voucher collapse in">
												      		<div class="input-voucher">
												      			<input type="text" name="voucher" placeholder="INPUT VOUCHER CODE">
													      	</div>
												      		<div class="btn-voucher">
												      			<button>Submit</button>
													      	</div>
													    </div>
													</div>
												</td>
				        						<td></td>
				        					</tr>
				        					<tr align="left">
				        						<td></td>
				        						<td>Your new number : </td>
				        						<td></td>
				        					</tr>
				        					<tr align="left">
				        						<td></td>
				        						<td><p>XXX-XXXX-XXX</p></td>
				        						<td></td>
				        					</tr>
				        					<tr align="left">
				        						<td></td>
				        						<td>Delivery Options: Self-pickup</td>
				        						<td></td>
				        					</tr>
				        					<tr align="left">
				        						<td></td>
				        						<td>Store A Petaling Jaya Store A Address</td>
				        						<td></td>
				        					</tr>
				        					<tr align="left" valign="top">
				        						<td>2.</td>
				        						<td>Supplementary Line SIM Card<br>(with plan)</td>
				        					</tr>
				        					<tr align="left">
				        						<td></td>
				        						<td>Main line : XXX-XXXX-XXX</td>
				        						<td></td>
				        					</tr>
				        					<tr align="left">
				        						<td></td>
				        						<td>Exiting line : XXX-XXXX-XXX</td>
				        						<td></td>
				        					</tr>
				        					<tr>
				        						<td></td>
				        						<td align="right">Price:</td>
				        						<td align="left">RM 200</td>
				        					</tr>
				        					<tr align="left" valign="top">
				        						<td>3.</td>
				        						<td>Supplementary Line SIM Card<br>(without plan)</td>
				        					</tr>
				        					<tr align="left">
				        						<td></td>
				        						<td>Main line : XXX-XXXX-XXX</td>
				        						<td></td>
				        					</tr>
				        					<tr align="left">
				        						<td></td>
				        						<td>Exiting line : XXX-XXXX-XXX</td>
				        						<td></td>
				        					</tr>
				        					<tr>
				        						<td></td>
				        						<td align="right">Price:</td>
				        						<td align="left">RM0</td>
				        					</tr>
				        					<tr align="left" valign="top">
				        						<td>4.</td>
				        						<td>New Plan SIM Card</td>
				        					</tr>
				        					<tr>
				        						<td></td>
				        						<td align="right">Online discount :</td>
				        						<td align="left">(RM 30)</td>
				        					</tr>
				        					<tr>
				        						<td></td>
				        						<td align="right">Loyalty discount :</td>
				        						<td align="left">(RM 30)</td>
				        					</tr>
				        					<tr>
				        						<td></td>
				        						<td align="right">Tiered discount :</td>
				        						<td align="left">(RM 30)</td>
				        					</tr>
				        					<tr align="right">
				        						<td></td>
				        						<td><p class="note">(for 3rd line subscription and above)</p></td>
				        						<td></td>
				        					</tr>
				        					<tr>
				        						<td></td>
												<td align="right">Voucher discount :</td>
												<td align="left">(RM 30)</td>
				        					</tr>
				        					<tr align="right">
				        						<td></td>
				        						<td><p class="note">(voucher is valid till 31 july 2015)</p></td>
				        						<td></td>
				        					</tr>
				        					<tr align="right">
				        						<td></td>
				        						<td>
				        							<div class="voucher" id="voucher">
														<div class="title-voucher">
															<a role="button" data-toggle="collapse" data-parent="#voucher" href="#input-voucher">
																<p class="title">
					        										Do you have any voucher code?
																	<i class="fa fa-caret-up"></i>
																</p>
													        </a>
														</div>
														<div id="input-voucher" class="input-voucher collapse in">
												      		<div class="input-voucher">
												      			<input type="text" name="voucher" placeholder="INPUT VOUCHER CODE">
													      	</div>
												      		<div class="btn-voucher">
												      			<button>Submit</button>
													      	</div>
													    </div>
													</div>
												</td>
				        						<td></td>
				        					</tr>
				        					<tr align="left">
				        						<td></td>
				        						<td>Your new number : </td>
				        						<td></td>
				        					</tr>
				        					<tr align="left">
				        						<td></td>
				        						<td><p>XXX-XXXX-XXX</p></td>
				        						<td></td>
				        					</tr>
				        					<tr align="left">
				        						<td></td>
				        						<td>Delivery Options: Self-pickup</td>
				        						<td></td>
				        					</tr>
				        					<tr align="left">
				        						<td></td>
				        						<td>Store A Petaling Jaya Store A Address</td>
				        						<td></td>
				        					</tr>
				        				</table>
			        				</div>
			        				<div class="step3-total">
			        					<table>
			        						<tr>
			        							<td width="10%"></td>
			        							<td width="65%" align="right">Foreigner Deposit Fees: </td>
			        							<td width="25%" align="left">RM XXX</td>
			        						</tr>
			        						<tr>
			        							<td></td>
			        							<td align="right">Delivery Fees: </td>
			        							<td align="left">RM XXX</td>
			        						</tr>
			        						<tr>
			        							<td></td>
			        							<td align="right">Subtotal: </td>
			        							<td align="left">RM 1130.00</td>
			        						</tr>
			        						<tr>
			        							<td></td>
			        							<td align="right">GST 6%:</td>
			        							<td align="left">RM 67.80</td>
			        						</tr>
			        						<tr>
			        							<td></td>
			        							<td align="right">Total payable: </td>
			        							<td align="left"><b>RM 1197.80</b></td>
			        						</tr>
			        					</table>
			        				</div>
			        				<div class="row step3-btn">
			        					<div class="col-xs-12"><button data-target="#step3Carousel" data-slide-to="1">SAVE & PAY LATER</button><button data-target="#step3Carousel" data-slide-to="1">PAY & SAVE NOW</button></div>
			        				</div>
			        			</div>
			        			<div class="item">
			        				<div class="step3-success">
			        					<div class="title">
			        						<p><b>Your order has been saved. Pleas make a payment in order to complete you order.</b></p>
			        					</div>
			        					<div class="title-order">
			        						<p><b>You may come back again to modify your sales order using the following QR code / barcode.</b></p>
			        					</div>
			        					<div class="order">
			        						<p><b>Your sales order reference number:</b></p>
			        						<p>9-00000001</p>
			        					</div>
			        					<div class="link">
			        						<p><b>Quick link:</b></p>
			        						<p>http://www.p1.com.my/salesorder/9-00000001</p>
			        					</div>
			        					<div class="barcode">
			        						<img src="img/barcode.jpg">
			        					</div>
			        					<div class="payment">
			        						<p><b>Payment methods:</b></p>
			        						<p>Lorem ipsum si doler amet Lorem ipsum si doler amet Lorem ipsum si doler amet Lorem ipsum si doler amet Lorem ipsum si doler amet Lorem ipsum si doler amet Lorem ipsum si doler amet Lorem ipsum si doler amet Lorem ipsum si doler amet Lorem ipsum si doler amet.</p>
			        					</div>
			        					<div class="change">
			        						<p><b>Change your order:</b></p>
			        						<p>Lorem ipsum si doler amet Lorem ipsum si doler amet Lorem ipsum si doler amet Lorem ipsum si doler amet Lorem ipsum si doler amet Lorem ipsum si doler amet Lorem ipsum si doler amet Lorem ipsum si doler amet Lorem ipsum si doler amet Lorem ipsum si doler amet.</p>
			        					</div>
			        					<div class="right step3-btn">
											<button data-toggle="pill" href="#tab-4" id="menustep4">SUBMIT</button>
										</div>
			        				</div>
			        			</div>
			        		</div>
			        	</div>
        			</div>
        		</div>
			</div>
        	<div id="tab-4" class="tab-pane fade">
        		<div class="row">
					<div class="col-xs-12">
						<div id="step4Carousel" class="carousel slide" data-ride="carousel" data-interval="false">
		                    <div class="carousel-inner" role="listbox">
		                        <div class="item active">
		                        	<div class="step4-title">
										<h2>Complete your order</h2>
						        		<p><b>Step 4. Payment</b></p>
						        		<p>Please select your preferred payment method.</p>
									</div>
									<div class="step4-payment">
										<div class="payment">
											<input type="radio" name="payment" value="1"> Credit / debit Card
										</div>
										<div class="payment">
											<input type="radio" name="payment" value="2" checked> Online banking
										</div>
									</div>
									<div class="note">
										<p>* Cash payment is available over the counter only</p>
									</div>
									<div class="step4-btn">
										<button data-target="#step4Carousel" data-slide-to="1">SUBMIT</button>
									</div>
								</div>
								<div class="item">
									<div class="step4-title">
										<h2>Complete your order</h2>
						        		<p><b>Step 4. Online Transfer</b></p>
						        		<p>For payment through online transfer please key in the following reference sales for us to identify your sales order.</p>
									</div>
									<div class="step4-no">
										<h3>9-XXXXXXXXXXXXX-1</h3>
									</div>
									<div class="step4-btn">
										<button>SUBMIT</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include('footer.php'); ?>