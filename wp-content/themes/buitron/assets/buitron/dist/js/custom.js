jQuery(document).ready(function($){
    $(".matchheight").matchHeight({
        property: 'min-height'
    });

    //Center slide texts in home
    if(data_js.is_home){
        center_texts($("#slide-home .item .content"),640);
    }

    //Center banner title of company page
    if(data_js.is_company){
        center_texts($(".post-type-archive-company .banner .title"),700);
    }

    function center_texts(component,size){
        if(Modernizr.mq('(min-width: '+size+'px)')){
            var windows_width = $(window).width();
            component.css({left:(windows_width - size)/2});
        }
        if(Modernizr.mq('(max-width: '+size+'px)')){
            component.css({left:0});
        }
    }

    $(window).resize(function(){
        if(data_js.is_home){
            center_texts($("#slide-home .item .content"),640);
        }
        if(data_js.is_company){
            center_texts($(".post-type-archive-company .banner .title"),700);
        }
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