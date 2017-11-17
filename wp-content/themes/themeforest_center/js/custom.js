$(function() {

	"use strict";

    var wind = $(window);

    var main_height = $(".main-height").outerHeight();

    $(".sub-height").outerHeight(main_height);

    var owl = $('.owl-carousel');

    // owlCarousel
	$('.slider .owl-carousel').owlCarousel({
		items: 1,
		loop:true,
        mouseDrag:false,
        autoplay:true,
        smartSpeed:500,
        animateOut: 'fadeOut'
	});


	// owlCarousel
	$('.carousel .owl-carousel').owlCarousel({
		items: 1,
		loop:true,
        mouseDrag:false,
        autoplay:true,
        smartSpeed:500
	});


    // progress bar
    wind.on('scroll', function () {
        $(".skills-progress span").each(function () {
            var bottom_of_object = 
            $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = 
            $(window).scrollTop() + $(window).height();
            var myVal = $(this).attr('data-value');
            if(bottom_of_window > bottom_of_object) {
                $(this).css({
                  width : myVal
                });
            }
        });
    });


	// owlCarousel
    $('.clients .owl-carousel').owlCarousel({
        items:1,
        loop:true,
        mouseDrag:false,
        autoplay:true,
        smartSpeed:500
    });

    // owlCarousel
    $('.team .owl-carousel').owlCarousel({
        margin: 30,
        loop:true,
        mouseDrag:false,
        autoplay:true,
        nav: true,
        navText: ['<span><i class="fa fa-angle-left" aria-hidden="true"></i></span>',
        '<span><i class="fa fa-angle-right" aria-hidden="true"></i></span>'],
        smartSpeed:500,
        responsiveClass:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });


	// scrollIt
    $.scrollIt({
      upKey: 38,                // key code to navigate to the next section
      downKey: 40,              // key code to navigate to the previous section
      easing: 'swing',         // the easing function for animation
      scrollTime: 600,          // how long (in ms) the animation takes
      activeClass: 'active',    // class given to the active nav element
      onPageChange: null,       // function(pageIndex) that is called when page is changed
      topOffset: -60            // offste (in px) for fixed top navigation
    });


    // navbar scrolling background
    wind.on("scroll",function () {

        var bodyScroll = wind.scrollTop(),
            navbar = $(".navbar-default"),
            logo = $(".navbar .logo> img");

        if(bodyScroll > 300){

            navbar.addClass("nav-scroll");
            // logo.attr('src', 'http://five-dots.ru/wp-content/themes/themeforest_center/img/logoDark.png');
            logo.attr('src', 'https://five-dots.ru/wp-content/themes/themeforest_center/images/5dots_horizontal.png');

        }else{

            navbar.removeClass("nav-scroll");
            // logo.attr('src', 'http://five-dots.ru/wp-content/themes/themeforest_center/img/logoLight.png');
            logo.attr('src', 'https://five-dots.ru/wp-content/themes/themeforest_center/images/5dots_horizontal.png');
        }
    });


    // button scroll to top
    wind.on("scroll",function () {

        var bodyScroll = wind.scrollTop(),
            button_top = $(".button-top");

        if(bodyScroll > 700){

            button_top.addClass("button-show");

        }else{

            button_top.removeClass("button-show");
        }
    });

    // counterUp
    $('.numbers .counter').counterUp({
        delay: 10,
        time: 1500
    });
    

    // YouTubePopUp
    $("a.vid").YouTubePopUp();


	// stellar
    wind.stellar();


    // isotope
    $('.gallery').isotope({
      // options
      itemSelector: '.items'
    });

    var $gallery = $('.gallery').isotope({
      // options
    });

    // filter items on button click
    $('.filtering').on( 'click', 'span', function() {

        var filterValue = $(this).attr('data-filter');

        $gallery.isotope({ filter: filterValue });

    });

    $('.filtering').on( 'click', 'span', function() {

        $(this).addClass('active').siblings().removeClass('active');

    });


    // magnificPopup
    $('.portfolio .link').magnificPopup({
      delegate: 'a',
      type: 'image'
    });
    

});

$(window).on("load",function (){

    // Preloader
    $(".loading").fadeOut(500);


    // contact form
    $('#contact-form').validator();

    $('#contact-form').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            var url = "contact.php";

            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
                    var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;

                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    if (messageAlert && messageText) {
                        $('#contact-form').find('.messages').html(alertBox);
                        $('#contact-form')[0].reset();
                    }
                }
            });
            return false;
        }
    });

});
