/*
 Theme Name: Vorzex
 Theme URI: https://themeforest.net/user/themewar/portfolio
 Author: themewar
 Author URI: 
 Description: Vorzex - Creative Agency HTML5  Responsive Template
 Version: 1.0
 License:
 License URI:
*/
 
/*=======================================================================
 [Table of contents]
 =========================================================================
 1. Revolution Slider
 2. All Owl Carousel
 3. Stretch Column
 4. Filter
 5. Suffle
 6. Google Map
 7. Popup
 8. Qty
 9. Back To Tot
 10. Sticky Header
 11. Contact Form Submission
 12. Preloader
 13. Mobile Menu
 14. Search Toggler
 15. Widget Toggler
 */

(function ($) {
    'use strict';
    /*----------------------------------------------------------
    / 1. Revolution Slider
    /----------------------------------------------------------*/
    jQuery('#rev_slider_1').show().revolution({
        delay: 7000,
        responsiveLevels: [1200, 1140, 778, 480],
        gridwidth: [1140, 920, 700, 380],
        sliderLayout: 'fullscreen',
        navigation: {
            arrows: {
                enable: true,
                style: "vor_arrows",
                hide_onleave: false,
                left: {
                    container: 'slider',
                    h_align: 'left',
                    v_align: 'center',
                    h_offset: 26,
                    v_offset: 0
                },
                right: {
                    container: 'slider',
                    h_align: 'right',
                    v_align: 'center',
                    h_offset: 26,
                    v_offset: 0
                }
            },
            bullets: {
                enable: true,
                style: "vor_bullet",
                hide_onleave: false,
                h_align: "center",
                v_align: "bottom",
                h_offset: 0,
                v_offset: 40,
                space: 12

            }
        }
    });
    jQuery('#rev_slider_2').show().revolution({
        delay: 7000,
        responsiveLevels: [1200, 1140, 778, 480],
        gridwidth: [1140, 920, 700, 380],
        jsFileLocation: "js/",
        sliderLayout: "auto",
        minHeight: 800,
        navigation: {
            arrows: {
                enable: true,
                style: "vor_arrows",
                hide_onleave: false,
                left: {
                    container: 'slider',
                    h_align: 'left',
                    v_align: 'center',
                    h_offset: 26,
                    v_offset: 0
                },
                right: {
                    container: 'slider',
                    h_align: 'right',
                    v_align: 'center',
                    h_offset: 26,
                    v_offset: 0
                }
            },
            bullets: {
                enable: true,
                style: "vor_bullet",
                hide_onleave: false,
                h_align: "center",
                v_align: "bottom",
                h_offset: 0,
                v_offset: 23,
                space: 12

            }
        }
    });
    jQuery('#rev_slider_3').show().revolution({
        delay: 7000,
        responsiveLevels: [1200, 1140, 778, 480],
        gridwidth: [1140, 920, 700, 380],
        sliderLayout: 'fullscreen',
        navigation: {
            arrows: {
                enable: false
            },
            bullets: {
                enable: true,
                style: "vor_bullet",
                hide_onleave: false,
                h_align: "center",
                v_align: "bottom",
                h_offset: 0,
                v_offset: 33,
                space: 12
            }
        }
    });
    jQuery('#rev_slider_4').show().revolution({
        delay: 7000,
        responsiveLevels: [1200, 1140, 778, 480],
        gridwidth: [1140, 920, 700, 380],
        sliderLayout: 'fullscreen',
        navigation: {
            arrows: {
                enable: false
            },
            bullets: {
                enable: true,
                style: "vor_bullet",
                hide_onleave: false,
                h_align: "center",
                v_align: "bottom",
                h_offset: 0,
                v_offset: 33,
                space: 12

            }
        }
    });
    
    /*----------------------------------------------------------
    / 2. All Owl Carousel
    /----------------------------------------------------------*/
    if ($('.testimonial_slider').length > 0) {
        var ts = $('.testimonial_slider');
        ts.owlCarousel({
            items: 1,
            loop: true,
            margin: 0,
            autoplay: false,
            nav: false,
            dots: true
        });
    } 
    if ($('.testimonial_slider_2').length > 0) {
        var ts2 = $('.testimonial_slider_2');
        ts2.owlCarousel({
            items: 1,
            loop: true,
            margin: 0,
            autoplay: false,
            nav: false,
            dots: true
        });
    } 
    if ($('.testimonial_slider_3').length > 0) {
        var ts2 = $('.testimonial_slider_3');
        ts2.owlCarousel({
            items: 1,
            loop: true,
            margin: 0,
            autoplay: false,
            nav: false,
            dots: true
        });
    } 
    if ($('.aboutUs_Slider').length > 0) {
        var as = $('.aboutUs_Slider');
        as.owlCarousel({
            items: 1,
            loop: true,
            margin: 0,
            autoplay: false,
            nav: true,
            animateOut: 'fadeOut',
            navText: ["<i class='noun-noun_Arrow_1896673'></i>", "<i class='noun-noun_Arrow_1896673'></i>"],
            dots: false
        });
    } 
    if ($('#slider_clients').length > 0) {
        var sc = $('#slider_clients');
        sc.owlCarousel({
            items: 5,
            loop: true,
            margin: 0,
            autoplay: false,
            nav: false,
            navText: false,
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 2
                },
                768: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        });
    }
    var mcar = $('.trifounder_slider');
    mcar.owlCarousel({
        loop: true,
        autoplay: true,
        nav: false,
        items: 1,
        dots: true,
        margin: 0,
        mouseDrag: false,
        touchDrag: false,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        dotsContainer: '.ts_dots'
    });
    if ($('.goal_slider').length > 0) {
        var gs = $('.goal_slider');
        gs.owlCarousel({
            loop: true,
            margin: 30,
            autoplay: true,
            nav: true,
            navText: ['<img src="images/arrow_left_2.png" alt="">', '<img src="images/arrow_right_2.png" alt="">'],
            dots: true,
            mouseDrag: false,
            stagePadding: 30,
            responsive: {
                0: {
                    stagePadding: 15,
                    items: 1
                },
                480: {
                    stagePadding: 15,
                    items: 1.30
                },
                768: {
                    stagePadding: 15,
                    items: 2
                },
                1000: {
                    items: 2.78
                }
            }
        });
    }
    if ($('.app_slider').length > 0) {
        var gs = $('.app_slider');
        gs.owlCarousel({
            loop: true,
            margin: 30,
            autoplay: true,
            nav: false,
            dots: false,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            mouseDrag: false,
            responsive: {
                0: {
                    items: 1
                },
                700: {
                    items: 2
                },
                992: {
                    items: 3
                }
            }
        });
    }
    if ($('.relatedPostSlider').length > 0) {
        var rps = $('.relatedPostSlider');
        rps.owlCarousel({
            loop: true,
            margin: 30,
            autoplay: true,
            nav: true,
            navText: ['<img src="images/rlLeft.png" alt="">', '<img src="images/rlRight.png" alt="">'],
            dots: false,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    }
    if (('.pro_realtedSlider').length > 0) {
        $('.pro_realtedSlider').owlCarousel({
            loop: true,
            margin: 25,
            dots: false,
            nav: false,
            items: 3,
            autoplay: true,
            animateIn: 'fadeInLeft',
            animateOut: 'fadeOutRight',
            responsive: {
                0: {
                    items: 1
                },
                760: {
                    items: 2
                },
                992: {
                    items: 3
                }
            }
        });
    }
    // add animate.css class(es) to the elements to be animated
    function setAnimation(_elem, _InOut) {
        // Store all animationend event name in a string.
        // cf animate.css documentation
        var animationEndEvent = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

        _elem.each(function () {
            var $elem = $(this);
            var $animationType = 'animated_slow ' + $elem.data('animation-' + _InOut);

            $elem.addClass($animationType).one(animationEndEvent, function () {
                $elem.removeClass($animationType); // remove animate.css Class at the end of the animations
            });
        });
    }
    // Fired before current slide change
    mcar.on('change.owl.carousel', function (event) {
        var $currentItem = $('.owl-item', mcar).eq(event.item.index);
        var $elemsToanim = $currentItem.find("[data-animation-out]");
        setAnimation($elemsToanim, 'out');
    });

    // Fired after current slide has been changed
    var round = 0;
    mcar.on('changed.owl.carousel', function (event) {

        var $currentItem = $('.owl-item', mcar).eq(event.item.index);
        var $elemsToanim = $currentItem.find("[data-animation-in]");

        setAnimation($elemsToanim, 'in');
    })
    mcar.on('translated.owl.carousel', function (event) {
        //console.log(event.item.index, event.page.count);

        if (event.item.index == (event.page.count - 1)) {
            if (round < 1) {
                round++
                //console.log(round);
            } else {
                //mcar.trigger('stop.owl.autoplay');
                var owlData = mcar.data('owl.carousel');
                owlData.settings.autoplay = true;
                owlData.options.autoplay = true;
                mcar.trigger('refresh.owl.carousel');
            }
        }
    });
    /*----------------------------------------------------------
    / 3. Stretch Column
    /----------------------------------------------------------*/
    function tw_stretch() {
        var i = $(window).width();
        $(".row .tw-stretch-element-inside-column").each(function() {
            var $this = $(this),
                row = $this.closest(".row"),
                cols = $this.closest('[class^="col-"]'),
                colsheight = $this.closest('[class^="col-"]').height(),
                rect = this.getBoundingClientRect(),
                l = row[0].getBoundingClientRect(),
                s = cols[0].getBoundingClientRect(),
                r = rect.left,
                d = i - rect.right,
                c = l.left + (parseFloat(row.css("padding-left")) || 0),
                u = i - l.right + (parseFloat(row.css("padding-right")) || 0),
                p = s.left,
                f = i - s.right,
                styles = {
                    "margin-left": 0,
                    "margin-right": 0
                };
            if (Math.round(c) === Math.round(p)) {
                var h = parseFloat($this.css("margin-left") || 0);
                styles["margin-left"] = h - r;
            }
            if (Math.round(u) === Math.round(f)) {
                var w = parseFloat($this.css("margin-right") || 0);
                styles["margin-right"] = w - d;
            }
            $this.css(styles);
        });
    }
    if($('.tw-stretch-element-inside-column').length > 0){
        tw_stretch();
    }
    /*----------------------------------------------------------
    / 4. Suffle for Home
    /----------------------------------------------------------*/
    $(window).on('load', function () {
        if ($("#folio_mas").length > 0)
        {
            var $grid2 = $('#folio_mas');
            $grid2.shuffle({
                itemSelector: '.fm_item',
                sizer: '.fm_sizer'
            });
        }
    });
    
    /*----------------------------------------------------------
    / 5. Suffle for Portfolio Listing
    /----------------------------------------------------------*/
    $(window).on('load', function () {
        if ($(".shafull_container").length > 0)
        {
            var $grid = $('.shafull_container');
            $grid.shuffle({
                itemSelector: '.shaf_item',
                sizer: '.shaf_sizer'
            });
            /* reshuffle when user clicks a filter item */
            $('.shaf_filter li').on('click', function () {
                // set active class
                $('.shaf_filter li').removeClass('active');
                $(this).addClass('active');
                // get group name from clicked item
                var groupName = $(this).attr('data-group');
                // reshuffle grid
                $grid.shuffle('shuffle', groupName);
            });
            
            if($('.filter_toggler').length > 0){
                $('.filter_toggler').on('click', function(e){
                    e.preventDefault();
                    $(this).toggleClass('active');
                    $('.filter_nav').toggleClass('active');
                    $('.shaf_filter li').removeClass('active');
                    $('.shaf_filter li[data-group="all"]').addClass('active');
                    $grid.shuffle('shuffle', 'all');
                });
            }
        }
    });
    
    
    /*----------------------------------------------------------
    / 6. Google Map
    /----------------------------------------------------------*/
    if ($('#google_map').length > 0) {
        var map;
        map = new GMaps({
            el: "#google_map",
            lat: 40.712776,
            lng: -74.005974,
            zoom: 11,
        });
        var image = "";
        map.addMarker({
            lat: 40.712776,
            lng: -74.005974,
            icon: "images/marker.png",
            animation: google.maps.Animation.DROP,
            verticalAlign: "bottom",
            horizontalAlign: "center",
            backgroundColor: "#d3cfcf"
        });
        map.addMarker({
            lat: 40.7699954,
            lng: -73.7178475,
            icon: "images/marker.png",
            animation: google.maps.Animation.DROP,
            backgroundColor: "#d3cfcf"
        });
        map.addMarker({
            lat: 40.7258763,
            lng: -74.250399,
            icon: "images/marker.png",
            animation: google.maps.Animation.DROP,
            backgroundColor: "#d3cfcf"
        });
        var styles = [
            {
                "featureType": "road",
                "stylers": [
                    {"color": "#eeeeee"}
                ]
            }, {
                "featureType": "water",
                "stylers": [
                    {"color": "#c8d7d4"}
                ]
            }, {
                "featureType": "landscape",
                "stylers": [
                    {"color": "#ffffff"}
                ]
            }, {
                "elementType": "labels.text.fill",
                "stylers": [
                    {"color": "#e5e5e5"}
                ]
            }, {
                "featureType": "poi",
                "stylers": [
                    {"color": "#f3f3f3"}
                ]
            }, {
                "elementType": "labels.text",
                "stylers": [
                    {"saturation": 1},
                    {"weight": 0.1},
                    {"color": "#53575b"}
                ]
            }

        ];
        map.addStyle({
            styledMapName: "Styled Map",
            styles: styles,
            mapTypeId: "map_style"
        });

        map.setStyle("map_style");
    }
    
    /*----------------------------------------------------------
    / 7. Popup
    /----------------------------------------------------------*/
    $('.popup_img').lightcase({
	transition: 'elastic',
        showSequenceInfo: false,
        slideshow: true,
        swipe: true,
        showTitle: false,
        controls: true
    });
    
    /*----------------------------------------------------------
    / 8. Qty
    /----------------------------------------------------------*/
    if ($(".quantityd").length > 0){
        $(".quantityd .btnMinus").on('click', function () {
            var vals = parseInt($(this).next(".carqty").val(), 10);

            if (vals > 1)
            {
                vals -= 1;
                $(this).next(".carqty").val(vals);
            } else
            {
                $(this).next(".carqty").val(vals);
            }
            return false;
        });
        $(".quantityd .btnPlus").on('click', function () {
            var vals = parseInt($(this).prev(".carqty").val(), 10);
            vals += 1;
            $(this).prev(".carqty").val(vals);
            return false;
        });
    }
    /*----------------------------------------------------------
    / 9. Back To Tot
    /----------------------------------------------------------*/
    var back = $("#backtotop"), body = $("body, html");
    $(window).on('scroll', function () {
        if ($(window).scrollTop() > $(window).height())
        {
            back.css({bottom: '30px', opacity: '1', visibility: 'visible'});
        } else
        {
            back.css({bottom: '-30px', opacity: '0', visibility: 'hidden'});
        }

    });
    body.on("click", "#backtotop", function (e) {
        e.preventDefault();
        body.animate({scrollTop: 0}, 800);
        return false;
    });
    
    /*----------------------------------------------------------
    / 10. Sticky Header
    /----------------------------------------------------------*/
    if($(".isSticky").length > 0){
        var header_height = $(".isSticky").height();
        $(window).on('scroll', function(){
            if($(window).scrollTop() > 300)
            {
                $(".isSticky").addClass('fixedHeader animated slideInDown');
            }else
            {
                $(".isSticky").removeClass('fixedHeader animated slideInDown');
            }
        });
    }
    
    /*----------------------------------------------------------
    / 11. Contact Form Submission
    /----------------------------------------------------------*/
    $('#contact_form').on('submit', function (e) {
        e.preventDefault();
        var $this = $(this);

        $('button[type="submit"]', this).attr('disabled', 'disabled').val('Processing...');
        var form_data = $this.serialize();
        var required = 0;
        $(".required", this).each(function () {
            if ($(this).val() === ''){
                $(this).addClass('reqError');
                required += 1;
            } else{
                if ($(this).hasClass('reqError'))
                {
                    $(this).removeClass('reqError');
                    if (required > 0)
                    {
                        required -= 1;
                    }
                }
            }
        });
        if (required === 0) {
            $.ajax({
                type: 'POST',
                url: 'mail/mail.php',
                data: {form_data: form_data},
                success: function (data) {
                    $('button[type="submit"]', $this).removeAttr('disabled').val('Message');

                    $('.con_message', $this).fadeIn().html('<strong>Congratulations!</strong> Your query successfully sent to site admin.').removeClass('alert-warning').addClass('alert-success');
                    setTimeout(function () {
                        $('.con_message', $this).fadeOut().html('').removeClass('alert-success alert-warning');
                    }, 5000);
                }
            });
        } else {
            $('button[type="submit"]', $this).removeAttr('disabled').val('Message');
            $('.con_message', $this).fadeIn().html('<strong>Opps!</strong> Errpr found. Please fix those and re submit.').removeClass('alert-success').addClass('alert-warning');
            setTimeout(function () {
                $('.con_message', $this).fadeOut().html('').removeClass('alert-success alert-warning');
            }, 5000);
        }
    });
    $(".required").on('keyup', function () {
        $(this).removeClass('reqError');
    });
    
    /*----------------------------------------------------------
    / 12. Preloader
    /----------------------------------------------------------*/
    $(window).load(function () {
        var preload = $('.preloader');
        if (preload.length > 0) {
            preload.delay(800).fadeOut(500);
        }
    });
    
    /*----------------------------------------------------------
    / 13. Mobile Menu
    /----------------------------------------------------------*/
    $('.menu_btn').on('click', function(e){
        e.preventDefault();
        //$('.mainmenu > ul > li ul').slideUp();
        $('.mainmenu').slideToggle();
        $(this).toggleClass('active');
    });
    $('.mainmenu ul li.menu-item-has-children > a').on('click', function(e){
        e.preventDefault();
        $(this).siblings('ul').slideToggle();
    });
    
    /*----------------------------------------------------------
    / 14. Search Toggler
    /----------------------------------------------------------*/
    $('.naviSearch').on('click', function (e) {
        e.preventDefault();
        $('.popup_search_sec').toggleClass('active');
    });
    $('.popup_search_overlay').on('click', function () {
        $('.popup_search_sec').removeClass('active');
    });
    $('.popup_search_form input').on('focus', function(){
        $('.popup_search_form').addClass('focused');
    });
    $('.popup_search_form input').on('blur', function(){
        $('.popup_search_form').removeClass('focused');
    });
    
    /*----------------------------------------------------------
    / 15. Widget Toggler
    /----------------------------------------------------------*/
    $('.navigator').on('click', function (e) {
        e.preventDefault();
        $('.popup_sidebar_sec').toggleClass('active');
    });
    $('.popup_sidebar_overlay, .widget_closer').on('click', function () {
        $('.popup_sidebar_sec').removeClass('active');
    });
    
})(jQuery);