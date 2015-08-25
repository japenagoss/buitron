<?php if($image_type == "slide"):?>
                         
     <article id="<?php echo $block_id;?>" class="product sliders">
        <div class="container">
            <div class="row">

                 <!-- IF TEXT IS ON RIGHT -->
                <?php if($text_position == "right"):?>
                    
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <!-- CARROUSEL -->
                        <section id="slide-products-<?php echo $id;?>" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                               
                                <?php $images_slide = maybe_unserialize($images_slide);?>
                                <?php if(count($images_slide) > 0):?>
                                    
                                    <?php $active  = 1; ?>
                                    
                                    <?php foreach ($images_slide as $key => $image):?>
                                         
                                        <?php $is_active  = ($active == 1)?"active":"";?>

                                        <div class="item <?php echo $is_active;?>" style="background-image:url(<?php echo $image;?>);">
                                        </div>

                                        <?php $active++;?>
                                    <?php endforeach;?>

                                <?php endif;?>

                                <!-- BUTTONS SLIDE -->
                                <a class="prev-new" href="#slide-products-<?php echo $id;?>" role="button" data-slide="prev">
                                    <span></span>
                                </a>
                                <a class="next-new" href="#slide-products-<?php echo $id;?>" role="button" data-slide="next">
                                    <span></span>
                                </a>

                            </div>
                        </section>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6 text-right-product"> 
                        <div>
                            <h2 style="color:<?php echo $tex_color;?>">
                                <?php the_title();?>
                            </h2>
                            <div class="paragraph">
                                <div class="row">
                                    <?php echo do_shortcode($characteristics);?>
                                </div>
                            </div>
                            <div class="button" style="background-color:<?php echo $tex_color;?>">
                                <a href="<?php echo $contact_link;?>">
                                    <?php _e("contáctenos","buitron");?>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif;?>

                <?php if($text_position == "left"):?>
                    <div class="col-sm-12 col-md-6 col-lg-6 text-left-product"> 
                        <div>
                            <h2 style="color:<?php echo $tex_color;?>">
                                <?php the_title();?>
                            </h2>
                            <div class="paragraph">
                                <div class="row">
                                    <?php echo do_shortcode($characteristics);?>
                                </div>
                            </div>
                            <div class="button" style="background-color:<?php echo $tex_color;?>">
                                <a href="<?php echo $contact_link;?>">
                                    <?php _e("contáctenos","buitron");?>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <!-- CARROUSEL -->
                        <section id="slide-products-<?php echo $id;?>" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                               
                               <?php $images_slide = maybe_unserialize($images_slide);?>
                                <?php if(count($images_slide) > 0):?>
                                    
                                    <?php $active  = 1; ?>
                                    
                                    <?php foreach ($images_slide as $key => $image):?>
                                         
                                        <?php $is_active  = ($active == 1)?"active":"";?>

                                        <div class="item <?php echo $is_active;?>" style="background-image:url(<?php echo $image;?>);">
                                        </div>

                                        <?php $active++;?>
                                    <?php endforeach;?>

                                <?php endif;?>

                                <!-- BUTTONS SLIDE -->
                                <a class="prev-new" href="#slide-products-<?php echo $id;?>" role="button" data-slide="prev">
                                    <span></span>
                                </a>
                                <a class="next-new" href="#slide-products-<?php echo $id;?>" role="button" data-slide="next">
                                    <span></span>
                                </a>

                            </div>
                        </section>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </article>

<?php endif;?>