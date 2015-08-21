<?php
/**
 * The template for displaying company information
 *
 *
 * @package WordPress
 * @subpackage Buitron
 * @since Buitron 1.0
 */

get_header(); ?>

<div>
	<?php $image = get_option("_banner_company",true);?>
	
	<!-- BANNER -->
    <?php if(!empty($image)):?>
        <header class="banner" style="background-image:url(<?php echo $image;?>);">
            <div class="title">
                <h2>
                    <?php echo wp_strip_all_tags(get_option("_title_banner_company",true));?>
                </h2>
            </div>
        </header>
    <?php endif;?>
	
	<!-- SLIDES -->
    <?php
    while (have_posts()) : the_post();
        get_template_part('content', 'company');
    endwhile;
    ?>
</div>

<?php get_footer(); ?>