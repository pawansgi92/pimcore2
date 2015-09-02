<div class="container-fluid header-no-menu">
    <div class="col-md-12">
        <div class="title-registration">
            <h2>Reset Password</h2>
        </div>
        <div class="form-registration">
            <form action="/selfcare/success-registration" method="POST">
                <input type="text" name="username" value="" placeholder="USERNAME(EMAIL ADDRESS)">
                <input type="password" name="currentpassword" id="currentpassword" value="" placeholder="CURRENT PASSWORD">
                <input type="password" name="newpassword" id="example-progress-bar" value="" placeholder="NEW PASSWORD*">
                <input type="password" name="repassword" id="repassword" value="" placeholder="RE-ENTER PASSWORD*">
                <p class="errorpass"></p>
                <ul class="passwordStrength">
                    <li><p>PASSWORD STRENGTH</p></li>
                    <li class="p-strength"></li>
                </ul>
                <div class="example-progress-bar-container" id="example-progress-bar-container">
                </div>
                <div class="btn-submit">
                    <input type="submit" name="Submit" value="Submit">
                </div>
            </form>    
        </div>
    </div>
</div>