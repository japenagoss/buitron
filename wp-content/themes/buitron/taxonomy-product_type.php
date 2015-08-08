<?php
/**
 * The template for displaying post of taxonomies of products
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Buitron
 * @since Buitron 1.0
 */

get_header();?>
    <?php 
        $product_type   = get_queried_object();
        $banner         = get_field('banner', 'product_type_'.$product_type->term_id);
        $contact_link   = get_option("btr_contact_link");
    ?>
    
    <div id="product_type">
        <?php if(!empty($banner)):?>

            <div class="banner" style="background-image:url(<?php echo $banner;?>);">
                <div id="call-to-action">
                    <div class="logo">
                    </div>
                    <div class="phone-ico">
                        <img src="<?php echo BUITRON_URL;?>/images/phone.png">
                    </div>
                    <div class="phone">
                        <?php echo get_option("btr_contact_phone");?>
                    </div>
                    <div class="button">
                        <a href="<?php echo $contact_link;?>">
                            <?php _e("contáctenos","buitron");?>
                        </a>
                    </div>
                </div>
            </div>
            
        <?php endif;?>

        <h1 class="title" style="<?php echo (!empty($banner))?'margin-top:100px;':''?>">
            <?php echo $product_type->name?>
        </h1>
        <div class="description">
            <?php echo $product_type->description?>
        </div>

        <section class="products">
            
            <?php 
            $args = array(
                'post_type' => 'products',
                'orderby'   => 'menu_order',
                'order'     => 'ASC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'product_type',
                        'field'    => 'slug',
                        'terms'    => $product_type->slug
                    )
                )
            );
            $products = new WP_Query($args);
            ?>

            <?php if($products->have_posts()):?>
                <?php while($products->have_posts()):  $products->the_post();?>
                    
                    <?php
                        $id             = get_the_ID();
                        $image_type     = get_post_meta($id,"_image_type",true);
                        $image_degrade  = get_post_meta($id,"_image_background",true);
                        $tex_color      = get_post_meta($id,"_texts_color",true);
                        $text_position  = get_post_meta($id,"_text_position",true);
                        $image_block    = get_post_meta($id,"_image_block",true);
                        $images_slide   = get_post_meta($id,"_slide_image",true);
                        $characteristics= get_post_meta($id,"_characteristics",true);
                    ?>
                    
                    <!-- IF IMAGES IS BACKGROUND -->
                    <?php require BUITRON_DIRECTORY.'/front/parts/products/image-background.php';?>

                    <!-- IF IMAGES IS BLOCK -->
                    <?php require BUITRON_DIRECTORY.'/front/parts/products/image-block.php';?>

                    <!-- IF IS SLIDE -->
                    <?php require BUITRON_DIRECTORY.'/front/parts/products/slide.php';?>

                <?php endwhile;?>
            <?php endif;?>

        </section>
    </div>

<?php get_footer();?>
