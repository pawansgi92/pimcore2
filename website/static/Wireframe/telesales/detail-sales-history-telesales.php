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

            <h3><font style="font-size: 12px; font-weight: normal;">SALES HISTORY &gt;<br></font>SALES ORDER<br>SUMMARY</h3>
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
        <div class="text-danger">
            <p>Your sales order will be expired in 4 more days.</p>
            <p>You may edit your order and extend this validity for another 7 days. Otherwise, we'll cancel your order once it expires.</p>
            <p>Note: You are only allowed to modify your orders up to 5 times <b>&lt;You still have 4 times left&gt;</b></p>
        </div>
        <div class="sales-order-number">
            <p>Sales Order reference number</p>
            <h3>9-000000001</h3>
            <div class="qrcode">
                <img src="../img/qrcode.jpg">
                <a href=""><p><i class="fa fa-print"></i> Print this QR code</p></a>
            </div>
        </div>
        <div class="payment-method-telesales">
            <div class="payment-method">
                <h5>ONLINE TRANSFER</h5>
                <p>For payment through online transfer please key in the following reference sales for us to identify your sales order.</p>
                <h5>9 - XXXXXXXXXXX - 1</h5>
            </div>
            <div class="payment-method">
                <h5>CASH</h5>
                <p>Cash payment is available over the counter. Please print the QR code and bring it <u><b>to any of our stores</b></u> to make your payment</p>
            </div>
            <div class="payment-method">
                <h5>CREDIT/DEBIT CARD</h5>
                <p>VISA, MasterCard, American Express, Diners<br><i>*above card issed by Malaysian and Singapore institutions only.</i></p>
                <div class="payment-method-button">
                    <button>PAY NOW   <i class="fa fa-credit-card"></i></button>
                </div>
            </div>
            <div class="cart-summary" id="cart-summary">
                <div class="title-cart-summary">
                    <a role="button" data-toggle="collapse" data-parent="#cart-summary" href="#desc-cart-summary">
                        <h5 class="title-cartsum">
                            CART SUMMARY 
                            <i class="fa fa-caret-up"></i>
                        </h5>
                    </a>
                    <hr>
                </div>
                <div id="desc-cart-summary" class="desc-cart-summary collapse in">
                    <div class="desc-cart-summary">
                        <p class="text-right"><a href=""><i class="fa fa-pencil-square-o"></i> MODIFY</a></p>
                        <table width="100%">
                            <tr>
                                <td width="3%" valign="top"><p>1.</p></td>
                                <td width="73%" colspan="2"><p>Samsung GALAXY Note 4 32GB Black</p></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td width="75%" align="right"><p>Device Fee:</p></td>
                                <td width="25%" valign="top"><p>RM 400</p></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="right">
                                    <p>Advance Monthly Free:</p>
                                    <p><small>(05/06/15-04/07/15)</small></p>
                                </td>
                                <td valign="top"><p>RM 400</p></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="right"><p>Online discount:</p></td>
                                <td valign="top"><p>(RM 30)</p></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="right"><p>Foreigner Deposit Fee:</p></td>
                                <td valign="top"><p>RM 30</p></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="right">
                                    <p>Voucher discount:
                                    <p><i><small>* Voucher is valid till 31 july 2015.</small></i></p>
                                    <p><i><small>* Your voucher is valid for a one-time discount.</small></i></p>
                                </td>
                                <td valign="top"><p>(RM 30)</p></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="right"><p><b>Your new number : XXXXXXXXXX</b></p></td>
                                <td valign="top"></td>
                            </tr>
                            <tr>
                                <td width="3%" valign="top"><p>2.</p></td>
                                <td width="73%" colspan="2">
                                    <p>NewCo Plan (with SIM) for Supplementary line</p>
                                    <p>Main line: XXXXXXXXXXXXx</p>
                                    <p>Exiting Line: XXXXXXXXXXXXX</p>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="right"><p>Advance Monthly Free:<br><small>(05/06/15-04/07/15)</small></p></td>
                                <td valign="top"><p>RM 200</p></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="right"><p>Foreigner Deposit Fee:</p></td>
                                <td valign="top"><p>RM 30</p></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="right"><p>Online discount:</p></td>
                                <td valign="top"><p>(RM 30)</p></td>
                            </tr>
                            <tr>
                                <td width="3%" valign="top"><p>3.</p></td>
                                <td width="73%" colspan="2">
                                    <p>NewCo Plan (with SIM) for Supplementary line</p>
                                    <p>Main line: XXXXXXXXXXXXx</p>
                                    <p>Exiting Line: XXXXXXXXXXXXX</p>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="right"><p>Advance Monthly Free:<br><small>(05/06/15-04/07/15)</small></p></td>
                                <td valign="top"><p>RM 200</p></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="right"><p>Foreigner Deposit Fee:</p></td>
                                <td valign="top"><p>RM 30</p></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="right"><p>Online discount:</p></td>
                                <td valign="top"><p>(RM 30)</p></td>
                            </tr>
                            <tr>
                                <td width="3%" valign="top"><p>4.</p></td>
                                <td width="73%" colspan="2"><p>NewCo Plan (with SIM) for new line</p></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="right"><p>Advance Monthly Free:<br><small>(05/06/15-04/07/15)</small></p></td>
                                <td valign="top"><p>RM 400</p></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="right"><p>Foreigner Deposit Fee:</p></td>
                                <td valign="top"><p>RM 30</p></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="right"><p>Online discount:</p></td>
                                <td valign="top"><p>(RM 30)</p></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="right">
                                    <p>Voucher discount:
                                    <p><i><small>* Voucher is valid till 31 july 2015.</small></i></p>
                                    <p><i><small>* Your voucher is valid for a one-time discount.</small></i></p>
                                    <p><i><small>* See monthly bill summary for the discount.</small></i></p>
                                </td>
                                <td valign="top"><p><i>N.A</i></p></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="right"><p><b>Your new number : XXXXXXXXXX</b></p></td>
                                <td valign="top"></td>
                            </tr>
                            <tr>
                                <td colspan="3"><hr></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <p>Delivery Options: Self-pickup</p>
                                    <p><i>&lt;Store A Petaling Jaya <br> Store A Address&gt;</i></p>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="right"><p>Price Bill Fee:</p></td>
                                <td valign="top"><p>RM XXX</p></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="right"><p>Delivery Fees:</p></td>
                                <td valign="top"><p>RM XXX</p></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="right"><p>Subtotal:</p></td>
                                <td valign="top"><p>RM XXX</p></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="right"><p>GST 6%:</p></td>
                                <td valign="top"><p>RM XXX</p></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td align="right"><p>Total Payable</p></td>
                                <td valign="top"><p><b>RM XXX</b></p></td>
                            </tr>
                            <tr>
                                <td colspan="3"><hr></td>
                            </tr>
                        </table>
                        <div class="row next-bill-summary">
                            <p><b>See Your Next Month Bill Summary <i class="fa fa-caret-down"></i></b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="personal-info-tele" id="personal-info-tele">
                <div class="title-cart-summary">
                    <a role="button" data-toggle="collapse" data-parent="#personal-info-tele" href="#desc-personal-info-tele">
                        <h5 class="title-persoinfo">
                            PERSONAL INFORMATION
                            <i class="fa fa-caret-up"></i>
                        </h5>
                    </a>
                    <hr>
                </div>
                <div id="desc-personal-info-tele" class="desc-personal-info-tele collapse in">
                    <div class="desc-personal-info-tele">
                        <p class="text-right"><a href=""><i class="fa fa-pencil-square-o"></i> MODIFY</a></p>
                        <P>FULLNAME</P>
                        <P>EMAIL ADDRESS</P>
                        <P>IC / PASSPORT NO.</P>
                        <P>ADDRESS 1</P>
                        <P>ADDRESS 2</P>
                        <P>POSTCODE</P>
                        <P>CITY</P>
                        <P>STATE</P>
                        <P>COUNTRY</P>
                        <P>MOBILE</P>
                        <P>GENDER</P>
                        <P>RACE</P>
                        <P>DATE OF BIRTH</P>
                        <P>NATIONALITY</P>
                        <P>AUTOPAY BILLING</P>
                        <P>BILLING OPTIONS</P>
                        <ul>
                            <li>PHYSICAL (RM5 CHARGEABLE)</li>
                            <li>&lt;MAILING ADDRESS&gt;</li>
                        </ul>
                        <P>DELIVERY OPTIONS</P>
                        <ul>
                            <li>DELIVERY TO DOORSTEP</li>
                            <li>&lt;DELIVERY ADDRESS&gt;</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('footer-telesales.php'); ?>