    <div class="container-fluid header-no-menu">
        <div class="col-md-12">
            <div class="title-registration">
                <h2>Register an account</h2>
            </div>
            <div class="note-registration">* All fields are mandatory</div>
            <div class="form-registration">
                <form action="success-registration.php" method="POST">
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
                    <div class="additional">
                        <p class="add-more"><a role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Additional information if you wish to update. <i class="fa fa-caret-down"></i></a></p>
                        <div class="collapse" id="collapseExample">
                            <div class="more-info">
                                <input type="text" name="ic-passport" value="" placeholder="IC / PASSPORT NO.">
                                <input type="text" name="address-1" value="" placeholder="ADDRESS 1">
                                <input type="text" name="address-2" value="" placeholder="ADDRESS 2">
                                <input type="text" name="postcode" value="" placeholder="POSTCODE">
                                <input type="text" name="city" value="" placeholder="CITY">
                                <input type="text" name="state" value="" placeholder="STATE">
                                <select name="country" class="combo1">
                                    <option value="">COUNTRY</option>
                                    <option value="malaysia">Malaysia</option>
                                    <option value="indonesia">Indonesia</option>
                                </select>
                                <input type="text" name="mobile" value="" maxlength="150" placeholder="MOBILE">
                                <ul class="gender">
                                    <li>GENDER</li>
                                    <li><input type="radio" name"gender" value="female">FEMALE</li>
                                    <li><input type="radio" name"gender" value="male">MALE</li>
                                </ul>
                                <select name="race" class="combo1">
                                    <option value="">RACE</option>
                                </select>
                                <p style="padding: 5px 0;">DATE OF BIRTH</p>
                                <div class="date-of-birth">
                                    <select name="day" class="combo2">
                                        <option value="">DAY</option>
                                    </select>
                                    <select name="month" class="combo2 margin">
                                        <option value="">MONTH</option>
                                    </select>
                                    <select name="year" class="combo2">
                                        <option value="">YEAR</option>
                                    </select>
                                </div>
                                <select name="nationally" class="combo1">
                                    <option value="">NATIONALLY</option>
                                </select>
                            </div>
                        </div>
                    </form>    
                    <div class="btn-submit">
                        <input type="submit" name="Submit" value="Submit">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <footer>
            <p>&copy; Company 2014</p>
        </footer>
    </div>
