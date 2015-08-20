<div class="block_about_us">
    <h2 class="title"><?php the_title();?></h2>
    
    <div class="content">
        <?php echo strip_tags(get_the_excerpt());?>
    </div>

    <!-- SLIDE -->
    <div class="fade_slide">
        <?php 
        $images   = get_post_meta(get_the_id(),"_slide_company",true); 
        $images   = maybe_unserialize($images);
        ?>

        <?php if(count($images) > 0):?>
            <?php foreach ($images as $key => $image):?>

                <div style="background-image:url(<?php echo $image;?>);">
                </div>

            <?php endforeach;?>
        <?php endif;?>
    </div>
</div>