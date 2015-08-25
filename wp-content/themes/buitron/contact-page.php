<?php 
/**
 * Template Name: Contacto
 */

get_header(); ?>

<div id="container_contact_page">
    <header>
        <?php echo get_option("btr_contact_map");?>
    </header>
    <div class="container-form">
        <div class="row">
            <div class="col-md-6 col-lg-6 matchheight">
                <div class="block">
                    
                    <h1 class="title"><?php _e("¿Tienes preguntas?","buitron");?></h1>
                    <div class="paragraph">
                        <?php echo get_option("btr_contact_text_one");?>
                    </div>

                    <?php 
                        $args = array(
                            'posts_per_page'    => -1,
                            'order'             => 'ASC',
                            'orderby'           => 'menu_order',
                            'post_type'         => 'contact_items'
                        );

                        $items = new WP_Query($args);
                    ?>

                    <?php if($items->have_posts()):?>
                        <?php while($items->have_posts()):$items->the_post();?>
                            
                            <div class="item">
                                <div>
                                    <?php the_post_thumbnail("full");?> 
                                </div>
                                <div>
                                    <?php the_excerpt();?>
                                </div>
                            </div>

                        <?php endwhile;?>
                    <?php endif;?>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 matchheight">
                <div class="block">
                    
                    <h1 class="title"><?php _e("Contáctenos","buitron");?></h1>
                    <div class="paragraph">
                        <?php echo get_option("btr_contact_text_two");?>
                    </div>

                    <?php $form = get_option("btr_contact_form");?>
                    <?php echo do_shortcode($form);?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>