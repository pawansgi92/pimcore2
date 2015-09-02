<?php include('header-telesales.php'); ?>
    <div class="container-fluid main">
        <div class="information-login">
            <ul>
                <li><a href="personal-information-telesales.php"><i class="fa fa-user"></i> Hi, Sales Agent 1</a></li>
                <li><a href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <div class="title-telesales">
            <h3>PERSONAL<br>INFORMATION</h3>
            <!-- Menu -->
            <button class="menu-nav">
                <span class="glyphicon glyphicon-th-list"></span>
            </button>
            <!-- Menu -->
        </div>
        <!-- Menu -->
        <?php include('menu-telesales.php'); ?>
        <!-- Menu -->
    </div>
    <div class="container-fluid">
        <div class="form-personal-telesales">
            <div class="group-input">
                <input type="text" name="agentID-telesales" placeholder="AGENT ID">
                <input type="text" name="fullname-telesales" placeholder="FULLNAME">
                <input type="email" name="email-telesales" placeholder="EMAIL ADDRESS">
                <input type="text" name="ic-telesales" placeholder="IC / PASSPORT NO.">
            </div>
            <div class="subtitle-telesales">
                <br>
                <h4>CHANGE PASSWORD</h4>
                <div class="group-input">
                    <input type="password" name="password-telesales" placeholder="NEW PASSWORD" id="password-telesales">
                    <input type="password" name="repassword-telesales" placeholder="RE-ENTER PASSWORD*" id="repassword-telesales">
                </div>
                <p class="errorPass"></p>
                <div class="row">
                    <div class="col-xs-8">
                        <p>PASSWORD STRENGTH</p>
                    </div>
                    <div class="col-xs-4">
                        <p class="p-strength"></p>
                    </div>
                </div>
                <div class="telesales-progress-bar" id="telesales-progress-bar">
                </div>
                <div class="personal-button-telesales">
                    <input type="submit" name="update" value="UPDATE">
                </div>
                <p class="success-note">
                    Your password has been successfully changed.
                </p>
                <div class="permission-telesales">
                    <h4>TELESALES AGENT PERMISSION</h4>
                    <hr>
                    <div class="permission">
                        <p><b>SALES RIGHTS:</b></p>
                        <ul>
                            <li>Small Screen</li>
                            <li>Large Screen</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('footer-telesales.php'); ?>