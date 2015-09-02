<div class="container-fluid header-no-menu">
    <div class="title-selfcare">
        <h3>PERSONAL<br>INFORMATION</h3>
        <p class="text-right"><i class="fa fa-pencil-square-o"></i> modify</p>
    </div>
</div>
<div class="container-fluid">
    <div class="form-personal-selfcare">
        <input type="text" name="fullname" value="" placeholder="FULLNAME">
        <input type="text" name="username" value="" placeholder="IC / PASSPORT NO.">
        <input type="text" name="address1" value="" placeholder="ADDRESS 1">
        <input type="text" name="address2"  value="" placeholder="ADDRESS 2">
        <input type="text" name="postcode"  value="" placeholder="POSTCODE">
        <input type="text" name="city"  value="" placeholder="CITY">
        <input type="text" name="state"  value="" placeholder="STATE">
        <select name="country" class="combo-full">
            <option value="">COUNTRY</option>
            <option value="malaysia">Malaysia</option>
            <option value="indonesia">Indonesia</option>
        </select>
        <input type="text" name="mobile" value="" maxlength="150" placeholder="MOBILE">
        <div class="row gender">
            <div class="col-xs-4"><p>GENDER</p></div>
            <div class="col-xs-4"><input type="radio" name"gender" value="female">FEMALE</div>
            <div class="col-xs-4"><input type="radio" name"gender" value="male">MALE</div>
        </div>
        <select name="race" class="combo-full">
            <option value="">RACE</option>
        </select>
        <p style="padding: 5px 0;">DATE OF BIRTH</p>
        <div class="date-of-birth">
            <select name="day" class="one-third">
                <option value="">DAY</option>
            </select>
            <select name="month" class="one-third margin">
                <option value="">MONTH</option>
            </select>
            <select name="year" class="one-third">
                <option value="">YEAR</option>
            </select>
        </div>
        <select name="nationally" class="combo-full">
            <option value="">NATIONALLY</option>
        </select>

        <div class="changepass-selfcare">
            <h4>CHANGE PASSWORD</h4>
            <input type="password" name="current-password" placeholder="CURRENT PASSWORD" id="current-password">
            <input type="password" name="newpassword" id="example-progress-bar" value="" placeholder="PASSWORD">
            <input type="password" name="repassword" id="repassword" value="" placeholder="RE-ENTER PASSWORD">
            <p class="errorpass"></p>
            <ul class="passwordStrength">
                <li><p>PASSWORD STRENGTH</p></li>
                <li class="p-strength"></li>
            </ul>
            <div class="example-progress-bar-container" id="example-progress-bar-container">
            </div>
            <div class="text-right">
                <input type="submit" name="update" value="UPDATE">
            </div>
            <p class="success-note">
                Your password has been successfully changed.
            </p>
        </div>
    </div>
</div>