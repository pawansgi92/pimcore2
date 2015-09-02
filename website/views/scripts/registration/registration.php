    <div class="container-fluid header-no-menu">
        <div class="col-md-12">
            <div class="title-registration">
                <h2>Register an account</h2>
            </div>
            <div class="note-registration">* All fields are mandatory</div>
            <div class="form-registration">
                <!-- <form method="POST" action="/core-customer/add"> -->
                    <input type="text" name="name" id="name" value="" maxlength="150" placeholder="FULLNAME*">
                    <input type="text" name="username" id="username" value="" maxlength="150" placeholder="USERNAME(EMAIL ADDRESS)*">
                    <input type="password" name="password" id="example-progress-bar" value="" maxlength="50" placeholder="PASSWORD*">
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
                                <input type="text" name="passport" id="passport" value="" placeholder="IC / PASSPORT NO.">
                                <input type="text" name="address" id="address" value="" placeholder="ADDRESS">
                                <!-- <input type="text" name="address-2" value="" placeholder="ADDRESS 2"> -->
                                <input type="text" name="postcode" id="postcode" value="" placeholder="POSTCODE">
                                <input type="text" name="city" id="city" value="" placeholder="CITY">
                                <input type="text" name="state" id="state" value="" placeholder="STATE">

                                <select name="country" id="country" class="combo1">
                                    <option value="">COUNTRY</option>

                                        <option value="127">Indonesia</option>
                                        <option value="128">Malaysia</option>
                                   
                                </select>
                                <input type="text" name="mobile" id="mobile" value="" maxlength="150" placeholder="MOBILE">
                                <select name="gender" id="gender" class="combo1">
                                    <option value="">GENDER</option>

                                        <option value="1">Male</option>
                                        <option value="0">Female</option>
                                   
                                </select>
                                <select name="race" id="race" class="combo1">
                                    <option value="109">RACE</option>
                                </select>
                                <p style="padding: 5px 0;">DATE OF BIRTH</p>
                                <div class="date-of-birth">
                                    <select name="day" id="day" class="combo2">
                                        <option value="">DAY</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <select name="month" id="month" class="combo2 margin">
                                        <option value="">MONTH</option>
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                    </select>
                                    <select name="year" id="year" class="combo2">
                                        <option value="">YEAR</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                    </select>
                                </div>
                                <select name="nationally" id="nationality" class="combo1">
                                    <option value="">NATIONALLY</option>
                                    <option value="130">Indonesia</option>
                                    <option value="131">Malaysia</option>
                                </select>
                            </div>
                        </div>
                    <!-- </form>     -->
                    <div class="btn-submit">
                        <input type="submit" name="submit" value="Submit" class="submit-form" id="submit">
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

<script type="text/javascript">

    // function formSubmit1(){
    //     alert("OK");
    // }

    $(document).ready(function(){

        $('.submit-form').on('click', function () {
           
            // alert('res');

           var name=$("input[name='name']").val();
           var username=$("input[name='username']").val();
           var password=$("input[name='password']").val();
           var passport=$("input[name='passport']").val();
           var address=$("input[name='address']").val();
           var postcode=$("input[name='postcode']").val();
           var city=$("input[name='city']").val();
           var state=$("input[name='state']").val();
           var country=$("input[name='country']").val();
           var gender=$("input[name='gender']").val();
           var race=$("input[name='race']").val();
           var day=$("input[name='day']").val();
           var month=$("input[name='month']").val();
           var year=$("input[name='year']").val();
           var nationality=$("input[name='nationality']").val();

           $.ajax({
               url: "core/customer/add",
               type: "POST",
               data: {
                   "name": name,
                   "username": username,
                   "password": password,
                   "passport": passport,
                   "address": address,
                   "postcode": postcode,
                   "city": city,
                   "state": state,
                   "country": country,
                   "gender": gender,
                   "race": race,
                   "day": day,
                   "month": month,
                   "year": year,
                   "naitonality": nationality 
               },
               success: function(returnAPI) {                    
                    console.log( returnAPI);
                    // window.location = '/success-registration/'; 

                },
                error: function (xhr, desc, err)
                {
                    console.log("error");

                }
               
            });

       });


    });

        

    

</script>