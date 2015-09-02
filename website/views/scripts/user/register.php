<?php echo $this->template("includes/menu-partial.php")?>
        <div class="container no-index">
            <div class="frame-checkout">
                <div class="title-checkout">
                    <h2>Registration</h2>
                    <hr></hr>
                </div>
            </div>
            <form method="POST" action="/user/register">
                <div class="row" style="padding: 20px 0;">
                    <div class="col-md-4">
                        <section class="content">
                            <div class="box-check">
                                <p>Customer Type</p>
                                <select name="customerType" class="check-box">
                                    <option value="TM">TM</option>
                                    <option value="P1">P1</option>
                                    <option value="NON">Non-TM/P1 User</option>
                                </select>
                            </div>
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="text" id="input-1" name="icno"/>
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-1">
                                    <span class="input__label-content input__label-content--hoshi">IC / Passport No</span>
                                </label>
                            </span>
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="text" id="input-1" name="name"/>
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-1">
                                    <span class="input__label-content input__label-content--hoshi">Name</span>
                                </label>
                            </span>
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="text" id="input-2" name="accountNo"/>
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-2">
                                    <span class="input__label-content input__label-content--hoshi">Account Number</span>
                                </label>
                            </span>
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="text" id="input-3" name="mobileNo"/>
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-3">
                                    <span class="input__label-content input__label-content--hoshi">Mobile Number</span>
                                </label>
                            </span>
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="text" id="input-4" name="isLocal"/>
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-4">
                                    <span class="input__label-content input__label-content--hoshi">Local</span>
                                </label>
                            </span>
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="text" id="input-5" name="NRIC"/>
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-5">
                                    <span class="input__label-content input__label-content--hoshi">NRIC</span>
                                </label>
                            </span>
                        </section>
                    </div>
                    <div class="col-md-4">
                        <section class="content">
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="text" id="input-6" name="mailingAddress"/>
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-6">
                                    <span class="input__label-content input__label-content--hoshi">Mailing Address</span>
                                </label>
                            </span>
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="text" id="input-7" name="deliveryAddress"/>
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-7">
                                    <span class="input__label-content input__label-content--hoshi">Delivery Address</span>
                                </label>
                            </span>
                            <div class="box-check">
                                <p>Gender</p>
                                <select name="gender" class="check-box">
                                    <option value="1">Male</option>
                                    <option value="0">Female</option>
                                </select>
                            </div>
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="text" id="input-8" name="race"/>
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-8">
                                    <span class="input__label-content input__label-content--hoshi">Race</span>
                                </label>
                            </span>
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="date" id="input-9" name="dob"/>
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-9">
                                    <span class="input__label-content input__label-content--hoshi">Date of Birth</span>
                                </label>
                            </span>
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="text" id="input-10" name="nationality"/>
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-9">
                                    <span class="input__label-content input__label-content--hoshi">Nationality</span>
                                </label>
                            </span>
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="text" id="input-11" name="billingOptions"/>
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-9">
                                    <span class="input__label-content input__label-content--hoshi">Billing Options</span>
                                </label>
                            </span>
                        </section>
                    </div>
                    <div class="col-md-4">
                        <section class="content">
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="text" id="input-12" name="Postcode"/>
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-10">
                                    <span class="input__label-content input__label-content--hoshi">Postcode</span>
                                </label>
                            </span>
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="text" id="input-13" name="city"/>
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-11">
                                    <span class="input__label-content input__label-content--hoshi">City</span>
                                </label>
                            </span>
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="text" id="input-13" name="state"/>
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-11">
                                    <span class="input__label-content input__label-content--hoshi">State</span>
                                </label>
                            </span>
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="text" id="input-13" name="country"/>
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-11">
                                    <span class="input__label-content input__label-content--hoshi">Country</span>
                                </label>
                            </span>
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="email" id="input-13" name="emailAddress"/>
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-11">
                                    <span class="input__label-content input__label-content--hoshi">Email</span>
                                </label>
                            </span>
                            <span class="input input--hoshi">
                                <input class="input__field input__field--hoshi" type="password" id="input-12" name="password"/>
                                <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-12">
                                    <span class="input__label-content input__label-content--hoshi">Password</span>
                                </label>
                            </span>
                        </section>
                    </div>
                    <div class="col-md-12">
                        <div class="btn-check">
                            <input class="progress-button" data-style="top-line" data-horizontal type="submit" value="submit" name="submit">
                        </div>
                    </div>
                </div>
            </form>
        </div>