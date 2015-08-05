<div id="slide-home" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        
        <?php 
            $slides_args = array(
                'posts_per_page'    => -1,
                'order'             => 'ASC',
                'orderby'           => 'menu_order',
                'post_type'         => 'home_slides'
            );

            $slides         = new WP_Query($slides_args);
            $slide_counter  = 1;
        ?>

        <!-- BUCLE FOR GENERATE SLLIDES -->
        <?php if($slides->have_posts()):?>
            <?php while($slides->have_posts()):?>
                <?php $slides->the_post();?>

                <?php 
                    $slide_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),"full");
                ?>
                
                <?php if(!empty($slide_image)):?>
                    <?php $active_slide = ($slide_counter == 1)?"active":"";?>
                   
                    <!-- SLIDES -->
                    <div class="item <?php echo $active_slide;?>" style="background-image:url(<?php echo $slide_image[0];?>);">
                        
                        <!-- CONTENT SLIDE -->
                        <div class="content">
                            <h1><?php echo strip_tags(get_the_title());?></h1>
                            <p><?php echo strip_tags(get_the_excerpt());?></p>
                            <div class="button">
                                <a href="<?php echo get_post_meta("_link_home_slide");?>">
                                    <?php _e("Ver más","buitron");?>
                                </a>
                            </div>
                        </div>
                        
                    </div> 

                    <?php $slide_counter++;?>
                <?php endif;?>

            <?php endwhile;?>
        <?php endif;?>
    </div>

    <!-- BUTTONS SLIDE -->
    <a class="prev-new" href="#slide-home" role="button" data-slide="prev">
        <span></span>
    </a>
    <a class="next-new" href="#slide-home" role="button" data-slide="next">
        <span></span>
    </a>
</div>