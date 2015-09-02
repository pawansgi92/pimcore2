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
            <h3>SALES<br>HISTORY</h3>
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
        <div class="row search-history-telesales">
            <form action="" method="post">
                <div class="col-xs-6">
                    <input type="radio" name="searchhistory" value="1"> Customer Name
                </div>
                <div class="col-xs-6">
                    <input type="radio" name="searchhistory" value="2"> Sales Reference No.
                </div>
                <div class="col-xs-12">
                    <div class="input-group">
                        <input type="text" name="txtsearch" class="txtsearch">
                        <span class="input-group-btn group-search">
                            <button class="btn-search" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div><!-- /input-group -->
                </div>
            </form>
        </div>
        <div class="status-history">
            <h5><b><u>Status</u></b></h5>
            <p>PENDING PAYMENT - pending payment</p>
            <p>PROCESSED - payment has been made, awaiting delivery</p>
            <p>COMPLETED - Delivery complete, order closed</p>
        </div>
        <div class="list-history">
            <table border="1">
                <thead>
                    <tr>
                        <th><p>SALES REF. NO</p></th>
                        <th><p>CUSTOMER</p></th>
                        <th><p>STATUS</p></th>
                        <th><p>Action</p></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>9-123123-0</td>
                        <td>Nama<br>Email</td>
                        <td>PENDING PAYMENT</td>
                        <td><a href="detail-sales-history-telesales.php"><i class="fa fa-search"></i></a> <a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash-o"></i></a></td>
                    </tr>
                    <tr>
                        <td>9-123123-0</td>
                        <td>Nama<br>Email</td>
                        <td>PENDING PAYMENT</td>
                        <td><a href="detail-sales-history-telesales.php"><i class="fa fa-search"></i></a> <a href=""><i class="fa fa-pencil-square-o"></i></a> <a href=""><i class="fa fa-trash-o"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php include('footer-telesales.php'); ?>