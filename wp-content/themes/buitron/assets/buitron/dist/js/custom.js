jQuery(document).ready(function($){
    $(".matchheight").matchHeight({
        property: 'min-height'
    });

    //JS for fades slides
    $('.fade_slide').fadeslide();

    /*setInterval(function(){
        $('.fade_slide :first-child').fadeOut()
        .next('div').fadeIn()
        .end().appendTo('.fade_slide');
    },3000);*/
});

(function($){
    $.fn.fadeslide = function() {
        return this.each(function() {

            $(this).children("div").eq(0).show();

            if($("div",this).length > 1){
                setInterval(function(){
                    $(this).children("div").eq(0).fadeOut();
                },3000);
            }
            
            /*

            setInterval(function(){
                $(':first-child',this).fadeOut()
                .next('div').fadeIn()
                .end().appendTo('.fade_slide');
            },3000);*/
        });
    };
}(jQuery));