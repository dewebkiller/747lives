
jQuery(document).ready(function ($) {


//Hover Menu Dropdown in Bootstrap
    jQuery('ul.navbar-nav li.dropdown').hover(function () {
        jQuery(this).find('.dropdown-menu').stop(true, true).show();
        jQuery(this).addClass('open');
    }, function () {
        jQuery(this).find('.dropdown-menu').stop(true, true).hide();
        jQuery(this).removeClass('open');
    });
// Scroll to top
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });
    //Add div clearfix after 3 list
    jQuery('.navbar-nav li').addClass('nav-item');
    jQuery('.navbar-nav > li > a').addClass('nav-link');
    jQuery('.navbar-nav > li.menu-item-has-children').addClass('dropdown');
    jQuery('.navbar-nav > li.menu-item-has-children ul.sub-menu').addClass('dropdown-menu');
    jQuery('.sub-menu > li > a').addClass('dropdown-item hvr-sweep-to-right');
    jQuery('.menu-item-has-children  > a').addClass('dropdown-toggle');

   // Toggle dropdown menu on click
   $('.dropdown-toggle').on('click', function(e) {
    e.preventDefault(); // Prevent default anchor behavior

    var $el = $(this);
    var $parent = $el.offsetParent(".dropdown-menu");

    // Toggle this dropdown
    var $subMenu = $el.next(".dropdown-menu");
    $subMenu.toggleClass('show');

    // Close all other dropdowns
    $('.dropdown-menu').not($subMenu).removeClass('show');

    return false;
});

// Close dropdowns when clicking outside
$(document).on('click', function(e) {
    if (!$(e.target).closest('.dropdown-toggle').length) {
        $('.dropdown-menu').removeClass('show');
    }
});

});

