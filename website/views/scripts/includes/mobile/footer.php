    <!-- Bootstrap core JavaScript ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/website/static/Wireframe/js/bootstrap.min.js"></script>
    <script src="/website/static/Wireframe/js/jscroll.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script type="text/javascript" src="/website/static/Wireframe/js/password-score.js"></script>
    <script type="text/javascript" src="/website/static/Wireframe/js/password-score-options.js"></script>
    <script type="text/javascript" src="/website/static/Wireframe/js/bootstrap-strength-meter.js"></script>
    <script type="text/javascript" src="/website/static/Wireframe/js/custom.pnav.js"></script>
    <script type="text/javascript" src="/website/static/Wireframe/js/custom.numberselect.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            // Compare Device
            var compare_count   = 0;
            $( 'button.btn-compare:not(.active)' ).each(function(index, value){
                $( this ).click(function(e){
                    e.preventDefault();
                    var href        = $( this ).attr( 'href' );
                    var product_id  = $( this ).attr( 'data-product-id' );
                    var product     = $( '.product[data-product-id="' + product_id + '"]' );
                    var product_name= product.attr( 'data-product-name' );
                    var product_img = product.find( 'img' ).attr( 'src' );
                    console.log( product_name + ' ' + product_img );
                    $( this ).addClass( 'active' );
                    if( compare_count < 1 )
                    {
                        $( '#compareItemA' ).addClass( 'active' );
                        $( '#compareItemA input[type="hidden"]' ).val( product_id );
                        $( '#compareItemA img' ).attr( 'src', product_img );
                        compare_count++;
                    }
                    else
                    {
                        //document.location.href = 'compare.php';
                        $( '#compareItemB' ).addClass( 'active' );
                        $( '#compareItemB input[type="hidden"]' ).val( product_id );
                        $( '#compareItemB img' ).attr( 'src', product_img );
                        $( '.compare-button' ).addClass( 'enabled' );
                    }
                    // console.log( compare_count );
                    return false;
                });
            });

            $( '.compare-item' ).each(function(index, value){
                $( this ).click(function(e){
                    e.preventDefault();
                    if( $( this ).hasClass( 'active' ) )
                    {
                        var registered_id = $( this ).find( 'input[type="hidden"]' ).val();
                        $( '.btn-compare[data-product-id="' + registered_id + '"].active' ).removeClass( 'active' );
                        $( this ).find( 'input[type="hidden"]' ).val( 0 );
                        $( this ).removeClass( 'active' );
                        compare_count--;
                        if( compare_count < 1 )
                        {
                            $( '.compare-button' ).removeClass( 'enabled' );
                        }
                    }
                    return false;
                });
            });
            // Compare Device

            // Popup Modal
            // $('#timesUp').modal('show'); for times up!
            
            $('#modal-login').click(function(){
                $('#modalLogin').modal('show');
            });
            
            $('#loginEmail').click(function(){
                $('#modalLogin').modal('hide');
                setTimeout(function(){ $('#LoginNow').modal('show'); }, 1000);
            });

            $('#cancel-order').click(function(){
                $('#cancelOrder').modal('show');
            });
            // Popup Modal

            $('.scroll-mobile, .scroll-broadband').jscroll({
                autoTrigger: false
            });

            // Form Register or Personal information
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
            // Form Register or Personal information

            // Menu Login Selfcare
            $('.menu-nav').click(function(){
                $('.menu-nav-list').toggle();
            });
            // Menu Login Selfcare

            //fitrazh
            $('.is_compare, .enabled').on('click', function () {
                
                var id1=$("input[name='compareProductA']").val();
                var id2=$("input[name='compareProductB']").val();

                window.location = "/compare-product/"+id1+"_"+id2;                
            });

            // Tab menu
            $('.mobile').click(function(){
                $('.nav-pills .mmenu').removeClass('active');
                $('.nav-pills .mobile').addClass('active');
            });

            $('.broadbrand').click(function(){
                $('.nav-pills .mmenu').removeClass('active');
                $('.nav-pills .broadbrand').addClass('active');
            });
            // Tab menu

            // credit check
            $('.switchTemporary').click(function(){
                $('.switch-temporary').slideDown('fast');
            });
            $('.switchBlank').click(function(){
                $('.switch-temporary').slideUp('fast');
            });
            // credit check

            // Check Coverage
            $('.check-coverage').click(function(){
                $('.checkCoverage').toggle();
            });
            // Check Coverage
            
            // Toggle Accordion
            $('.titleVoucher').click(function(){
                var $this = $('.titleVoucher > i');
                if ($this.hasClass("fa-caret-up")) {
                    $this.removeClass("fa-caret-up").addClass("fa-caret-down");
                    return;
                }
                if ($this.hasClass("fa-caret-down")) {
                    $this.removeClass("fa-caret-down").addClass("fa-caret-up");
                    return;
                }
            });

            $('.titleVoucher1').click(function(){
                var $this = $('.titleVoucher1 > i');
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

            $('.title-nextsum').click(function(){
                var $this = $('.title-nextsum > i');
                if ($this.hasClass("fa-caret-down")) {
                    $this.removeClass("fa-caret-down").addClass("fa-caret-up");
                    return;
                }
                if ($this.hasClass("fa-caret-up")) {
                    $this.removeClass("fa-caret-up").addClass("fa-caret-down");
                    return;
                }
            });

            $('.title-regisinfo').click(function(){
                var $this = $('.title-regisinfo > i');
                if ($this.hasClass("fa-caret-up")) {
                    $this.removeClass("fa-caret-up").addClass("fa-caret-down");
                    return;
                }
                if ($this.hasClass("fa-caret-down")) {
                    $this.removeClass("fa-caret-down").addClass("fa-caret-up");
                    return;
                }
            });

            $('.title-perinfo').click(function(){
                var $this = $('.title-perinfo > i');
                if ($this.hasClass("fa-caret-up")) {
                    $this.removeClass("fa-caret-up").addClass("fa-caret-down");
                    return;
                }
                if ($this.hasClass("fa-caret-down")) {
                    $this.removeClass("fa-caret-down").addClass("fa-caret-up");
                    return;
                }
            });
            // Toggle Accordion

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