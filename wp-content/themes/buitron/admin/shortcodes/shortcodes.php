<?php
function btr_block($atts, $content = null ){
    ob_start();
    $a = shortcode_atts( array(
        'col' => '12'
    ),$atts);
    ?> 
    
    <div class="col-lg-<?php echo $a["col"];?>">
        <?php echo $content;?>
    </div>

    <?php
    return ob_get_clean();
}
add_shortcode('btr_block', 'btr_block');