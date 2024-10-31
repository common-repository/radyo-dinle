<?php
/*
Plugin Name: Radyo Dinle
Plugin URI: https://siteneradyoekle.com/
Description: Radyo Dinle Türk Radyolarını Ekleyebilirsiniz.
Version: 5.8
Author: Radyo Dinle
Author URI: https://siteneradyoekle.com
*/

define( 'WP_RADYODINLECLUB_URL_PLAYER', WP_PLUGIN_URL.'/'.plugin_basename(dirname(__FILE__)) );
define( 'WP_RADYODINLECLUB_DIR_PLAYER', WP_PLUGIN_DIR.'/'.plugin_basename(dirname(__FILE__)) );

function widget_CanliRadyoDinle($args) {
    extract($args);
?>
        <?php echo $before_widget; ?>

<!-- siteneradyoekle.com WP Player -->
<iframe scrolling="no" src="https://siteneradyoekle.com/wpradyo/" width="100%" height="200"></iframe>


        <?php echo $after_widget; ?>
<?php
}
register_sidebar_widget('CanliRadyoDinle Player', 'widget_CanliRadyoDinle');
?>