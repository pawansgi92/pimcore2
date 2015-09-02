$(document).ready(function(){
    $('.navbar-nav > li > a').click(function(){
        $('.navbar-nav > li').removeClass('active');
        $(this).parent().addClass('active');
    });
    var win = $(window).width();
    var fullurl = window.location.pathname.substr(0);
    var url = fullurl.split("/");
    console.log(url[1]);

    if (url[1] == '') { url[1] = 'home';};
    if (url[1] !='home') {
        $('.navbar').addClass('navbar-fixed-top');
    }
    if (win < 625){
        $('.frame-product').removeClass('col-xs-6');
        $('.frame-product').attr('style', 'float:left; width:100%;');
        $('.compact-only').hide();
    }else{
        $('.frame-product').addClass('col-xs-6')
        $('.frame-product').removeAttr('style');
        $('.compact-only').show();
    }

    $('.signup').click(function(){
        $('#modal-1').removeClass('md-show');
    });

    $('.login').click(function(){
        $('#modal-2').removeClass('md-show');
        $('#modal-1').addClass('md-show');
    });

    /*if(url){
        $('.navbar-nav > li').removeClass('active');
        var uri = '#'+url;
        var segment = uri.split(",");
        var id = segment[0]+segment[1];
        $('.navbar-nav > li').find(id).parent().addClass('active');
    }*/
});

$(window).resize(function(){
    var win = $(window).width();
    if (win < 625){
        $('.frame-product').removeClass('col-xs-6');
        $('.frame-product').attr('style', 'float:left; width:100%;');
        $('.compact-only').hide();
    }else{
        $('.frame-product').addClass('col-xs-6');
        $('.frame-product').removeAttr('style');
        $('.compact-only').show();
    }
});

$(window).scroll(function(){
    var win = $(window).width();
    var fullurl = window.location.pathname.substr(0);
    var url = fullurl.split("/");
    console.log(url[1]);

    if (url[1] == '') { url[1] = 'home';};
    if (url[1] !='home') {
        $('.navbar').addClass('navbar-fixed-top');
    }else{
        if(win < 625){
            if ($(this).scrollTop() > 1350) {
                $('.navbar').addClass('navbar-fixed-top');
            }else{
                $('.navbar').removeClass('navbar-fixed-top');
            }
        }else{    
            if ($(this).scrollTop() > 450) {
                $('.navbar').addClass('navbar-fixed-top');
            }else{
                $('.navbar').removeClass('navbar-fixed-top');
            }
        }
    }
});