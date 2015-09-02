<?php

    /**
     * ./website/static/Wireframe/credit-check-pass.php
     * Credit Check Pass Page
     */

?>

<?php include_once( 'header-no-menu.php' ); ?>

<section class="black-title-bar header-no-menu">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <a href="#"><i class="fa fa-arrow-circle-left"></i>&nbsp; Back to your shopping cart</a>
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ .black-title-bar -->

<br />

<div class="container-fluid">
    <div class="row">
        <div class="col-xs-6 nopadding">
            <a href="#registration" class="btn btn-block btn-custom black square" style="text-align: left;">
                <h5>1.<br />REGISTRATION</h5>
            </a>
        </div><!--/ .col-xs-6 -->
        <div class="col-xs-6 nopadding">
            <a href="#ordersummary" class="btn btn-block btn-custom black dead square" style="text-align: left;">
                <h5>2.<br />ORDER SUMMARY</h5>
            </a>
        </div><!--/ .col-xs-6 -->
    </div><!--/ .row -->
</div><!--/ .container-fluid -->

<section class="">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">

                <h1>Complete your order</h1>

                <h4 class="page-title">
                    Step 1. Registration
                    <small class="timer pull-right">
                        <i class="fa fa-clock-o"></i> 10:00:00
                    </small>
                    <div class="clearfix"></div>
                </h4>

                <div class="summary-box">
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="summary-box-inner">
                                <h4>Account/Lines Summary</h4>
                                <p>
                                    No. of accounts: 1<br />
                                    No. of lines: 4<br />
                                    <br />
                                    <small>
                                        *You can have only a maximmum of 2 accounts and maximmum
                                        4 lines to each of your account
                                    </small>
                                </p>
                            </div><!--/ .summary-box-inner -->
                        </div><!--/ .col-xs-8 -->
                        <div class="col-xs-4">
                            <div class="black-box">
                                <p>Current Account Summary</p>
                            </div><!--/ .black-box -->
                        </div><!--/ .col-xs-4 -->
                    </div><!--/ .row -->
                </div><!--/ .summary-box -->

                <h4>Numbers Selection</h4>

                <div class="number-boxes">

                    <div class="number-box" id="nb1">

                        <div class="number-box--head">
                            <div class="row">
                                <div class="col-xs-3">
                                    <img src="http://placehold.it/256x256" alt="Phone" class="img-responsive">
                                </div><!--/ .col-xs-3 -->
                                <div class="col-xs-9">
                                    <p>
                                        Apple iPhone 6<br />
                                        16GB White<br /><br/>
                                        Your Number: <strong>612312312</strong>
                                    </p>
                                    <a href="#nb1" class="nbc-trigger">
                                        <span>Select Number <i class="fa fa-angle-double-down"></i></span>
                                    </a>
                                </div><!--/ .col-xs-9 -->
                            </div><!--/ .row -->
                        </div><!--/ .number-box--head -->

                        <div class="clearfix"></div>

                        <div class="number-box--content">
                            <div class="row">
                                <div class="col-xs-12 text-center">
                                    <a href="#nb1" class="nbc-close"><i class="fa fa-angle-double-up"></i></a>
                                </div><!--/ .col-xs-12 -->
                            </div><!--/ .row -->

                            <div class="number-box-tab" id="new">
                                <div class="number-box-tab--head">
                                    <div class="row">
                                        <div class="col-xs-9">
                                            <label><input type="radio" name="dmp" value="NEW" data-nbt-id="new" checked> Pick your new number</label>
                                        </div><!--/ .col-xs-9 -->
                                        <div class="col-xs-3 text-center">
                                            <a href="#"><i class="fa fa-refresh"></i></a>
                                        </div><!--/ .col-xs-3 -->
                                    </div><!--/ .row -->
                                </div><!--/ .number-box-tab--head -->

                                <div class="number-box-tab--content active">
                                    <table class="table table-bordered">
                                        <tr>
                                            <td><label><input type="checkbox" name="num" value="600000001"> 600000001</label></td>
                                            <td><label><input type="checkbox" name="num" value="600000010"> 600000010</label></td>
                                        </tr>
                                        <tr>
                                            <td><label><input type="checkbox" name="num" value="600000001"> 600000002</label></td>
                                            <td><label><input type="checkbox" name="num" value="600000011"> 600000011</label></td>
                                        </tr>
                                        <tr>
                                            <td><label><input type="checkbox" name="num" value="600000001"> 600000003</label></td>
                                            <td><label><input type="checkbox" name="num" value="600000012"> 600000012</label></td>
                                        </tr>
                                        <tr>
                                            <td><label><input type="checkbox" name="num" value="600000001"> 600000004</label></td>
                                            <td><label><input type="checkbox" name="num" value="600000013"> 600000013</label></td>
                                        </tr>
                                    </table>
                                    <p class="text-center"><i class="fa fa-ellipsis-v"></i></p>
                                    <p>Not the number you looking for? Key in your prefered last 4 digit number.</p>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <input type="number" placeholder="12345" class="form-control">
                                        </div><!--/ .col-xs-6 -->
                                        <div class="col-xs-6">
                                            <button type="button" class="btn btn-block btn-default">Submit</button>
                                        </div><!--/ .col-xs-6 -->
                                    </div><!--/ .row -->
                                    <br />
                                    <i class="text-danger fa fa-2x fa-exclamation-triangle pull-left"></i>
                                    <p class="text-danger">
                                        Sorry we don't have the number you are looking for, you can try other number or
                                        pick a random number from the list above.
                                    </p>
                                    <div class="clearfix"></div>
                                </div><!--/ .number-box-tab--content -->
                            </div><!--/ .number-box-tab -->

                            <div class="number-box-tab" id="switch">
                                <div class="number-box-tab--head">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <label><input type="radio" name="dmp" value="SWITCH" data-nbt-id="switch"> Switch my line and keep this number</label>
                                        </div><!--/ .col-xs-9 -->
                                    </div><!--/ .row -->
                                </div><!--/ .number-box-tab--head -->

                                <div class="number-box-tab--content">

                                    <h4>MNP Product Registration</h4>

                                    <div class="row">
                                        <div class="col-xs-6">
                                            <input type="text" placeholder="MOBILE NUMBER" class="form-control">
                                        </div><!--/ .col-xs-6 -->
                                        <div class="col-xs-6">
                                            <button type="button" class="btn btn-block btn-default">Submit</button>
                                        </div><!--/ .col-xs-6 -->
                                    </div><!--/ .row -->

                                    <p class="text-danger">
                                        Sorry your number is not eligible for porting.
                                    </p>

                                    <p>
                                        <label>
                                            <input type="radio" name="switch_opt" value="temp"> Use a temporary number till line is ready
                                        </label>
                                    </p>

                                    <table class="table table-bordered">
                                        <tr>
                                            <td><label><input type="checkbox" name="num" value="600000001"> 600000001</label></td>
                                            <td><label><input type="checkbox" name="num" value="600000010"> 600000010</label></td>
                                        </tr>
                                        <tr>
                                            <td><label><input type="checkbox" name="num" value="600000001"> 600000002</label></td>
                                            <td><label><input type="checkbox" name="num" value="600000011"> 600000011</label></td>
                                        </tr>
                                        <tr>
                                            <td><label><input type="checkbox" name="num" value="600000001"> 600000003</label></td>
                                            <td><label><input type="checkbox" name="num" value="600000012"> 600000012</label></td>
                                        </tr>
                                        <tr>
                                            <td><label><input type="checkbox" name="num" value="600000001"> 600000004</label></td>
                                            <td><label><input type="checkbox" name="num" value="600000013"> 600000013</label></td>
                                        </tr>
                                    </table>
                                    <p class="text-center"><i class="fa fa-ellipsis-v"></i></p>
                                    <p>Not the number you looking for? Key in your prefered last 4 digit number.</p>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <input type="number" placeholder="12345" class="form-control">
                                        </div><!--/ .col-xs-6 -->
                                        <div class="col-xs-6">
                                            <button type="button" class="btn btn-block btn-default">Submit</button>
                                        </div><!--/ .col-xs-6 -->
                                    </div><!--/ .row -->

                                    <br />

                                    <p>
                                        <label>
                                            <input type="radio" name="switch_opt" value="blank"> Send me a blank SIM
                                        </label>
                                    </p>

                                </div><!--/ .number-box-tab--content -->
                            </div><!--/ .number-box-tab -->

                        </div><!--/ .number-box--content -->

                    </div><!--/ .number-box -->

                    <div class="number-box" id="nb2">
                        <div class="number-box--head">
                            <div class="row">
                                <div class="col-xs-3">
                                    <img src="http://placehold.it/256x256" alt="Phone" class="img-responsive">
                                </div><!--/ .col-xs-3 -->
                                <div class="col-xs-9">
                                    <p>
                                        NewCo Plan (with SIM) for Supplementary line
                                        <br /><br/>
                                        Your Number: <strong>&lt;No number&gt;</strong>
                                    </p>
                                    <a href="#nb2" class="nbc-trigger">
                                        <span>Select Number <i class="fa fa-angle-double-down"></i></span>
                                    </a>
                                </div><!--/ .col-xs-9 -->
                            </div><!--/ .row -->
                        </div><!--/ .number-box--head -->
                    </div><!--/ .number-box -->

                    <div class="number-box" id="nb3">
                        <div class="number-box--head">
                            <div class="row">
                                <div class="col-xs-3">
                                    <img src="http://placehold.it/256x256" alt="Phone" class="img-responsive">
                                </div><!--/ .col-xs-3 -->
                                <div class="col-xs-9">
                                    <p>
                                        NewCo Plan (with SIM) for Supplementary line
                                        <br /><br/>
                                        Your Number: <strong>&lt;No number&gt;</strong>
                                    </p>
                                    <a href="#nb2" class="nbc-trigger">
                                        <span>Select Number <i class="fa fa-angle-double-down"></i></span>
                                    </a>
                                </div><!--/ .col-xs-9 -->
                            </div><!--/ .row -->
                        </div><!--/ .number-box--head -->
                    </div><!--/ .number-box -->

                </div><!--/ .number-boxes -->

                <h4>Account Information</h4>

                <form role="form" class="form-custom">

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="FULLNAME*">
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="IC / PASSPORT NO.*">
                        <p class="help-block">
                            <em>For Malaysian IC, we will auto-populate some fields for you.</em>
                        </p><!--/ .help-block -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="ADDRESS 1">
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="ADDRESS 2">
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="POSTCODE">
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="CITY">
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="STATE">
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="MOBILE">
                    </div><!--/ .form-group -->

                    <div class="form-group dob">
                        <label>Date of Birth</label>
                        <select class="form-control">
                            <option value="">DAY</option>
                        </select>
                        <select class="form-control">
                            <option value="">MONTH</option>
                        </select>
                        <select class="form-control">
                            <option value="">YEAR</option>
                        </select>
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <select class="form-control">
                            <option value="">NATIONALITY</option>
                            <option value="MY">MALAYSIAN</option>
                            <option value="RU">RUSSIAN</option>
                        </select>
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="AGENT ID">
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <select class="form-control">
                            <option value="">PREFERED LANGUAGE</option>
                            <option value="EN">ENGLISH</option>
                            <option value="RU">RUSSIAN</option>
                        </select>
                    </div><!--/ .form-group -->

                    <!-- TODO: CAPTCHA -->

                    <div class="form-group">
                        <label>Captcha</label>
                        <div class="form-group captcha">
                            <img src="http://placehold.it/128x48" alt="Captcha Image" class="">
                            <a href="#"><i class="fa fa-2x fa-refresh"></i></a>
                            <input type="text" class="form-control" placeholder="Key in the letters you see" size="10">
                        </div><!--/ .form-group -->
                        <div class="form-group">
                            <label><input type="checkbox"> AUTOPAY BILLING</label>
                        </div><!--/ .form-group -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <label>Bill Options</label>
                        <div class="form-group radio">
                            <label><input type="radio" name="bill_opts" value="1"> ELECTRONIC</label>
                            <label><input type="radio" name="bill_opts" value="2"> PHYSICAL (RM5 CHARGEABLE)</label>
                        </div><!--/ .form-group -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <label>Delivery Options</label>
                        <div class="form-group radio">
                            <label><input type="radio" name="delivery_opts" value="1"> SELF-PICKUP</label>
                            <label><input type="radio" name="delivery_opts" value="2"> DELIVERY TO DOORSTEPS</label>
                        </div><!--/ .form-group -->
                    </div><!--/ .form-group -->

                    <div class="row form-group">
                        <div class="col-xs-6">
                            <a href="javascipt:history.go(-1);" class="btn btn-block btn-custom black">Back</a>
                        </div><!--/ .col-xs-6 -->
                        <div class="col-xs-6">
                            <input type="submit" class="btn btn-block btn-custom black" value="Submit">
                        </div><!--/ .col-xs-6 -->
                    </div><!--/ .row -->

                </form>

            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section><!--/ . -->

<?php include('footer.php'); ?>
