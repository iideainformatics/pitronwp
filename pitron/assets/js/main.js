(function ($) {
    "use strict";

    // Preloader
    $(window).on('load', function () {
        $("#pitron_preloader").delay(500).fadeOut(300);
        $("#pitron_preloader").delay(500).fadeOut(300);
    })


    //Header Search Form
    if ($(".search-trigger").length) {
        $(".search-trigger").on("click", function () {
            $("body").addClass("search-active");
        });
        $(".close-search, .search-back-drop").on("click", function () {
            $("body").removeClass("search-active");
        });
    }


    // Mobile Menu

    $(".navbar-toggler").on("click", function () {
        $(this).toggleClass("active");
    });

    $(".navbar-nav li a").on("click", function () {
        $(".sub-nav-toggler").removeClass("active");
    });

    var subMenu = $(".navbar-nav .sub-menu");

    if (subMenu.length) {
        subMenu
            .parent("li")
            .children("a")
            .append(function () {
                return '<button class="sub-nav-toggler"> <i class="las la-angle-down"></i> </button>';
            });

        var subMenuToggler = $(".navbar-nav .sub-nav-toggler");

        subMenuToggler.on("click", function () {
            $(this).parent().parent().children(".sub-menu").slideToggle();
            return false;
        });
    }

    //Header Search Form
    if ($(".search-btn").length) {
        $(".search-btn").on("click", function () {
            $("body").addClass("search-active");
        });
        $(".close-search, .search-back-drop").on("click", function () {
            $("body").removeClass("search-active");
        });
    }

// Menu Active Color 

		$(".main-menu .navbar-nav .nav-link").on("mouseover", function () {
			$(".main-menu .navbar-nav .nav-link").removeClass("active");
			$(this).addClass("active");
		});
    //Home Page Slider

    $(".homepage-slides").owlCarousel({
        items: 1,
        dots: false,
        nav: true,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        smartSpeed: 2000,
        slideSpeed: 600,
        // animateOut: 'fadeOut',
        navText: ["<i class='la la-angle-left'></i>", "<i class='la la-angle-right'></i>", ],

        responsive: {
            0: {
                items: 1,
                nav: false,
                dots: false,
            },
            600: {
                items: 1,
                nav: false,
                dots: false,
            },
            768: {
                items: 1,
                nav: false,
                dots: false,
            },
            1100: {
                items: 1,
                nav: true,
                dots: false,
            },
        },
    });

    $(".homepage-slides").on("translate.owl.carousel", function () {
        $(".single-slide-item h1")
            .removeClass("animated fadeInDown")
            .css("opacity", "1");
        $(".single-slide-item h5")
            .removeClass("animated fadeInUp")
            .css("opacity", "1");
    });

    $(".homepage-slides").on("translated.owl.carousel", function () {
        $(".single-slide-item h1")
            .addClass("animated fadeInDown")
            .css("opacity", "1");
        $(".single-slide-item h5")
            .addClass("animated fadeInUp")
            .css("opacity", "1");
    });

    // Case Slider    
    $(".case-slider").owlCarousel({
        loop: true,
        items: 1,
        dots: true,
        nav: false,
        smartSpeed: 3000,
        autoHeight: false,
        touchDrag: true,
        mouseDrag: true,
        margin: 30,
        autoplay: false,
        slideSpeed: 600,
        responsive: {
            0: {
                items: 1,
                nav: false,
                dots: false,
            },
            600: {
                items: 1,
                nav: false,
                dots: false,
            },
            768: {
                items: 2,
                nav: false,
                dots: false,
            },
            1100: {
                items: 3,
                nav: false,
                dots: true,
            }
        }
    });



    // Project Slider

    $(".project-wrap").owlCarousel({
        loop: true,
        items: 4,
        dots: true,
        nav: false,
        smartSpeed: 500,
        autoHeight: false,
        touchDrag: true,
        mouseDrag: true,
        margin: 30,
        autoplay: true,
        autoplayTimeout: 10000,
        responsive: {
            0: {
                items: 1,
                nav: false,
                dots: false,
            },
            600: {
                items: 1,
                nav: false,
                dots: false,
            },
            768: {
                items: 2,
                nav: false,
                dots: false,
            },
            1100: {
                items: 3,
                nav: false,
                dots: true,
            },
        },
    });

    // Client Slider

    $(".client-wrap").owlCarousel({
        loop: true,
        items: 5,
        dots: true,
        nav: false,
        smartSpeed: 500,
        autoHeight: false,
        touchDrag: true,
        mouseDrag: true,
        margin: 30,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
                nav: false,
                dots: false,
            },
            600: {
                items: 2,
                nav: false,
                dots: false,
            },
            768: {
                items: 3,
                nav: false,
                dots: false,
            },
            1100: {
                items: 5,
                nav: false,
                dots: true,
            },
        },
    });


    // Service Details Slider 

    $(".service_details_slider").owlCarousel({
        loop: true,
        items: 1,
        dots: true,
        nav: true,
        smartSpeed: 500,
        autoHeight: false,
        touchDrag: true,
        mouseDrag: true,
        margin: 30,
        autoplay: true,

    });


    // Testimonial Carousel

    $('.testimonial-carousel').owlCarousel({
        items: 1,
        margin: 30,
        dots: true,
        nav: false,
        loop: true,
        autoplay: true,
        responsiveClass: true,
        responsive: {
            575: {
                items: 1,
                nav: false,
                dots: false,
            },

            767: {
                items: 1,
                nav: false
            },

            990: {
                items: 1,
                loop: true,

            },
            1200: {
                items: 1,
                dots: true,
                loop: true,
            }
        }
    });

    // Testimonial Carousel # 02

    $('.client-carousel').owlCarousel({
        items: 1,
        margin: 30,
        dots: true,
        nav: false,
        loop: true,
        autoplay: true,
        responsiveClass: true,
        responsive: {
            575: {
                items: 1,
                nav: false,
                dots: false,
            },

            767: {
                items: 2,
                nav: false
            },

            990: {
                items: 2,
                loop: true,

            },
            1200: {
                items: 3,
                dots: true,
                loop: true,
            }
        }
    });


    //Isotope Filter

    $(".port-menu li").on("click", function () {
        var selector = $(this).attr("data-filter");

        $(".port-menu li").removeClass("active");

        $(this).addClass("active");

        $(".portfolio-list").isotope({
            filter: selector,
            percentPosition: true,
        });
    });

    //Counter Up

    $(".counter-number span").counterUp({
        delay: 10,
        time: 1000,

    });


    //jQuery Sticky Area
    $(".sticky-area").sticky({
        topSpacing: 0,
    });

    //jQuery Animation
    new WOW().init();


    //Counter Up

    $(".counter-number p.counting").counterUp({
        delay: 10,
        time: 1000,
    });

    //Magnific Pop-up

    $(".video-play-btn").magnificPopup({
        type: "iframe",
    });

    // Testimonial Carousel

    $(".testimonial-wrap").owlCarousel({
        items: 1,
        margin: 30,
        dots: true,
        nav: true,
        loop: true,
        autoplay: true,
        smartSpeed: 700,
        responsiveClass: true,
        responsive: {
            575: {
                items: 1,
                nav: false,
                dots: false,
            },

            767: {
                items: 1,
                nav: false,
            },

            990: {
                items: 1,
                loop: true,
            },
            1200: {
                items: 1,
                dots: true,
                loop: true,
            },
        },
    });



    // Scroll To The Top

    // Show or hide the sticky footer button
    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 4000) {
            $(".go-top").fadeIn(200);
        } else {
            $(".go-top").fadeOut(200);
        }
    });

    // Animate the scroll to top
    $(".go-top").on("click", function (event) {
        event.preventDefault();

        $("html, body").animate({
                scrollTop: 0,
            },
            1500
        );
    });


    // Contact Form JS

    $("#contactForm").on("submit", function (e) {
        e.preventDefault();

        var $action = $(this).prop("action");
        var $data = $(this).serialize();
        var $this = $(this);

        $this.prevAll(".alert").remove();

        $.post(
            $action,
            $data,
            function (data) {
                if (data.response == "error") {
                    $this.before(
                        '<div class="alert alert-danger">' + data.message + "</div>"
                    );
                }

                if (data.response == "success") {
                    $this.before(
                        '<div class="alert alert-success">' + data.message + "</div>"
                    );
                    $this.find("input, textarea").val("");
                }
            },
            "json"
        );
    });

    // Active & Remove Class 

    $(".sub-menu ul li").on("click", function () {
        $(".sub-menu").removeAttribute("style");
        $(this).addClass("active");
    });

    // Active Bacground Color  

    $(".single-testimonial-box").on("mouseover", function () {
        $(".single-testimonial-box").removeClass("active");
        $(this).addClass("active");
    });


}(window.jQuery));