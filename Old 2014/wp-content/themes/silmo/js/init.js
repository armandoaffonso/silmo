$(document).ready(function() {

    $(window).resize(function() {
        $('.home .content_video').width($(window).width());
        $('.home .content_video').height($(window).height());

        $('.home #project_all').width($(window).width());
        $('.home #project_all').height($(window).height());
        
        $('.home #section-3').width($(window).width());
        $('.home #section-3').height($(window).height());
        
        $('.home .project_gallery').width($(window).width());
        $('.home .project_gallery').height($(window).height());
        
        $('.home #contato').width($(window).width());
        $('.home #contato').height($(window).height());
    });
});

if (!window.jQuery) {
    document.write('<script src="js/jquery-1.10.2.min.js"><\/script>');
}