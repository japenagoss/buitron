<div class="block_about_us">
    <h2 class="title"><?php the_title();?></h2>
    
    <div class="content">
        <?php echo strip_tags(get_the_excerpt());?>
    </div>

    <?php $show_button = get_post_meta(get_the_id(),"_show_contact_button",true); ?>
    
    <?php if($show_button == "yes"):?>
        <div class="text-center">
            <div class="button">
                <a href="<?php echo get_option("btr_contact_link",true);?>">
                    <?php _e("Contáctenos");?>
                </a>
            </div>
        </div>
    <?php endif;?>

    <!-- SLIDE -->
    <div class="fade_slide">
        <?php 
        $images   = get_post_meta(get_the_id(),"_slide_company",true); 
        $images   = maybe_unserialize($images);
        ?>

        <?php if(count($images) > 0):?>
            <?php foreach ($images as $key => $image):?>

                <?php $image = btr_images($image);?>

                <div>
                    <img src="<?php echo $image;?>">
                </div>

            <?php endforeach;?>
        <?php endif;?>
    </div>

</div>