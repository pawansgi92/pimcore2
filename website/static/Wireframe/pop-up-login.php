<div class="modal fade" id="frameLogin">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <p class="modal-title">Please Log in with your Selfcare ID<br>Don't have an account ? <a href="registration.php" id="register">Sign up now!</a></p>
                </div>
                <div class="modal-body">
                    <ul class="menu-login">
                        <li><a href="javascript:void(0);" class="signin" id="loginNow"><i class="fa fa-sign-in fa-2x"></i> Login Now</a></li>
                        <li><a href="javascript:void(0);" class="facebook"><i class="fa fa-facebook-square fa-2x"></i> Login with Facebook</a></li>
                        <li><a href="javascript:void(0);" class="google-plus"><i class="fa fa-google-plus-square fa-2x"></i> Login with Google</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="LoginNow">
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
                <div class="modal-title left text">
                    <ul class="text-login">
                        <li>We've just changed to a new look Please sign in here if you've used our old site before</li>
                        <li><a href="javascript:void(0);" id="newLogin"><i class="fa fa-arrow-circle-right fa-3x"></i></a></li>
                    </ul>
                </div>
                <div class="modal-body">
                    <div class="form-login">
                        <input type="text" name="username" value="" maxlength="150" placeholder="USERNAME">
                        <input type="password" name="password" value="" maxlength="50" placeholder="PASSWORD">
                        <input type="submit" name="Submit" value="Submit" id="Successlogin">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="NewLogin">
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
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="modal-title left text">
                                <p>1. Sign in with your current userid and password and we'll update your information to the new site.</p>
                            </div>
                            <div class="modal-body">
                                <div class="form-login">
                                    <input type="text" name="username" value="" maxlength="150" placeholder="USERID / EMAIL ADDRESS">
                                    <input type="password" name="password" value="" maxlength="50" placeholder="OLD PASSWORD">
                                    <input type="submit" name="Submit" value="Next" data-target="#myCarousel" data-slide-to="1">
                                    <p class="right active" data-target="#myCarousel" data-slide-to="0">1/2</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="modal-title left text">
                                <p>2. Kindy update your information to access the new site.</p>
                            </div>
                            <div class="modal-body">
                                <div class="form-login">
                                    <input type="text" name="fullname" value="" placeholder="FULLNAME">
                                    <input type="text" name="username" value="" placeholder="USERNAME(EMAIL ADDRESS)">
                                    <input type="password" name="newpassword" id="example-progress-bar" value="" placeholder="NEW PASSWORD">
                                    <input type="password" name="repassword" id="repassword" value="" placeholder="RE-ENTER PASSWORD">
                                    <p class="errorpass"></p>
                                    <ul class="passwordStrength">
                                        <li><p>PASSWORD STRENGTH</p></li>
                                        <li class="p-strength"></li>
                                    </ul>
                                    <div class="example-progress-bar-container" id="example-progress-bar-container"></div>
                                    <input type="submit" name="Submit" value="Submit" id="successLogin">
                                    <p class="right" data-target="#myCarousel" data-slide-to="1">2/2</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="SuccessLogin">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="modal-title left">
                        <h1><b>Thank You</b></h1>
                    </div>
                </div>
                <div class="modal-body">
                    <b><p>An email has been send to your mailbox to verify this email address. Follow the instructions on the email and you may start to enjoy our new site experience.</p></b>
                </div>
            </div>
        </div>
    </div>
