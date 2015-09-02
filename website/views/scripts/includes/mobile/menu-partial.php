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
        				<a class="navbar-brand" href="/">P1 Project Alpha</a>
        		</div>
                <!-- <div id="cart" class="cart-collapse collapse">
                    <p>Your shopping cart is empty!</p>
                </div>
                <div id="user" class="user-collapse collapse">
                    Form Login is Comming Soon!
                </div> -->
        		<div id="navbar" class="navbar-collapse collapse">
          			<ul class="nav navbar-nav navbar-right">
        	            <li class="active" id="home"><a href="/">Home</a></li>
        	            <li><a href="/product" id="product">Product</a></li>
        	            <li class="compact-only" id="cart"><a href="/cart"><i class="fa fa-shopping-cart"></i> Shopping Cart</a></li>
        	            <li class="compact-only" id='login'><a href="javascript:void(0)" class="md-trigger" data-modal="modal-1"><i class="fa fa-user"></i> </a></li>
          			</ul>
        		</div><!--/.nav-collapse -->
        		</div>
        </nav>
    </div>
</div>
<?php echo $this->template("user/login.php")?>
