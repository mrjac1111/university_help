/* --------------------------------------
=========================================
Theme : Educare
Version: 1.0 (Initial Release)
Designed By: Alex Theme
=========================================
*/

"use strict";

// Hide Loading Box (Preloader)
function handlePreloader() {
    if ($('.preloader').length) {
        $('.preloader').delay(500).fadeOut(500);
    }
}

// revolutionSliderActiver
function revolutionSliderActiver() {
    if ($('.rev_slider_wrapper #slider1').length) {
        $("#slider1").revolution({
            sliderType: "standard",
            sliderLayout: "auto",
            delay: 5000,
            navigation: {
                arrows: { enable: true }
            },
            gridwidth: 1170,
            gridheight: 770
        });
    };
}
// galleryMasonaryLayout
function galleryMasonaryLayout() {
    if ($('.img-masonary').length) {
        $('.img-masonary').isotope({
            layoutMode: 'masonry'
        });
    }
}
// accrodion
function accrodion() {
    if ($('.accrodion-grp').length) {

        $('.accrodion-grp').each(function() {
            var accrodionName = $(this).data('grp-name');
            var Self = $(this);
            Self.addClass(accrodionName);
            Self.find('.accrodion .accrodion-content').hide();
            Self.find('.accrodion.active').find('.accrodion-content').show();
            Self.find('.accrodion').each(function() {
                $(this).find('.accrodion-title').on('click', function() {
                    if ($(this).parent().hasClass('active') === false) {
                        $('.accrodion-grp.' + accrodionName).find('.accrodion').removeClass('active');
                        $('.accrodion-grp.' + accrodionName).find('.accrodion').find('.accrodion-content').slideUp();
                        $(this).parent().addClass('active');
                        $(this).parent().find('.accrodion-content').slideDown();
                    };
                });
            });
        });

    };
}



//Accordions
if ($('.accordion-box').length) {
    $('.accordion-box .acc-btn').on('click', function() {
        if ($(this).hasClass('active') !== true) {
            $('.accordion-box .acc-btn').removeClass('active');
        }

        if ($(this).next('.acc-content').is(':visible')) {
            $(this).removeClass('active');
            $(this).next('.acc-content').slideUp(500);
        } else {
            $(this).addClass('active');
            $('.accordion-box .acc-content').slideUp(500);
            $(this).next('.acc-content').slideDown(500);
        }
    });
}



//Skill Progress Bar
if ($('.skill-box .bar-fill').length) {
    $(".skill-box .bar-fill").each(function() {
        var progressWidth = $(this).attr('data-percent');
        $(this).css('width', progressWidth + '%');
        $(this).parents('.bar').children('.percent').html(progressWidth + '%');
    });
}

//Tabs Box
if ($('.tab-style').length) {
    $('.tab-style .tab-btn').on('click', function(e) {
        e.preventDefault();
        var target = $($(this).attr('href'));
		var tabstyle=$('.tab-style .tab');
        $('.tab-style .tab-btn').removeClass('active');
        $(this).addClass('active');
        tabstyle.fadeOut(0);
        tabstyle.removeClass('active-tab');
        $(target).fadeIn(300);
        $(target).addClass('active-tab');
        var windowWidth = $(window).width();
        if (windowWidth <= 700) {
            $('html, body').animate({
                scrollTop: $('.tab-style .content-column').offset().top - 100
            }, 1000);
        }
    });

}

//LightBox / Fancybox
if ($('.lightbox-image').length) {
    $('.lightbox-image').fancybox();
}

// teamCarosule
function teamCarosule() {
    if ($('.team-carousel').length) {
        $('.team-carousel').owlCarousel({
            loop: true,
            margin: 30,
            dots: false,
            nav: true,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            autoplay: false,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        });
    }
}

// teamCarosule
function courseCarosule() {
    if ($('.course-carousel').length) {
        $('.course-carousel').owlCarousel({
            loop: true,
            margin: 30,
            dots: true,
            nav: false,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                },
                1200: {
                    items: 3
                }
            }
        });
    }
}

// sponsorsCarosule
function sponsorsCarosule() {
    if ($('.sponsors-section .slider').length) {
        $('.sponsors-section .slider').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            autoplay: 5000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                800: {
                    items: 3
                },
                1024: {
                    items: 4
                },
                1100: {
                    items: 5
                }
            }
        });
    }
}

// galleryCarousel
function galleryCarousel() {
    if ($('.gallery-slider-carousel').length) {
        $('.gallery-slider-carousel').owlCarousel({
            loop: true,
            margin: 5,
            dots: false,
            nav: true,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            autoplayHoverPause: true,
            autoplay: 5000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 2
                },
                600: {
                    items: 3
                },
                800: {
                    items: 3
                },
                1024: {
                    items: 3
                },
                1100: {
                    items: 4
                }
            }
        });
    }
}
// testiCarosule
function testiCarosule() {
    if ($('.testimonaials-carousel').length) {
        $('.testimonaials-carousel').owlCarousel({
            loop: true,
            margin: 50,
            nav: false,
            dots: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        });
    }
}
// serviceCarosule
function serviceCarosule() {
    if ($('.services-carousel').length) {
        $('.services-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: true,
            dots: false,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                540: {
                    items: 2
                },
                849: {
                    items: 3
                },
                1110: {
                    items: 4
                },
                1200: {
                    items: 3
                },
                1400: {
                    items: 3
                },
                1626: {
                    items: 4
                }
            }
        });
    }
}
// CounterNumberChanger
function CounterNumberChanger() {
    var timer = $('.timer');
    if (timer.length) {
        timer.appear(function() {
            timer.countTo();
        })
    }
}
// stickyHeader
function stickyHeader() {
	var stricky=$('.stricky1');
    if (stricky.length) {
        var strickyScrollPos = 100;
        if ($(window).scrollTop() > strickyScrollPos) {
            stricky.removeClass('fadeIn animated');
            stricky.addClass('stricky-fixed fadeInDown animated');
        } else if ($(this).scrollTop() <= strickyScrollPos) {
            stricky.removeClass('stricky-fixed fadeInDown animated');
            stricky.addClass('slideIn animated');
        }
    };
}
// contactFormValidation
function contactFormValidation() {
    if ($('.contact-form').length) {
        $('.contact-form').each(function() {
            var cfName = $(this).attr('id');
            $('#' + cfName).validate({ // initialize the plugin
                rules: {
                    name: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    message: {
                        required: true
                    },
                    date: {
                        required: true
                    },
                    category: {
                        required: true
                    },
                    phone: {
                        required: true
                    },
                    gender: {
                        required: true
                    },
                    dateOfBirth: {
                        required: true
                    },
                    subject: {
                        required: true
                    }
                },
                submitHandler: function(form) {
                    // sending value with ajax request
                    $.post($(form).attr('action'), $(form).serialize(), function(response) {
                        $(form).parent('div').append(response);
                        $(form).find('input[type="text"]').val('');
                        $(form).find('input[type="email"]').val('');
                        $(form).find('textarea').val('');
                    });
                    return false;
                }
            });
        });
    }
}

// selectInput
function selectInput() {
    if ($('.select-input').length) {
        $('.select-input').selectmenu();
    };
}
// datePicker
function datePicker() {
    if ($('.date-picker').length) {
        $('.date-picker').datepicker();
    };
}
// gMap
function gMap() {
    if ($('.google-map').length) {
        $('.google-map').each(function() {
            // getting options from html 
            var mapName = $(this).attr('id');
            var mapLat = $(this).data('map-lat');
            var mapLng = $(this).data('map-lng');
            var iconPath = $(this).data('icon-path');
            var mapZoom = $(this).data('map-zoom');
            var mapTitle = $(this).data('map-title');

            // if zoom not defined the zoom value will be 15;
            if (!mapZoom) {
                var mapZoom = 15;
            };
            // init map
            var map;
            map = new GMaps({
                div: '#' + mapName,
                scrollwheel: false,
                lat: mapLat,
                lng: mapLng,
                zoom: mapZoom
            });
            // if icon path setted then show marker
            if (iconPath) {
                map.addMarker({
                    icon: iconPath,
                    lat: mapLat,
                    lng: mapLng,
                    title: mapTitle
                });
            }
        });
    };
}
// mobileMenu
function mobileMenu() {
    if ($('.navigation .nav-footer button').length) {
        $('.navigation .nav-footer button').on('click', function() {
            $('.navigation .nav-header').slideToggle();
            $('.navigation .nav-header').find('.dropdown').children('a').append(function() {
                return '<button><i class="fa fa-bars"></i></button>';
            });
            $('.navigation .nav-header .dropdown a button').on('click', function() {
                $(this).parent().parent().children('ul.submenu').slideToggle();
                return false;
            });
        });
    };
}

// Dom Ready Function
jQuery(document).on('ready', function() {
    (function($) {
        // add your functions
        revolutionSliderActiver();
        accrodion();        
        galleryMasonaryLayout();
        teamCarosule();
		courseCarosule();
        sponsorsCarosule();
        galleryCarousel();
        CounterNumberChanger();
        testiCarosule();
        serviceCarosule();
        contactFormValidation();
        selectInput();
        datePicker();
        gMap();
        mobileMenu();
    })(jQuery);
});
// window on load function
jQuery(window).on('load', function() {
    (function($) {
        // add your functions
        handlePreloader();
    })(jQuery);
});
// window on scroll function
jQuery(window).on('scroll', function() {
    (function($) {
        // add your functions
        stickyHeader();
    })(jQuery);
});
