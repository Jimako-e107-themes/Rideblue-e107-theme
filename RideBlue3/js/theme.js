
var allowHover = false; // don't allow hover

// Adjust nav
function adjustNav() {
    if ($('.sitelinks-container .mobile-menu-button').css('display') !== 'none') {
        allowHover = false;
        $('.sitelinks-container .sitelinks li a').off('click');
        $('.sitelinks-container .sitelinks li a.parent').click(function(e) {
            allowHover = false;
            e.preventDefault();
            $(this).parent('li').toggleClass('open');
        });
        $(document).click(function (e) {
            var target = $(e.target);
            if (!target.is('.sitelinks-container .sitelinks') && !target.parents('.sitelinks-container .sitelinks').length && !target.is('.sitelinks-container .mobile-menu-button') && !target.parents('.sitelinks-container .mobile-menu-button').length) {
                $('.sitelinks-container .mobile-menu-button').removeClass('active').parent().removeClass('open');
            }
        });
    } else {
        $('.sitelinks-container .sitelinks li').removeClass('open');
        $('.sitelinks-container .sitelinks li a').off('click');

        $('.sitelinks-container .sitelinks > li > a').click(function (e) {
            if ($(this).attr('href') == '#' || $(this).hasClass('parent')) {
                e.preventDefault();
            }
            if ($(this).parent('.open').length && allowHover === true) {
                $('.sitelinks-container .sitelinks > li > a').blur().parent().removeClass('open');
                allowHover = false;
            } else {
                allowHover = true;
                $('.sitelinks-container .sitelinks > li > a').blur().parent().removeClass('open');
                $(this).parent().addClass('open');
            }
        });

        $('.sitelinks-container .sitelinks > li > a').hover(function () {
            if (allowHover) {
                $('.sitelinks-container .sitelinks > li > a').parent().removeClass('open');
                if ($(this).hasClass('parent')) {
                    $(this).parent().toggleClass('open');
                }
            }
        });

        $(document).click(function (e) {
            var target = $(e.target);
            if (!target.is('.sitelinks-container .sitelinks > li > a')) {
                $('.sitelinks-container .sitelinks > li').removeClass('open');
                allowHover = false;
            }
        });
    }
}

// Adjust content
function adjustContent() {

}

// Window resize event
$(window).on('resize orientationchange', function() {
    adjustNav();
});

$(window).on('scroll', function(e) {
    requestAnimationFrame(function() {
        if ($(this).scrollTop() > 100) {
            $('#scrollToTop').addClass('visible');
        } else {
            $('#scrollToTop').removeClass('visible');
        }
    });
});


// Page has finished loading
$(document).ready(function() {
    // Add parent class to nav
    $('.sitelinks-container .sitelinks li a').next('ul').prev('a').addClass('parent');

    // Mobile nav button
    $('.sitelinks-container .mobile-menu-button').click(function(e) {
        e.preventDefault();
        $(this).toggleClass('active');
        $(this).parent().toggleClass('open');
    });

    // Call adjust functions
    adjustNav();
    adjustContent();

    // Make tables responsive
    $('table.table').wrap('<div class="table-responsive"></div>');

    $('#promoboxScroll').click(function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: $(window).height()}, 300);
    });

    $('#scrollToTop').click(function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0}, 300);
    });
});
