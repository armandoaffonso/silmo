
/**/
(function($, sr) {

    // debouncing function from John Hann
    // http://unscriptable.com/index.php/2009/03/20/debouncing-javascript-methods/
    var debounce = function(func, threshold, execAsap) {
        var timeout;

        return function debounced() {
            var obj = this, args = arguments;
            function delayed() {
                if (!execAsap)
                    func.apply(obj, args);
                timeout = null;
            }
            ;

            if (timeout)
                clearTimeout(timeout);
            else if (execAsap)
                func.apply(obj, args);

            timeout = setTimeout(delayed, threshold || 100);
        };
    }
    // smartresize 
    jQuery.fn[sr] = function(fn) {
        return fn ? this.bind('resize', debounce(fn)) : this.trigger(sr);
    };

})(jQuery, 'smartresize');
/**/


var f = $('.content_video iframe'),
        url = f.attr('src').split('?')[0],
        status = $('.status');

// Listen for messages from the player
if (window.addEventListener)
{
    window.addEventListener('message', onMessageReceived, false);
}
else
{
    window.attachEvent('onmessage', onMessageReceived, false);
}

// Handle messages received from the player
function onMessageReceived(e)
{
    var data = JSON.parse(e.data);

    switch (data.event) {
        case 'ready':
            onReady();
            break;

        case 'playProgress':
            onPlayProgress(data.data);
            break;

        case 'pause':
            onPause();
            break;

        case 'finish':
            onFinish();
            break;
    }
}

$('.home .content_video').on('click', function()
{
    var iframe = $(this).find('iframe');

    $(this).children().show();
    //console.log('play');
    post('play', '', iframe[0]);
});

// Helper function for sending a message to the player
function post(action, value, player)
{
    var data = {method: action};

    if (value)
        data.value = value;

    if (player == undefined)
        player = f[0];

    //console.log(action, value, player);

    player.contentWindow.postMessage(JSON.stringify(data), url);
}

function onReady() {
    status.text('ready');

    post('addEventListener', 'pause');
    post('addEventListener', 'finish');
    post('addEventListener', 'playProgress');
}

function onPause() {
    status.text('paused');
}

function onFinish() {
    status.text('finished');
}

function onPlayProgress(data)
{
    status.text(data.seconds + 's played');
}

/* buttons scroll */
$('.stop').click(function() {
    post('pause');
    //console.log('stop');
});

/* next_prev buttons */
/*
 var count_slide = 0;
 var total_slide = $('#project_all > div').length;
 */

var enableBtns = function($prj, count_slide, total_slide)
{
    //console.log('en ' + count_slide + '<' + (total_slide - 1));

    if (count_slide > 0)
        $prj.find('.prev_btn').show(300);
    else
        $prj.find('.prev_btn').hide(200);

    //console.log($prj.find('.next_btn')[0]);
    //console.log($prj.find('.prev_btn')[0]);

    if (count_slide < total_slide - 1)
        $prj.find('.next_btn').show(300);
    else
    {
        console.log('hide next');
        $prj.find('.next_btn').hide(200);
    }
};//enableBtns

$('.sea .next_btn').click(function() {
      
    $prj = $(this).closest('.sea');
    
    console.log($prj);

    count_slide_cur = $prj.data('cur');
    if (isNaN(count_slide_cur))
        count_slide_cur = 0;
    total_slide = $prj.data('total_slides');

    if ($prj.find('.project_gallery').filter(':animated').length > 0)
        return false;

    if (count_slide_cur < total_slide)
    {
        count_slide_cur++;

        $prj.data('cur', count_slide_cur);

        var $screens = $prj.find('.screens');
        
        console.log($screens[0]);

        var offset = $screens.children().eq(count_slide_cur).offset();
        
        console.log(offset);

        var distance_screen = $screens.offset();
        
        console.log(distance_screen);
        
        var moveScr = offset.left - distance_screen.left;
        
        console.log(moveScr);
        
        $screens.find('.project_gallery').animate({"left": "-=" + moveScr + "px"}, 300, function() {
            enableBtns($prj, count_slide_cur, total_slide);
        });
    }
});

$('.sea .prev_btn').click(function() {
    $prj = $(this).closest('.sea');

    count_slide_cur = $prj.data('cur');
    if (isNaN(count_slide_cur))
        count_slide_cur = 0;
    total_slide = $prj.data('total_slides');

    if ($prj.find('.project_gallery').filter(':animated').length > 0)
        return false;

    if (count_slide_cur > 0)
    {
        count_slide_cur--;

        $prj.data('cur', count_slide_cur);

        var $screens = $prj.find('.screens');

        var offset = $screens.children().eq(count_slide_cur).offset();

        var distance_screen = $screens.offset();
        var moveScr = offset.left - distance_screen.left;
        $screens.find('.project_gallery').animate({"left": "-=" + moveScr + "px"}, 300, function() {
            enableBtns($prj, count_slide_cur, total_slide);
        });
    }
});

$('.sea').each(function() {
    $(this).data('total_slides', $(this).find('.project_gallery').length);
    enableBtns($(this), 0, $(this).data('total_slides'));
});

//enableBtns();

$(window).smartresize(function() {
    //console.log('atual: '+count_slide);
    //var offset = $('#project_all').children().eq(count_slide).offset();
    //$('#project_all .project_gallery').css({ "left": "-="+offset.left+"px" });
    $('.sea').each(function(){
        var $screens = $(this).find('.screens');

        count_slide_cur = $(this).data('cur');
        if(isNaN(count_slide_cur))count_slide_cur = 0;

        var offset = $screens.children().eq(count_slide_cur).offset();

        var distance_screen = $screens.offset();
        var moveScr = offset.left - distance_screen.left;
        $screens.find('.project_gallery').css({"left": "-=" + moveScr + "px"});
    });
});

/* menu */
var top_menu = jQuery('.top_menu ul li');
top_menu.bind('click', function() {
	var mn_text = jQuery(this).children('span').text().toLowerCase();
	switch(mn_text) {
		case 'home':
			//jQuery('body').scrollTo('.mn_home');
			$("html, body").animate({scrollTop: 0}, "slow");
			distanceTop = jQuery('#section-7').offset();
			console.log(distanceTop);
		break;
		case 'reel':
			jQuery("html, body").animate({scrollTop: jQuery('.current').height()}, "slow");
		break;
		case 'projects':
			jQuery("html, body").animate({scrollTop: jQuery('.current').height()*2}, "slow");
		break;
		case 'contacts':
			jQuery("html, body").animate({scrollTop: jQuery('body').height()}, "slow");
		break;
	}
});
