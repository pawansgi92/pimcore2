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
            <h3>TELESALES<br>SUMMARY</h3>
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
        <div class="subtitle-telesales">
            <h4>MONTH OF JUNE</h4>
            <p class="note">As of XX June 2015 15:00PM</p>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <p>Small Screen</p>
                </div>
                <div class="col-lg-6">
                    <h4><b>PENDING XX</b></h4>
                    <h4><b>COMPLETED XX</b></h4>
                    <h4><b>TOTAL XX</b></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <p>Big Screen</p>
                </div>
                <div class="col-lg-6">
                    <h4><b>PENDING XX</b></h4>
                    <h4><b>COMPLETED XX</b></h4>
                    <h4><b>TOTAL XX</b></h4>
                </div>
            </div>
        </div>
    </div>
<?php include('footer-telesales.php'); ?>