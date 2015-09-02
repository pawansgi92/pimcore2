    <!-- Bootstrap core JavaScript ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/password-score.js"></script>
    <script type="text/javascript" src="../js/password-score-options.js"></script>
    <script type="text/javascript" src="../js/bootstrap-strength-meter.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.menu-login > a').click(function(){
                $('.menu-login').removeClass('active');
                $(this).parent().addClass('active');
            });
            $('.menu-nav').click(function(){
                $('.menu-nav-list').toggle();
            });
            $('#password-telesales').strengthMeter('progressBar', {
                container: $('#telesales-progress-bar')
            });
            $('#repassword-telesales').keyup(function(){
                var password = $("#password-telesales").val();
                var confirmPassword = $("#repassword-telesales").val();

                if (password != confirmPassword){
                    $('.errorPass').html("Password do not match");
                }else{
                    $('.errorPass').html("");
                }
            });
            $('.title-persoinfo').click(function(){
                var $this = $('.title-persoinfo > i');
                if ($this.hasClass("fa-caret-up")) {
                    $this.removeClass("fa-caret-up").addClass("fa-caret-down");
                    return;
                }
                if ($this.hasClass("fa-caret-down")) {
                    $this.removeClass("fa-caret-down").addClass("fa-caret-up");
                    return;
                }
            });
            $('.title-cartsum').click(function(){
                var $this = $('.title-cartsum > i');
                if ($this.hasClass("fa-caret-up")) {
                    $this.removeClass("fa-caret-up").addClass("fa-caret-down");
                    return;
                }
                if ($this.hasClass("fa-caret-down")) {
                    $this.removeClass("fa-caret-down").addClass("fa-caret-up");
                    return;
                }
            });
        });
    </script>
    </body>
</html>
