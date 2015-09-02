<?php session_start(); ?>

<div id="pageloader" class="hide">   
    <div class="loader">
        <img src="/website/static/Wireframe/img/loading.gif" width="120" alt="loader">
    </div>
</div>

<?php if(explode("/", $_SERVER['REQUEST_URI'])[1] != 'cart'){ ?>
    <div class="icon-cart">
        <a href="/cart"> <span id="count-cart"></span> <i class="fa fa-shopping-cart fa-2x"></i></a>
    </div>
    <script>
    </script>
<?php } ?>

<div class="container-fluid header">
    <div class="row P1title">
        <div class="col-xs-6 text-left img-logo">
            <a href="/"><img src="/website/static/Wireframe/img/img-logo.jpg"></a>
        </div>
        <div class="col-xs-6 text-right languange">
            <select>
                <option>English</option>
            </select>
            <a href="javascript:void(0)" id="modal-login">
                <i class="fa fa-sign-in fa-2x"></i>
            </a>
            <button class="menu-nav" id="menu-account">
                <span class="fa fa-user fa-2x"></span>
            </button>
        </div>
    </div>

    <!-- Member -->
    <?php 
        session_start();
        $getCustomer=Website_P1GlobalFunction::CallAPI("POST", "alphaone.imkepo.com/core/customer/login",array('' =>"")); 
        $getcustomers=json_decode($getCustomer);
     ?>   
    <div class="row menu-nav-list">
        <div class="col-xs-12 text-center userinfo">
            <p>Welcome <span id="username-on-header"><?php echo $_SESSION['name']; ?>,</span></p>
            <p style="cursor: pointer;" onclick="logoutAccount();"><i class="fa fa-sign-out"></i> Logout</p>
        </div>
        <div class="col-xs-12 menu-list">
            <div class="col-xs-6">
                <a href="/selfcare-account-summary">
                    <div>
                        <p>ACCOUNT SUMMARY</p>
                    </div>
                </a>
            </div>
            <div class="col-xs-6">
                <a href="/selfcare-bill-history">
                    <div>
                        <p>BILL HISTORY</p>
                    </div>
                </a>
            </div>
            <div class="col-xs-6">
                <a href="/selfcare-order-activity">
                    <div>
                        <p>SALES ORDERS</p>
                    </div>
                </a>
            </div>
            <div class="col-xs-6">
                <a href="/selfcare-check-coverage">
                    <div>
                        <p>CHECK COVERAGE</p>
                    </div>
                </a>
            </div>
            <div class="col-xs-6">
                <a href="/selfcare-order-tracking">
                    <div>
                        <p>ORDER TRACKING</p>
                    </div>
                </a>
            </div>
            <div class="col-xs-6">
                <a href="/selfcare-faq">
                    <div>
                        <p>FAQ</p>
                    </div>
                </a>
            </div>
            <div class="col-xs-6">
                <a href="/selfcare-personal-information">
                    <div>
                        <p>PERSONAL INFORMATION</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Member -->
</div>

<!-- Non Member -->
<div class="modal fade" id="modalLogin">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <p class="text-center">To get the best deal on P1, login with one of the methods below.</p>
                <p class="text-center">Don't have an account ? <a href="/selfcare/registration-selfcare"><u>Sign up now!</u></a></p>
            </div>
            <div class="row modal-body">
                <div class="col-xs-6">
                    <div class="loginOption">
                        <a href="javascript:void(0);" class="google-plus"><i class="fa fa-google-plus-square fa-2x"></i> Login with Google</a>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="loginOption">
                        <a href="javascript:void(0);" class="facebook"><i class="fa fa-facebook-square fa-2x"></i> Login with Facebook</a>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="loginOption">
                        <a href="javascript:void(0);" class="email" id="loginEmail"><i class="fa fa-envelope-o fa-2x"></i> Login with Email</a>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="loginOption last">
                        <a href="javascript:void(0);" class="signin" id="loginNow"><i class="fa fa-pencil-square-o fa-2x"></i> Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    $getCustomer=Website_P1GlobalFunction::CallAPI("POST", "alphaone.imkepo.com/core/customer/login",array('' =>"")); 
    $getcustomers=json_decode($getCustomer);
?>   
<div class="modal fade" id="LoginNow">
    <form id="form-login" method="POST" action="">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <div class="modal-title left">
                            <ul class="title-login">
                                <li><i class="fa fa-sign-in fa-3x"></i></li>
                                <li><p style="font-size: xx-large;">Login</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-login">
                            <input type="text" name="username" id="username" value="" maxlength="150" placeholder="USERNAME">
                            <input type="password" name="password" id="password" value="" maxlength="50" placeholder="PASSWORD">
                            <p class="text-right"><a href="/forgot-password">Need help?</a></p>
                            <input type="button" name="Submit" value="Submit" class="submit-form" id="Successlogin" onclick="loginAccount();">
                        </div>
                    </div>
                </div>
            </div>
    </form>    
</div>

<div class="modal fade" id="cancelOrder">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-title left">
                    <ul class="title-login">
                        <li><i class="fa fa-exclamation-triangle fa-3x"></i></li>
                        <li><p style="font-size: larger;"><b>Are you sure you<br>want to cancel?</b></p></li>
                    </ul>
                </div>
            </div>
            <div class="modal-body">
                <div class="form-cancel-order">
                    <input type="text" name="username" value="" placeholder="TYPE DELETE TO CONFIRM">
                    <p>Tell us your reason</p>
                    <select>
                        <option>NO LONGER INTEREST</option>
                    </select>
                    <p>Remarks</p>
                    <textarea></textarea>
                    <div class="text-center">
                        <input type="submit" name="Submit" value="Submit" id="Submit">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="timesUp">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title timesup text-center">
                    <h4><i class="fa fa-clock-o fa-4x"></i></h4>
                    <p><b>Time's up!</b></p>
                </div>
            </div>
            <div class="modal-body timesup">
                <h5><b>Do you need mote time to submit your order?</b></h5>
                <div class="timesup-option">
                    <button>YES</button> <button>NO</button>
                </div>
                <p>If you select "YES", you will have an aditional 5 min to complete your order.</p>
            </div>
        </div>
    </div>
</div>
<!-- Non Member -->

<script>    
    localStorage.setItem("username", "<?php echo $_SESSION['username']; ?>");
    refreshCart();
    
    if(!isLogin()){
        $('#menu-account').hide();                   
        $('#modal-login').show();
    }
    else{
        $('#menu-account').show();                   
        $('#modal-login').hide();
    }
    
    function isLogin() {
        return !(localStorage.getItem("username") === null || localStorage.getItem("username") === "");
    }
    
    function refreshCart() {
        var listCart;
        
        if(localStorage.getItem("ListCart") !== null){
            listCart = JSON.parse(localStorage.getItem("ListCart"));
            $('#count-cart').html(Object.keys(listCart).length);
            if (Object.keys(listCart).length > 0) {
                $('#count-cart').css("backgroundColor", "red");					
            }
            else{
                $('#count-cart').css("backgroundColor", "gray");					
            }
        }
        else{
            $('#count-cart').html(0);
            $('#count-cart').css("backgroundColor", "gray");					
        }
    }
    
    function addCartToLocal(id, type, name, price, image){
        var listCart = new Object;
        var tempProduct;
        if(localStorage.getItem("ListCart") !== null){
            listCart = JSON.parse(localStorage.getItem("ListCart"));                    
        }

        tempProduct = { "id" : id, "type" : type, "name" : name, "price" : price, "image" : image };
        
        listCart[id] = tempProduct;                                
        localStorage.setItem("ListCart", JSON.stringify(listCart));        
    }

    function getCartUser() {        
        var idCustomer = 157;
        var ipAddress = '192.168.1.1';

        $.ajax({
            url: "core/cart/get",
            type: "POST",
            data: { id_customer:idCustomer, ip_address:ipAddress },
            success: function(returnAPI) {                    
//                console.log(returnAPI);
                if(returnAPI.status == "success"){
                    var dataCart = returnAPI.data;
                    
                    var bundle = dataCart.Bundle;
                    var plans = dataCart.Plans;
                    if (Bundle.length > 0) {
                        for(var i in bundle){
                            addCartToLocal(
                                  bundle[i].Id,
                                  "bundle",
                                  bundle[i].Name,
                                  bundle[i].Price,
                                  bundle[i].Image                                
                                );
                        }                        
                    }
                    
                    if (plans.length > 0) {
                        for(var i in plans){
                            addCartToLocal(
                                  plans[i].Id,
                                  "plan",
                                  plans[i].Name,
                                  plans[i].Price,
                                  plans[i].Image                                
                                );
                        }                        
                    }

                    $("#pageloader").addClass("hide");
                    refreshCart();

                    try{
                        processCart();                          
                    }catch(ex){}
                }
                else{
                    $("#pageloader").addClass("hide");
                }
            },
            error: function (xhr, desc, err)
            {
                $("#pageloader").addClass("hide");
            }             
        });
    }

    function loginAccount() {
        $("#pageloader").removeClass("hide");
        var dataForm = $('#form-login').serialize();

        $.ajax({
            url: "core/customer/login",
            type: "POST",
            data: dataForm,
            success: function(returnAPI) {                    
//                 console.log(returnAPI);
                 if(returnAPI.status == "Success"){
                        localStorage.setItem("username", returnAPI.data.Username);
                        alert("Welcome, " + returnAPI.data.Name);
                        $('#username-on-header').html(returnAPI.data.Name);
                        $('#menu-account').show();                   
                        $('#modal-login').hide();	                    
                        $('.close').click();
                        getCartUser();                        
                 }
                 else{
                     alert("Username and password not valid");	                    
                 }
             },
             error: function (xhr, desc, err)
             {
                alert("error");
             }             
        });
    }

    function logoutAccount(){
        var username = localStorage.getItem("username");
        
        $.ajax({
            url: "core/customer/logout",
            type: "POST",
            data: { username : username },
            success: function(returnAPI) {                    
  //              console.log(returnAPI);                
                if(returnAPI.status == "Success"){
                    localStorage.clear();
                    alert(returnAPI.message);  
                    $('#menu-account').click();                              
                    $('#menu-account').hide();                   
                    $('#modal-login').show();
                    refreshCart();

                    try{
                        processCart();                          
                    }catch(ex){}
                }
                else{
                    alert("Proses logout gagal");                       
                }
            },
            error: function (xhr, desc, err)
            {
                alert("proses logout gagal");
            }           
        });
    }    
            
</script>