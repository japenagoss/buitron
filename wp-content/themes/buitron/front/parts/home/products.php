<section id="home_products">
    <h1 class="title"><?php echo get_option("btr_products_home_title");?></h1>
    <div class="paragraph">
        <?php echo get_option("btr_products_home_text");?>
    </div>
    <div class="container">
        <div class="row">
            <?php 
                $products_args = array(
                    'posts_per_page'    => -1,
                    'order'             => 'ASC',
                    'orderby'           => 'menu_order',
                    'post_type'         => 'products',
                    'meta_query' => array(
                        array(
                            'key'     => '_show_in_home',
                            'value'   => 'yes',
                            'compare' => 'AND',
                        )
                    )
                );
                $products  = new WP_Query($products_args);
            ?>

            <!-- BUCLE FOR GENERATE PRODUCTS -->
            <?php if($products->have_posts()):?>
                <?php while($products->have_posts()):$products->the_post();?>
                    
                    <article class="col-lg-4 matchheight">
                        <div>
                            <div class="image">
                                <?php the_post_thumbnail("products");?>
                            </div>
                            <div class="text">
                                <h2><?php the_title();?></h2>
                                <div class="excerpt">
                                    <?php the_excerpt();?>
                                </div>
                            </div>
                        </div>
                    </article>

                <?php endwhile;?>
            <?php endif;?>

            <!-- BUTTON -->
            <div class="button">
                <a href="<?php echo get_option("btr_products_home_link");?>">
                    <?php _e("ver más","buitron");?>
                </a>
            </div>

        </div>
    </div>
</section>