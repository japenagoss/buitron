<div id="container-home-info">
    <div class="container">
        
        <!-- LOGO -->
        <?php $info_logo = get_option("btr_home_logo");?>
        <?php if(!empty($info_logo)):?>
            <img src="<?php echo $info_logo;?>">
        <?php endif;?>

        <!-- INFO -->
        <div class="paragraph">
            <?php echo get_option("btr_home_text");?>
        </div>
        
        <!-- BUTTON -->
        <div class="button">
            <a href="<?php echo get_option("btr_home_link");?>">
                <?php _e("ver más","buitron");?>
            </a>
        </div>
    </div>
</div>