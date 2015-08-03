<section id='btr_container'>
    <form method="post">
        
        <?php wp_nonce_field('save_admin_options', 'nonce_save_options' );?>
        <input type="hidden" name="action" value="save">

        <header id="header">
            <div class="logo">
                <h2><?php echo TEMPLATE;?></h2>
            </div>
            <div class="icon-option"></div>
        </header>

        <section id="info_bar">
            <button id="btr_save" type="button" class="button-primary">
                <?php _e('Guardar','buitron');?>
            </button>
        </section>
        
         <!-- Print menu of sections -->
        <section id="main">
            <section id="of-nav">
                <ul>
                    <?php for($i = 0; $i < count($sections); $i++):?>
                        <li>
                            <a href="#<?php echo $sections[$i]['id'];?>">
                                <?php echo $sections[$i]['name'];?>
                            </a>
                        </li>
                    <?php endfor;?>
                </ul>
            </section>

            <section id="content">
                <!-- Print content of sections -->
                <?php for($i = 0; $i < count($sections); $i++):?>
                    <div id='<?php echo $sections[$i]['id'];?>' class='content-hide'>
                        <?php for($j = 0; $j < count($sections[$i]['controls']); $j++):?>
                            <?php echo $sections[$i]['controls'][$j];?>
                        <?php endfor;?> 
                    </div>
                <?php endfor;?>
            
            </section>
        </section>

    </form>
</section>