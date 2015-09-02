<?php include('header-telesales.php'); ?>
    <div class="container-fluid main">
        <div class="title-login">
            <h3>Login</h3>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="nav nav-pills">
                <div class="col-xs-6 menu-login active"><a data-toggle="pill" class="tab-login" href="#login-telesales"><p>TELESALES AGENT</p></a></div>
                <div class="col-xs-6 menu-login"><a data-toggle="pill" class="tab-login" href="#login-reseller"><p>RESELLER</p></a></div>
            </div>
        </div>
    </div>
    <div class="tab-content">
        <div id="login-telesales" class="tab-pane fade in active">
            <div class="container-fluid">
                <div class="form-login-telesales">
                    <form method="post" action="index-telesales.php">
                        <div class="group-input">
                            <input type="text" name="user-telesales" placeholder="USERNAME">
                            <input type="password" name="pass-telesales" placeholder="PASSWORD">
                        </div>
                        <div class="forgot-password">
                            <a href="#"><p>Forgot your password?</p></a>
                        </div>
                        <div class="button-telesales">
                            <input type="submit" name="submit" value="SUBMIT">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="login-reseller" class="tab-pane fade">
            
        </div>
    </div>
<?php include('footer-telesales.php'); ?>