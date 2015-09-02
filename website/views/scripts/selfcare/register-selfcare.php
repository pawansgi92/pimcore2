<div class="container-fluid header-no-menu">
    <div class="col-md-12">
        <div class="title-registration">
            <h2>Register an account</h2>
        </div>
        <div class="note-registration">* All fields are mandatory</div>
        <div class="form-registration">
            <form action="/selfcare/success-registration" method="POST">
                <input type="text" name="fullname" value="" maxlength="150" placeholder="FULLNAME*">
                <input type="text" name="username" value="" maxlength="150" placeholder="USERNAME(EMAIL ADDRESS)*">
                <input type="password" name="newpassword" id="example-progress-bar" value="" maxlength="50" placeholder="PASSWORD*">
                <input type="password" name="repassword" id="repassword" value="" maxlength="50" placeholder="RE-ENTER PASSWORD*">
                <p class="errorpass"></p>
                <ul class="passwordStrength">
                    <li><p>PASSWORD STRENGTH</p></li>
                    <li class="p-strength"></li>
                </ul>
                <div class="example-progress-bar-container" id="example-progress-bar-container">
                </div>
                
                <div class="registretion-addinfo" id="registretion-addinfo">
                    <div class="title-registretion-addinfo">
                        <a role="button" data-toggle="collapse" data-parent="#registretion-addinfo" href="#desc-registretion-addinfo">
                            <p class="title-regisinfo">
                                For exiting P1 subscribers, fill in your IC/passport number and account number to enjoy greter deals.  
                                <i class="fa fa-caret-up"></i>
                            </p>
                        </a>
                    </div>
                    <div id="desc-registretion-addinfo" class="desc-registretion-addinfo collapse in">
                        <div class="desc-cart-summary">
                            <input type="text" name="ic-passport" value="" placeholder="IC / PASSPORT NO.">
                            <p><i>*For malaysian IC, we will auto-populate some fields for you</i></p>
                            <input type="text" name="accountnumber" value="" placeholder="ACCOUNT NUMBER">
                        </div>
                    </div>
                </div>
                <div class="btn-submit">
                    <input type="submit" name="Submit" value="Submit">
                </div>
            </form>    
        </div>
    </div>
</div>