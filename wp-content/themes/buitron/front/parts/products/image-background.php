<?php if($image_type == "degrade"):?>
    <article id="block_<?php the_id();?>" class="product" style="background-image:url(<?php echo  $image_degrade;?>);">

        <div class="container">
            <div class="row">
                
                <!-- IF TEXT IS ON LEFT -->
                <?php if($text_position == "left"):?>
                    <div class="col-lg-6 text-left-product"> 
                        <div>
                            <h2 style="color:<?php echo $tex_color;?>">
                                <?php the_title();?>
                            </h2>
                            <div class="paragraph">
                                <?php echo $characteristics;?>
                            </div>
                            <div class="button" style="background-color:<?php echo $tex_color;?>">
                                <a href="<?php echo $contact_link;?>">
                                    <?php _e("contáctenos","buitron");?>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif;?>

                 <!-- IF TEXT IS ON RIGHT -->
                <?php if($text_position == "right"):?>
                    <div class="col-lg-6 col-md-offset-6 text-right-product"> 
                        <div>
                            <h2 style="color:<?php echo $tex_color;?>">
                                <?php the_title();?>
                            </h2>
                            <div class="paragraph">
                                <?php echo $characteristics;?>
                            </div>
                            <div class="button" style="background-color:<?php echo $tex_color;?>">
                                <a href="<?php echo $contact_link;?>">
                                    <?php _e("contáctenos","buitron");?>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif;?>

            </div>
        </div>

    </article>
<?php endif;?>