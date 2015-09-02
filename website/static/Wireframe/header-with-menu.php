<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>WireFrame - P1 Mobile</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style.otoy.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome-4.3.0/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
    <div class="container-fluid header">
        <div class="row">
            <div class="logo">
                <a href="index.php"><h3>LOGO</h3></a>
            </div>
        </div>
        <div class="row store">
            <div class="col-xs-4 title-store">
                <h3>STORE</h3>
            </div>
            <div class="col-xs-8 compare">
                <!--
                <div class="device">
                    <p>Compare<br>device</p>
                    <i class="fa fa-mobile fa-2x"></i>
                    <i class="fa fa-mobile fa-2x"></i>
                </div>
                -->
                <div class="compare-box">
                    <a href="compare.php" class="compare-button">
                        <div class="compare-button-inner">
                            <i class="fa fa-check fa-2x"></i> Compare
                        </div><!--/ .compare-button-inner -->
                    </a><!--/ .compare-button -->
                    <div class="compare-items">
                        <a href="#" class="compare-item" id="compareItemA">
                            <div class="close-button"><i class="fa fa-times"></i></div>
                            <img src="http://placehold.it/256x256" alt="Compare Product" class="img-responsive">
                            <i class="fa fa-3x fa-mobile-phone"></i>
                            <input type="hidden" name="compareProductA" value="0">
                        </a><!--/ .compare-item -->
                        <a href="#" class="compare-item" id="compareItemB">
                            <div class="close-button"><i class="fa fa-times"></i></div>
                            <img src="http://placehold.it/256x256" alt="Compare Product" class="img-responsive">
                            <i class="fa fa-3x fa-mobile-phone"></i>
                            <input type="hidden" name="compareProductB" value="0">
                        </a><!--/ .compare-item -->
                    </div><!--/ .compare-items -->
                </div><!--/ .compare-box -->
            </div>
        </div>
        <div class="row">
            <div class="nav nav-pills">
                <div class="col-xs-6 mmenu active"><a data-toggle="pill" class="mobile" href="#mobile"><h4>MOBILE</h4></a></div>
                <div class="col-xs-6 mmenu"><a data-toggle="pill" class="internet" href="#internet"><h4>INTERNET</h4></a></div>
            </div>
        </div>
    </div>
