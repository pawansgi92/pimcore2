    <!-- Bootstrap core JavaScript ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jscroll.min.js"></script>
    <script type="text/javascript" src="js/password-score.js"></script>
    <script type="text/javascript" src="js/password-score-options.js"></script>
    <script type="text/javascript" src="js/bootstrap-strength-meter.js"></script>
    <script type="text/javascript" src="js/custom.pnav.js"></script>
    <script type="text/javascript" src="js/custom.numberselect.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){

            $('#loginNow').click(function(){
                $('#frameLogin').modal('hide');
                setTimeout(function(){ $('#LoginNow').modal('show'); }, 1000);
            });
            $('#Successlogin').click(function(){
                $('#LoginNow').modal('hide');
                setTimeout(function(){ $('#SuccessLogin').modal('show'); }, 1000);
            });
            $('#newLogin').click(function(){
                $('#LoginNow').modal('hide');
                setTimeout(function(){ $('#NewLogin').modal('show'); }, 1000);
            });
            $('#successLogin').click(function(){
                $('#NewLogin').modal('hide');
                setTimeout(function(){ $('#SuccessLogin').modal('show'); }, 1000);
            });

            $('.scroll-mobile, .scroll-internet').jscroll({
                autoTrigger: false
            });

            $('#example-progress-bar').strengthMeter('progressBar', {
                container: $('#example-progress-bar-container')
            });

            $('#repassword').keyup(function(){
                var password = $("#example-progress-bar").val();
                var confirmPassword = $("#repassword").val();

                if (password != confirmPassword){
                    $('.errorpass').html("password do not match");
                }else{
                    $('.errorpass').html("");
                }
            });
            $('.title').click(function(){
                var $this = $('.title > i');
                if ($this.hasClass("fa-caret-up")) {
                    $this.removeClass("fa-caret-up").addClass("fa-caret-down");
                    return;
                }
                if ($this.hasClass("fa-caret-down")) {
                    $this.removeClass("fa-caret-down").addClass("fa-caret-up");
                    return;
                }
            });
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
            $('.check-sim').click(function(){
                $('.include-sim').toggle('medium');
            });
            $('.radio-switch').click(function(){
                $('.keep-number').slideDown();
            });
            $('.radio-keep').click(function(){
                $('.keep-number').slideUp();
            });
            $('.radio-pickup').click(function(){
                $('.self-pickup').slideDown();
                $('.doorstep').slideUp();
            });
            $('.radio-delivery').click(function(){
                $('.self-pickup').slideUp();
                $('.doorstep').slideDown();
            });
            $('.radio-mailing-address').click(function(){
                $('.altenative-address').slideUp();
            });
            $('.radio-altenative-address').click(function(){
                $('.altenative-address').slideDown();
            });
            $('#menustep1').click(function(){
                $('.nav-pills .tab-menu').removeClass('active');
                $('.nav-pills .menustep1').addClass('active');
            });
            $('#menustep2').click(function(){
                $('.nav-pills .tab-menu').removeClass('active');
                $('.nav-pills .menustep2').addClass('active');
            });
            $('#menustep3').click(function(){
                $('.nav-pills .tab-menu').removeClass('active');
                $('.nav-pills .menustep3').addClass('active');
            });
            $('#menustep4').click(function(){
                $('.nav-pills .tab-menu').removeClass('active');
                $('.nav-pills .menustep4').addClass('active');
            });
        });
    </script>
    <?php include('pop-up-login.php'); ?>
  </body>
</html>
