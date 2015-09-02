<?php

    /**
     * ./website/static/Wireframe/menu.php
     * Tricky Menu Wireframe
     */

?>

<?php include_once( 'header-with-menu.php' ); ?>

<section class="header-with-menu">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <a href="#filterby" class="btn btn-block pnav-trigger">Filter By<i class="fa fa-caret-down"></i></a>
            </div><!--/ .col-xs-6 -->
            <div class="col-xs-6">
                <a href="#sortby" class="btn btn-block pnav-trigger">Sort By<i class="fa fa-caret-down"></i></a>
            </div><!--/ .col-xs-6 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ .header-with-menu -->

<section class="pnav" id="filterby">
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <form role="form" method="post" action="">
                    <ul class="pnav-menu active" id="pnav-main">
                        <li><a href="#filterby" class="pnav-close">Filter By <i class="fa fa-times"></i></a></li>
                        <li><a href="#pnav-brands">Brands <i class="fa fa-caret-right"></i></a></li>
                        <li><a href="#pnav-feature">Feature <i class="fa fa-caret-right"></i></a></li>
                        <li><a href="#pnav-color">Color <i class="fa fa-caret-right"></i></a></li>
                        <li><a href="#pnav-os">Operating System <i class="fa fa-caret-right"></i></a></li>
                    </ul><!--/ .pnav-menu -->
                    <ul class="pnav-menu" id="pnav-brands">
                        <li><a href="#pnav-main"><i class="fa fa-caret-left"></i> Brands</a></li>
                        <li>
                            <button type="button">
                                <i class="fa fa-square-o"></i>
                                <input type="checkbox" name="brands" value="all">
                                <label>Select All</label>
                            </button>
                        </li>
                        <li>
                            <button type="button">
                                <i class="fa fa-square-o"></i>
                                <input type="checkbox" name="brands" value="Apple">
                                <label>Apple</label>
                            </button>
                        </li>
                        <li>
                            <button type="button">
                                <i class="fa fa-square-o"></i>
                                <input type="checkbox" name="brands" value="Samsung">
                                <label>Samsung</label>
                            </button>
                        </li>
                        <li>
                            <button type="button">
                                <i class="fa fa-square-o"></i>
                                <input type="checkbox" name="brands" value="LG">
                                <label>LG</label>
                            </button>
                        </li>
                    </ul><!--/ .pnav-menu -->
                    <ul class="pnav-menu" id="pnav-feature">
                        <li><a href="#pnav-main"><i class="fa fa-caret-left"></i> Feature</a></li>
                        <li>
                            <button type="button">
                                <i class="fa fa-square-o"></i>
                                <input type="checkbox" name="feature" value="all">
                                <label>Select All</label>
                            </button>
                        </li>
                        <li>
                            <button type="button">
                                <i class="fa fa-square-o"></i>
                                <input type="checkbox" name="feature" value="2G">
                                <label>2G</label>
                            </button>
                        </li>
                        <li>
                            <button type="button">
                                <i class="fa fa-square-o"></i>
                                <input type="checkbox" name="feature" value="3G/LTE">
                                <label>3G / LTE</label>
                            </button>
                        </li>
                        <li>
                            <button type="button">
                                <i class="fa fa-square-o"></i>
                                <input type="checkbox" name="feature" value="Bluetooth">
                                <label>Bluetooth</label>
                            </button>
                        </li>
                        <li>
                            <button type="button">
                                <i class="fa fa-square-o"></i>
                                <input type="checkbox" name="feature" value="Camera">
                                <label>Camera</label>
                            </button>
                        </li>
                        <li>
                            <button type="button">
                                <i class="fa fa-square-o"></i>
                                <input type="checkbox" name="feature" value="Wifi">
                                <label>Wifi</label>
                            </button>
                        </li>
                    </ul><!--/ .pnav-menu -->
                    <ul class="pnav-menu" id="pnav-color">
                        <li><a href="#pnav-main"><i class="fa fa-caret-left"></i> Color</a></li>
                        <li>
                            <button type="button">
                                <i class="fa fa-square-o"></i>
                                <input type="checkbox" name="color" value="all">
                                <label>Select All</label>
                            </button>
                        </li>
                        <li>
                            <button type="button">
                                <i class="fa fa-square-o"></i>
                                <input type="checkbox" name="color" value="White">
                                <label>White</label>
                            </button>
                        </li>
                        <li>
                            <button type="button">
                                <i class="fa fa-square-o"></i>
                                <input type="checkbox" name="color" value="Silver">
                                <label>Silver</label>
                            </button>
                        </li>
                        <li>
                            <button type="button">
                                <i class="fa fa-square-o"></i>
                                <input type="checkbox" name="color" value="Black">
                                <label>Black</label>
                            </button>
                        </li>
                        <li>
                            <button type="button">
                                <i class="fa fa-square-o"></i>
                                <input type="checkbox" name="color" value="Gold">
                                <label>Gold</label>
                            </button>
                        </li>
                    </ul><!--/ .pnav-menu -->
                    <ul class="pnav-menu" id="pnav-os">
                        <li><a href="#pnav-main"><i class="fa fa-caret-left"></i> Operating System</a></li>
                        <li>
                            <button type="button">
                                <i class="fa fa-square-o"></i>
                                <input type="checkbox" name="os" value="all">
                                <label>Select All</label>
                            </button>
                        </li>
                        <li>
                            <button type="button">
                                <i class="fa fa-square-o"></i>
                                <input type="checkbox" name="os" value="Android">
                                <label>Android</label>
                            </button>
                        </li>
                        <li>
                            <button type="button">
                                <i class="fa fa-square-o"></i>
                                <input type="checkbox" name="os" value="iOS">
                                <label>iOS</label>
                            </button>
                        </li>
                        <li>
                            <button type="button">
                                <i class="fa fa-square-o"></i>
                                <input type="checkbox" name="os" value="Blackberry">
                                <label>Blackberry</label>
                            </button>
                        </li>
                        <li>
                            <button type="button">
                                <i class="fa fa-square-o"></i>
                                <input type="checkbox" name="os" value="Windows">
                                <label>Windows</label>
                            </button>
                        </li>
                    </ul><!--/ .pnav-menu -->
                </form>
            </div><!--/ .col-xs-6 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ .pnav -->

<section class="pnav" id="sortby">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-6">
                <form role="form" method="post" action="">
                    <ul class="pnav-menu active" id="pnav-main">
                        <li><a href="#sortby" class="pnav-close">Sort By <i class="fa fa-times"></i></a></li>
                        <li><a href="#">Brands</i></a></li>
                        <li><a href="#">Feature</a></li>
                        <li><a href="#">Color</a></li>
                        <li><a href="#">Operating System</a></li>
                    </ul><!--/ .pnav-menu -->
                </form>
            </div><!--/ .col-xs-6 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ .pnav -->

<?php include_once( 'footer.php' ); ?>
