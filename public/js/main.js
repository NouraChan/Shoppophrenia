(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner(0);


    // Fixed Navbar
    $(window).scroll(function () {
        if ($(window).width() < 992) {
            if ($(this).scrollTop() > 55) {
                $('.fixed-top').addClass('shadow');
            } else {
                $('.fixed-top').removeClass('shadow');
            }
        } else {
            if ($(this).scrollTop() > 55) {
                $('.fixed-top').addClass('shadow').css('top', -55);
            } else {
                $('.fixed-top').removeClass('shadow').css('top', 0);
            }
        }
    });


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonial carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 2000,
        center: false,
        dots: true,
        loop: true,
        margin: 25,
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 1
            },
            992: {
                items: 2
            },
            1200: {
                items: 2
            }
        }
    });


    // vegetable carousel
    $(".vegetable-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        center: false,
        dots: true,
        loop: true,
        margin: 25,
        nav: true,
        navText: [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    });


    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        $('#videoModal').on('shown.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })

        $('#videoModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc);
        })
    });



    // Product Quantity
    $('.quantity button').on('click', function () {
        var button = $(this);
        var oldValue = button.parent().parent().find('input').val();
        if (button.hasClass('btn-plus')) {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        button.parent().parent().find('input').val(newVal);
    });

})(jQuery);

function rateDetect() {
    let r1 = document.getElementById('rate1');
    let r2 = document.getElementById('rate2');
    let r3 = document.getElementById('rate3');
    let r4 = document.getElementById('rate4');
    let r5 = document.getElementById('rate5');
    let detect = document.getElementById('rate_detect');

    if (2 > detect.value >= 1) {
        r1.classList.add('text-secondary');
    } else if (3 > detect.value >= 2) {
        r1.classList.add('text-secondary');
        r2.classList.add('text-secondary');
    }
    else if (4 > detect.value >= 3) {
        r1.classList.add('text-secondary');
        r2.classList.add('text-secondary');
        r3.classList.add('text-secondary');
    } else if (5 > detect.value >= 4) {
        r1.classList.add('text-secondary');
        r2.classList.add('text-secondary');
        r3.classList.add('text-secondary');
        r4.classList.add('text-secondary');
    } else if (detect.value = 5) {
        r1.classList.add('text-secondary');
        r2.classList.add('text-secondary');
        r3.classList.add('text-secondary');
        r4.classList.add('text-secondary');
        r5.classList.add('text-secondary');
    };
}

function userrate_detect() {
    let r_1 = document.getElementById('rate1');
    let r_2 = document.getElementById('rate2');
    let r_3 = document.getElementById('rate3');
    let r_4 = document.getElementById('rate4');
    let r_5 = document.getElementById('rate5');
    let detection = document.getElementById('userrate');

    if (2 > detection.value >= 1) {
        r_1.classList.remove('text-muted');
        r_2.classList.remove('text-muted');
        r_3.classList.remove('text-muted');
        r_4.classList.remove('text-muted');
        r_5.classList.remove('text-muted');

        r_1.classList.add('text-muted');
    } else if (3 > detection.value >= 2) {
        r_1.classList.remove('text-muted');
        r_2.classList.remove('text-muted');
        r_3.classList.remove('text-muted');
        r_4.classList.remove('text-muted');
        r_5.classList.remove('text-muted');

        r_1.classList.add('text-muted');
        r_2.classList.add('text-muted');
    }
    else if (4 > detection.value >= 3) {
        r_1.classList.remove('text-muted');
        r_2.classList.remove('text-muted');
        r_3.classList.remove('text-muted');
        r_4.classList.remove('text-muted');
        r_5.classList.remove('text-muted');

        r_1.classList.add('text-muted');
        r_2.classList.add('text-muted');
        r_3.classList.add('text-muted');
    } else if (5 > detection.value >= 4) {
        r_1.classList.remove('text-muted');
        r_2.classList.remove('text-muted');
        r_3.classList.remove('text-muted');
        r_4.classList.remove('text-muted');
        r_5.classList.remove('text-muted');

        r_1.classList.add('text-muted');
        r_2.classList.add('text-muted');
        r_3.classList.add('text-muted');
        r_4.classList.add('text-muted');
    } else if (detection.value = 5) {
        r_1.classList.add('text-muted');
        r_2.classList.add('text-muted');
        r_3.classList.add('text-muted');
        r_4.classList.add('text-muted');
        r_5.classList.add('text-muted');
    }
}

function changerate(star){

    let detection = document.getElementById('userrate');

    for (let i = 0; i < 6; i++) {
         if (star==['user_rate'+i]){
            detection.value = i;
    }
    }
   
} 

// let activeBtn = document.getElementById(btnID);
// document.getElementById('day1Btn').setAttribute("class", "datenonselected");
// document.getElementById('day2Btn').setAttribute("class", "datenonselected");
// document.getElementById('day3Btn').setAttribute("class", "datenonselected");
// activeBtn.setAttribute("class", "dateselected");