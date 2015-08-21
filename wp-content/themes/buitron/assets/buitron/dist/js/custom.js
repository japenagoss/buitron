jQuery(document).ready(function($){
    $(".matchheight").matchHeight({
        property: 'min-height'
    });

    //JS for fades slides
    $('.fade_slide').fadeslide();
});

(function($){
    $.fn.fadeslide = function() {
        return this.each(function() {
            var slide           = $(this);

            slide.children("div").eq(0).show();

            if($("div",slide).length > 1){
                var i  = 0;

                setInterval(function(){
                    slide.children("div").eq((i+1)).fadeIn(1000);

                    slide.children("div").eq(i).fadeOut(1000,function(){
                        slide.append($(this).clone());
                        $(this).remove();
                    });
                },5000);
            }
        });
    };
}(jQuery));