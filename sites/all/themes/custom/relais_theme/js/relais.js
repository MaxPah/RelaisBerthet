(function($) {
    $(document).ready(function(){
        $('#mobile_nav_wrap').click(function(){
            $(this).toggleClass('open');
            $('#primary_nav_wrap').toggle();
        });
    });

    $(window).on('resize', function () {
        if ($(window).width() > 780) {
            $('#primary_nav_wrap').show();
        }
        else {
            $('#primary_nav_wrap').hide();
        }
    });
})( jQuery );