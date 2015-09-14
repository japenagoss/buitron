<div id="home-services" class="container">
    <div class="row">

        <!-- TEXT -->
        <div class="col-md-6 col-lg-6 content matchheight">
            <h2 class="title"><?php _e("servicios","buitron");?></h2>
            <div class="paragraph">
                <?php echo get_option("btr_home_services_text");?>
            </div>
            
            <!-- BUTTON -->
            <div class="button">
                <a href="<?php echo get_option("btr_home_services_link");?>">
                    <?php _e("ver más","buitron");?>
                </a>
            </div>
        </div>
    
        <!-- IMAGE -->
        <div class="col-md-6 col-lg-6 matchheight">
            <!-- SLIDE -->
            <div class="fade_slide">
                <?php
                    $args_services = array(
                        'post_type'         => 'services_slides',
                        'posts_per_page'    => -1,
                        'order'             => 'ASC',
                        'orderby'           => 'menu_order',
                    );
                    $services = new WP_Query($args_services); 
                ?>
                <?php if($services->have_posts()):?>
                    <?php while($services->have_posts()):$services->the_post();?>
                        <div>
                            <?php the_post_thumbnail("full");?>
                        </div>
                    <?php endwhile;?>
                <?php endif;?>
            
            </div>
        </div>
    </div>

    <div class="hand_services">
    </div>

</div>  