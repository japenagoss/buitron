<div id="home-services" class="container">
    <div class="row">

        <!-- TEXT -->
        <div class="col-md-6 col-lg-6 content">
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
        <div class="col-md-6 col-lg-6">
            <?php $service_logo = get_option("btr_home_services_image");?>
            <?php if(!empty($service_logo)):?>
                <img src="<?php echo $service_logo;?>">
            <?php endif;?>
        </div>
    </div>

    <div class="hand_services">
    </div>

</div>  