jQuery(document).ready(function($){

    /**
     * Show and hide content for each item on menu 
     */
    $('#btr_container #of-nav li a').click(function(e){
        e.preventDefault();
        var element = $(this),
            id      = element.attr('href');

        $(id).show();
        $(id).siblings('.content-hide').hide();
        element.parent().addClass('current');
        element.parent().siblings('li').removeClass('current');
    });


    /**
     * Upload any images with media popup of Wordpress
     */
    var imageControl;

    $('div').on("click",'.media_upload_button',function(){
        var element       = $(this),
            title         = element.parent().prev().prev().text();

        imageControl    = element.parent().prev().children('.upload');

        tb_show(title, 'media-upload.php?type=image&amp;TB_iframe=true' );
        
        window.send_to_editor = function(html) {
            imgurl = $('img',html).attr('src');
            $(imageControl).val(imgurl);
            $(imageControl).parents('.controls').next().next('.screenshot').show().html('<img src="'+imgurl+'">');
            tb_remove();
        }

        return false;
    });

    /**
     * Remove url of textbox for images
     */
    $('.mlu_remove_button').click(function(){
        var element    = $(this);
        element.parent().next().hide().html('');
        element.parent().prev().children('.upload').val('');
    });

    /**
     * Save by ajax form data
     */
    $('#btr_save').click(function(){
        var data =  $('#btr_container form').serialize()+'&action=btr_save';
        $.post(ajaxurl, data, function(response) {
            alert(response);
        });
    });

    $('#btr_save').mousedown(function(){
        tinyMCE.triggerSave();
    });
    

    /**
     * Control color picker
     */
    $('.btr-color-field').wpColorPicker();

    /*
     * Remove and add controls for meta box
     */
    $(".postbox").on("click",".button_add",function(){
        var parent      = $(this).parent().parent(),
            content     = parent.clone().html();
                        
        parent.parent().append('<div class="fieldset">'+content+'</div>');
        
        var copy_element = parent.parent().children('.fieldset').last();
        copy_element.children('.controls').children('.regular-text').val('');
        copy_element.children('.screenshot').html('').hide();

    });

    $(".postbox").on("click",".button_remove",function(){
        $(this).parent().parent().remove();
    });

});