<?php if($image_type == "block"):?>
    <article id="<?php echo $block_id;?>" class="product">
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
                    <div class="col-lg-6">
                        <div>
                            <img src="<?php echo $image_block;?>">
                        </div>
                    </div>
                <?php endif;?>

                 <!-- IF TEXT IS ON RIGHT -->
                <?php if($text_position == "right"):?>
                    <div class="col-lg-6">
                        <div>
                            <img src="<?php echo $image_block;?>">
                        </div>
                    </div>
                    <div class="col-lg-6 text-right-product"> 
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