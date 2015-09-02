    <?php

        $id = $this->_getParam('id');
        $getProduct=Website_P1GlobalFunction::CallAPI("POST", "alphaone.imkepo.com/core/product/getproduct",array('id'  =>$id)); 
        $resultProduct=json_decode($getProduct);
        
        // foreach ($result as $value) {
        //    echo "<pre>";
        // print_r($value);die();
        // }

        $image_product = '';

        foreach ($resultProduct as $result) {
        
    ?>

    <div class="container-fluid header-no-menu">
            <ul class="breadcrumb">
                    <li><a href="#"><h3>Store</h3></a></li>
                    <li><h3>&gt;</h3></li>
                    <li><a href="#"><h3>Mobile</h3></a></li>
                    <li><h3>&gt;</h3></li>
                    <li class="active"><h3><?php echo $result->data[0]->Name; ?></h3></li>
            </ul>
            <div class="row">
                    <div class="col-xs-8">
                            <div class="main-product">
                                <?php
                                    // echo "<pre>"; print_r($result->data[0]->images); die();
                    
                                    echo '<img src="'. $result->data[0]->Images->path.$result->data[0]->Images->filename .'"  style="max-height:280px;">';
                                ?>
                            </div>
                    </div>
                    <div class="col-xs-4">
                            <ul class="thumb-product">
                                <li><img src="<?php echo $result->data[0]->Images->path.$result->data[0]->Images->filename; ?>"  style="max-height:66px;"></li>
                            </ul>
                    </div>
            </div>
            <div class="row">
                    <div class="col-xs-12">
                            <div class="model">
                                    <div class="title-model">
                                            <p>Models</p>
                                            <hr>
                                    </div>
                                    <ul class="list-model">
                                            <li><input type="radio" name="model" value="1" checked> 16GB</li>
                                            <li><input type="radio" name="model" value="2"> 32GB</li>
                                            <li><input type="radio" name="model" value="3"> 64GB</li>
                                    </ul>
                            </div>
                            <div class="color">
                                    <div class="title-color">
                                            <p>Color</p>
                                            <hr>
                                    </div>
                                    <ul class="list-color">
                                            <li><input type="radio" name="color" value="1"> White</li>
                                            <li><input type="radio" name="color" value="2" checked> Silver</li>
                                            <li><input type="radio" name="color" value="3"> Black</li>
                                    </ul>
                            </div>
                            <?php
                            // echo "<pre>";
                            // print_r($result->data[0]); 
                            // echo "</pre>";
                             ?>
                            
                            <div class="addinfo-product">
                                    <div class="row">
                                            <div class="col-xs-6">
                                                    <h3>RM <?php echo $result->data[0]->Price?></h3>
                                                    <p><b>(price device)</b></p>    
                                            </div>
                                            <div class="col-xs-6">
                                                    <h3>RM 0<?php //echo $result->Plans->Price ?></h3>
                                                    <p><b>(price plan)</b></p>
                                            </div>
                                            <div class="col-xs-12">
                                                    <h3>RM <?php echo $result->data[0]->Price?></h3>
                                                    <p>(price bundle)</p>
                                            </div>
                                    </div>
                            </div>
                            <div class="addinfo-producttable">
                                <div class="container-fluid">
                                    <div class="row" style="padding-bottom: 20px;">
                                        <table width="100%" align="center" class="text-center" border="1">
                                            <tr>
                                                <td width="25%"></td>
                                                <td width="25%"><b>new User</b></td>
                                                <td width="25%"><font style="color: lightgrey;">exiting User</font></td>
                                                <td width="25%"><font style="color: lightgrey;">exiting User</font></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td><font style="color: lightgrey;">Non-P1 Subscriber</font></td>
                                                <td><font style="color: lightgrey;">P1 Subscriber</font></td>
                                            </tr>
                                            <tr>
                                                <td>Device Price</td>
                                                <td><b>RM500</b></td>
                                                <td><font style="color: lightgrey;">RM500</font></td>
                                                <td><font style="color: lightgrey;">RM500</font></td>
                                            </tr>
                                            <tr>
                                                <td>Online discount</td>
                                                <td><b>N.A.</b></td>
                                                <td><font style="color: lightgrey;">Yes</font></td>
                                                <td><font style="color: lightgrey;">Yes</font></td>
                                            </tr>
                                            <tr>
                                                <td>Loyalti discount</td>
                                                <td><b>N.A.</b></td>
                                                <td><font style="color: lightgrey;">N.A</font></td>
                                                <td><font style="color: lightgrey;">Yes</font></td>
                                            </tr>
                                            <tr>
                                                <td>Price (with NewCo plan)</td>
                                                <td><b>RM300</b></td>
                                                <td><font style="color: lightgrey;">RM200</font></td>
                                                <td><font style="color: lightgrey;">RM100</font></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row stock-cart">
                                    <div class="col-xs-6">
                                            <p>Stock Availability:<font style="color: red;"><br>SELLING FAST<br>5 left!</font></p>
                                    </div>
                                    <div class="col-xs-6">
                                            <div class="btn-addcart">
                                                    <a href="javascript:void(0);" onclick="addToCart();"><button>ADD TO CART</button></a>
                                            </div>
                                    </div>
                            </div>
                            <div class="spesification" id="spesification">
                                    <div class="title-spesification">
                                            <a role="button" data-toggle="collapse" data-parent="#spesification" href="#desc-spesification">
                                                    <p class="title">
                                                    Spesifications 
                                                            <i class="fa fa-caret-up"></i>
                                                    </p>
                                    </a>
                                        <hr>
                                    </div>
                                    <div id="desc-spesification" class="desc-spesification collapse in">
                                    <div class="desc-spesification">
                                        <?php echo $result->description ?>
                                    </div>
                                </div>
                            </div>
                            <div class="check-compactibility">
                                <a href="/device-compactibility"><button>Check device compactiboility <i class="fa fa-paper-plane"></i></button></a>
                            </div>

                            <?php 
                                session_start();
                                $getCustomer=Website_P1GlobalFunction::CallAPI("POST", "alphaone.imkepo.com/core/customer/login",array('' =>"")); 
                                $getcustomers=json_decode($getCustomer);


                            ?>

                            <div class="rating">
                                    <div class="title-rating">
                                            <p>Rating</p>
                                            <hr>
                                    </div>
                                    <div class="no-rating">
                                    <input type="radio" name="nostar" class="star-1" id="nostar-1" disabled/>
                                    <label class="star-1" for="nostar-1">1</label>
                                    <input type="radio" name="nostar" class="star-2" id="nostar-2" disabled/>
                                    <label class="star-2" for="nostar-2">2</label>
                                    <input type="radio" name="nostar" class="star-3" id="nostar-3" checked disabled/>
                                    <label class="star-3" for="nostar-3">3</label>
                                    <input type="radio" name="nostar" class="star-4" id="nostar-4" disabled/>
                                    <label class="star-4" for="nostar-4">4</label>
                                    <input type="radio" name="nostar" class="star-5" id="nostar-5" disabled/>
                                    <label class="star-5" for="nostar-5">5</label>
                                    <span></span>
                                </div> 

                                <form id="ratingsForm" class="submit-rating">
                                    <p>SUBMIT MY RATING</p>
                                    
                                    <div class="stars">
                                        <input type="radio" name="rate" value="1" class="star-1" id="star-1" />
                                        <label class="star-1" for="star-1">1</label>
                                        <input type="radio" name="rate" value="2" class="star-2" id="star-2" />
                                        <label class="star-2" for="star-2">2</label>
                                        <input type="radio" name="rate" value="3" class="star-3" id="star-3" />
                                        <label class="star-3" for="star-3">3</label>
                                        <input type="radio" name="rate" value="4" class="star-4" id="star-4" />
                                        <label class="star-4" for="star-4">4</label>
                                        <input type="radio" name="rate" value="5" class="star-5" id="star-5" />
                                        <label class="star-5" for="star-5">5</label>
                                        <span></span>
                                    </div>

                                    <input type="hidden" name="id_customer" id="id_customer" value="<?php echo $_SESSION['o_id']; ?>"/>
                                    <input type="hidden" name="id_product" id="id_product" value="<?php echo $result->data[0]->o_id ?>"/>
                                    <textarea id="description" class="form-control" name="description"></textarea>
                                </form>
                            </div>
                            <div class="row review">
                                    <div class="col-xs-12 title-review">
                                            <p>User Review</p>
                                            <hr>
                                    </div>
                                    <div class="col-xs-12 desc-review">
                                            <?php echo $result->Description; ?>
                                    </div>

                                    <?php 
                                        // $getReview=Website_P1GlobalFunction::CallAPI("POST", "alphaone.imkepo.com/core/review/get",array('' =>"")); 
                                        // $getreviews=json_decode($getReview);

                                        
                                        
                                        // foreach($getreviews->data as $review) 
                                        // {
                                            // echo "<pre>";
                                            // print_r($review);
                                            // die();

                                           
                                     ?>  

                                    <div class="reviewer">
                                            <div class="col-xs-4"><p><?php //echo $review->Rating; ?></p></div>
                                            <div class="col-xs-4"><p><?php //echo $review->CustomerName; ?></p></div>
                                            <div class="col-xs-4 left"><p><?php //echo $review->Description; ?></p></div>
                                            <!-- <div class="col-xs-6 right"><p>
                                                <?php //echo $review->creationDate; ?>

                                                25 June 2015 8:00pm</p></div> -->
                                    </div>

                                    <?php  
                                       // }
                                    ?>
                                    <div class="col-xs-12 view-review">
                                            <button>VIEW ALL REVIEWS</button>
                                    </div>
                                    <div class="col-xs-12 submit-review">
                                            <input type="button" class="submit-review fa fa-comment-o" value="Submit review" name="submit" id="submit">
                                    </div>
                            </div>
                    </div>
            </div>
    </div>

    <?php
        }
    ?>
    
    <script>
        function addToCart() {
            var product_id = "<?php echo $result->data[0]->o_id ?>";
            var product_price = "<?php echo $result->data[0]->Price ?>";
            var product_name = "<?php echo $result->data[0]->Name ?>";
            var product_image = "<?php echo $image->path.$image->filename ?>";
            
            var listCart = new Object;
            var tempProduct;
            if(localStorage.getItem("ListCart") !== null){
                listCart = JSON.parse(localStorage.getItem("ListCart"));                    
            }

            tempProduct = { "id" : product_id, "name" : product_name, "price" : product_price, "image" : product_image };
            
            listCart[product_id] = tempProduct;                                
            localStorage.setItem("ListCart", JSON.stringify(listCart));
            
            refreshCart();            
        }

        $(document).ready(function(){

            $('.submit-review').on('click', function () {
               
               var dataForm = $('#ratingsForm').serialize();

               $.ajax({
                   url: "core/review/add",
                   type: "POST",
                   data: dataForm,
                   success: function(returnAPI) {                    
                        console.log(returnAPI);
                        // window.location = '/success-registration/'; 
                        alert("Thank you for your rating");
                        
                    },
                    error: function (xhr, desc, err)
                    {
                        console.log("error");
                        alert("Sorry problematic system, please try again");
                    }
                   
                });

           });

            // $('#modal-login').click(function(){
                $('#modalLogin').modal('show');
            // });
        });
</script>

