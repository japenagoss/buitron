<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Buitron
 * @since Buitron 1.0
 */
?>  
        <section id="footer">
            <h1 class="title"><?php echo get_option("btr_contact_footer_title");?></h1>
            <div class="paragraph">
                <?php echo get_option("btr_contact_footer_text");?>
            </div>
            <div class="form">
                <?php echo do_shortcode("[mc4wp_form]");?>
            </div>
        </section>

        <div id="footer-bar">
            <div class="legal_info">
                <?php echo get_option("btr_contact_legal_text");?>
            </div>
            <div class="call_us">
                <?php echo get_option("btr_contact_call_us");?>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</body>
</html>