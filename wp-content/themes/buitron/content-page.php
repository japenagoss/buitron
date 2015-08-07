<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Buitron
 * @since Buitron 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php $image = get_post_meta(get_the_ID(),"_banner_image",true);?>

    <?php if(!empty($image)):?>
        <header class="banner" style="background-image:url(<?php echo $image;?>);">
            <div class="title">
                <h2>
                    <?php echo wp_strip_all_tags(get_post_meta(get_the_ID(),"_title_banner",true));?>
                </h2>
            </div>
        </header>
    <?php endif;?>

    <div class="entry-content">
        <?php the_content(); ?>
    </div>
</article>
