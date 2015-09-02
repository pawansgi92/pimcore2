        <div class="container-fluid">
    		<div class="row">
	    		<!-- Fixed navbar -->
	    		<nav class="navbar navbar-default">
	      			<div class="container">
	        			<div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
	          				<button type="button" class="user-toggle collapsed md-trigger" data-modal="modal-1">
                                <i class="fa fa-user"></i> 
                            </button>
                            <a class="cart-toggle collapsed" data-toggle="collapse" data-target="#cart" aria-expanded="false" aria-controls="navbar">
                                <i class="fa fa-shopping-cart"></i> <span> 1 </span>
                            </a>
	          				<a class="navbar-brand" href="index.php">P1 Project Alpha</a>
	        			</div>
                        <!-- <div id="cart" class="cart-collapse collapse">
                            <p>Your shopping cart is empty!</p>
                        </div>
                        <div id="user" class="user-collapse collapse">
                            Form Login is Comming Soon!
                        </div> -->
		        		<div id="navbar" class="navbar-collapse collapse">
		          			<ul class="nav navbar-nav navbar-right">
					            <li class="active"><a href="index.php">Home</a></li>
					            <li><a href="product.php">Product</a></li>
					            <li class="compact-only"><a href="javascript:void(0)"><i class="fa fa-shopping-cart"></i> Shopping Cart</a></li>
					            <li class="compact-only"><a href="javascript:void(0)" class="md-trigger" data-modal="modal-1"><i class="fa fa-user"></i> </a></li>
		          			</ul>
		        		</div><!--/.nav-collapse -->
	      			</div>
    		    </nav>
            </div>
    	</div>
        <div class="md-modal md-effect-1" id="modal-1">
            <div class="md-content">
                <h3>Login</h3>
                <button class="md-close">X</button>
                <div>
                    <form action="">
                        <section class="content">
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="text" id="input-4" />
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                                    <span class="input__label-content input__label-content--hoshi">Email</span>
                                </label>
                            </span>
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="password" id="input-5" />
                                <label class="input__label input__label--hoshi input__label--hoshi-color-2" for="input-5">
                                    <span class="input__label-content input__label-content--hoshi">Password</span>
                                </label>
                            </span>
                            <div class="RememberMe">
                                <ul class="login">
                                    <li><input type="checkbox" name="rememberMe" value="1" class="rememberMe"> Remember Me</li>
                                    <li>
                                        <section>
                                            <button class="progress-button" data-style="top-line" data-horizontal>Login</button>
                                        </section>
                                    </li>         
                                </ul>
                                <ul class="forgot">
                                    <li><a href="javascript:void(0)">forgot password ?</a></li>
                                    <li>|</li>
                                    <li><a href="javascript:void(0)">Sign Up ?</a></li>
                                </ul>
                            </div>
                        </section>
                    </form>
                </div>
            </div>
        </div>
        <!--<div class="md-modal md-effect-1" id="modal-2">
            <div class="md-content">
                <h3>Sign Up</h3>
                <button class="md-close">X</button>
                <div>
                    <form action="">
                        <section class="content">
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="text" id="input-4" />
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                                    <span class="input__label-content input__label-content--hoshi">Email</span>
                                </label>
                            </span>
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="password" id="input-5" />
                                <label class="input__label input__label--hoshi input__label--hoshi-color-2" for="input-5">
                                    <span class="input__label-content input__label-content--hoshi">Password</span>
                                </label>
                            </span>
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="password" id="input-6" />
                                <label class="input__label input__label--hoshi input__label--hoshi-color-2" for="input-5">
                                    <span class="input__label-content input__label-content--hoshi">Confirm Password</span>
                                </label>
                            </span>
                            <div class="RememberMe">
                                <ul class="login">
                                    <li><a href="javascript:void(0)" class="md-trigger login" data-modal="modal-1">do you have account ?</a></li>
                                    <li>
                                        <section>
                                            <button class="progress-button" data-style="top-line" data-horizontal>Sign Up</button>
                                        </section>
                                    </li>         
                                </ul>
                            </div>
                        </section>
                    </form>
                </div>
            </div>
        </div>-->
        <div class="md-overlay"></div>