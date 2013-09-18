(function($) {
    jQuery(function($){
        $('.menubnt').click(function()
        {
             $('.menubnt').attr('class','menubnt');
             $(this).attr('class','menubnt active');
        });
        $('.home').click(function()
        {
            window.location = '/index.php?r=site/index';
        });
        $('.radio').click(function()
        {
            $('#content-full').load('/index.php?r=radio/index');
        });
        
        $('.portfolio').click(function()
        {
            $('#content-full').load('/index.php?r=portfolio/index');
        });
        
        $('.contato').click(function()
        {
            $('#content-full').load('/index.php?r=site/contact');
        });
            $('#myCarousel').carousel({
                interval: 5000
            })
    });
})(jQuery);
            