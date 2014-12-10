//JS DETECTION
document.documentElement.className = document.documentElement.className.replace("no-js", "js");

//CALL CURTAINS EFFECT      
$(document).ready(function() {

    if ($(".curtains").length > 0) {
        $('.curtains').curtain({
            scrollSpeed: 300,
            controls: '.menu',
            curtainLinks: '.curtain-links',
            nextSlide: function() {
                $(window).trigger('resize');
            },
            prevSlide: function() {
                $(window).trigger('resize');
            }
        });
        $('body').addClass('curtains-enabled');
    } else {
        $('body').addClass('curtains-disabled');
    }

});
//END CALL CURTAINS EFFECT

$(document).ready(function() {

    //POSITION FIXED NAV
    //$('nav').css({ 'top' : $('section.social').height() });

    //CALL FUNCTIONS ON SCROLL
    $(window).scroll(function() {

        var windowScroll = $(window).scrollTop();
        //POSITION FIXED NAV ON SCROLL
        if( windowScroll > $('section.social').height() ){
         $('nav').css({ 'top' : '0px' });
         $('section.social').css({ 'top' : '-999px' });
         } else {
         $('nav').css({ 'top' : $('section.social').height() - $(window).scrollTop() });
         $('section.social').css({ 'top' : '-'+$(window).scrollTop()+'px' });
         }

        //ANIMATE MENU IN
        if (windowScroll > $('.home .menu').height()) {
            $('.home .menu').animate({'bottom': '0px'}, 300, 'easeOutBounce');
            $('.home .cover h3').animate({'bottom': '-' + $(this).height() + 'px'}, 300, 'easeOutBounce');
        }

    });

    //NAV DROP DOWNS
    $('nav li').has('ul').hover(function() {
        $(this).find('ul').slideDown(300, 'easeOutBounce');
    }, function() {
        $(this).find('ul').hide();
    });

    //CALL FLEXSLIDER
    jQuery('.flexslider').flexslider({
        animation: "slide"
    });

    //BTT FUNCTION
    $(".btt a").click(function() {
        $("html, body").animate({scrollTop: 0}, "slow");
        return false;
    });
    if ($(".menu.normal").length > 0) {
        $('.menu.normal').css({'top': $('.subfooter').offset().top - 30});
    }

    //CENTER BLOCK IN MIDDLE OF WINDOW
    $('.center-block').each(function() {
        if ($(window).height() > $(this).height()) {
            $(this).css({'top': ($(window).height() / 2) - (($(this).height() / 2) - 80)});
        }
    });

    //CALL FUNCTIONS ON WINDOW RESIZE
    $(window).smartresize(function() {

        //ADJUST CENTER BLOCK LOCATION
        $('.center-block').each(function() {
            if ($(window).height() - 120 > $(this).height()) {
                $(this).css({'top': ($(window).height() / 2) - (($(this).height() / 2) - 80)});
            }
        });
        
        //var wHeight = $('.project_all').parent().parent().css('min-height');
        var wHeight = $(window).height()-0; //spacing menu
        //var wHeight = $('.sea').data('data-height'); //spacing menu
        //console.log(wHeight);
        //console.log($('.sea').attr('data-height'));
        
        $('.project_all').height($('.sea').css('min-height'));
        $('#contato').height(wHeight);

        //ADJUST MENU LOCATION
        if( $(window).scrollTop() > $('section.social').height() ){
         $('nav').css({ 'top' : '0px' });
         } else {
         $('nav').css({ 'top' : $('section.social').height() - $(window).scrollTop() });
         }

        //SET HEIGHT OF MAP
        $('#map').height($('.contact .largetoppadding').outerHeight());

        if ($(".menu.normal").length > 0) {
            $('.menu.normal').css({'top': $('.subfooter').offset().top - 30});
        }

    });

    //SET HEIGHT OF MAP
    $('#map').height($('.contact .largetoppadding').outerHeight());

});

//CONTACT FORM
jQuery(document).ready(function() {

    $('#contactform').submit(function() {

        var action = $(this).attr('action');

        $("#message").slideUp(750, function() {
            $('#message').hide();

            $('#submit')
                    .after('<img src="images/ajax-loader.gif" class="loader" />')
                    .attr('disabled', 'disabled');

            $.post(action, {
                name: $('#name').val(),
                email: $('#email').val(),
                subject: $('#subject').val(),
                comments: $('#comments').val()
            },
            function(data) {
                document.getElementById('message').innerHTML = data;
                $('#message').slideDown('slow');
                $('#contactform img.loader').fadeOut('slow', function() {
                    $(this).remove()
                });
                $('#submit').removeAttr('disabled');
                if (data.match('success') != null)
                    $('#contactform').slideUp('slow', function() {
                        if ($(".menu.normal").length > 0) {
                            $('.menu.normal').css({'top': $('.subfooter').offset().top - 30});
                        }
                    });

            }
            );

        });

        return false;

    });

});

//TABS & ACCORDION
$(document).ready(function() {
    $('#horizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion           
        width: 'auto', //auto or any width like 600px
        fit: true   // 100% fit in a container
    });

    $('#verticalTab').easyResponsiveTabs({
        type: 'vertical',
        width: 'auto',
        fit: true
    });

    $('#accordion').easyResponsiveTabs({
        type: 'accordion',
        width: 'auto',
        fit: true
    });

});

//CALL RESPONSIVE NAVIGATION FOR MOBILES
jQuery(window).load(function() {
    var navigation = responsiveNav("#nav");
    $('#nav-toggle').html('<i class="icon-reorder"></i>');
});

//PRELOADER
jQuery(window).load(function() { // makes sure the whole site is loaded
    jQuery("#status").fadeOut(); // will first fade out the loading animation
    jQuery("#preloader").delay(350).slideUp(500); // will fade out the white DIV that covers the website.

    //SET DELAY TO MODIFY THE DELAY OF THE INTRO ANIMATION
    //INTRO ANIMATION
    var delay = 1200;
    var titleheight = $('#animate-container h1').outerHeight();
    var count = $('#animate-container').height() / titleheight;

    for (var i = 0; i < count; i++) {
        var distance = titleheight * i;
        $('#animate-container').delay(delay).animate({'top': '-' + distance + 'px'}, 400, 'easeOutBounce');
    }

    $('#animate-container').delay(800).animate({'top': '0px'}, 500, 'easeOutBounce');

    if ($(".home .cover i").length > 0 && $(window).width() > 767) {
        $('.home .cover i').delay((count * delay) + (delay * 2)).animate({'top': $('.cover i').offset().top - 180}, 500, 'easeOutBounce', function() {
            //$('.cover h3').fadeIn(500);
        });
    }
    //END WINDOW ANIMATION

    $(window).trigger('resize');
})