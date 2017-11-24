<?php
   /*
   Plugin Name: Axh Object Oriented Nonces 
   Plugin URI: https://github.com/Axheladini/WP_Nonce_Object
   Description: A plugin to use WP nonces in Object Oriented way
   Version: 1.0
   Author: Agon Xheladini 
   Author URI: http://www.agonxheladini.com
   Text Domain: ax-oo-nonce
   License: GPL2
   */


/*Create the Activation hook function, for executing actions when plugin is activated
register_activation_hook(__FILE__, 'ax_oo_nonce_activate');*/
function ax_oo_nonce_activate()
{
  /*Do Something*/
}

/*Create the Deactivation function, for executing sctions when plugin is deactivated */
/*register_deactivation_hook(__FILE__, 'ax_oo_nonce_deactivate');*/
function ax_oo_nonce_deactivate()
{
  /*Do Something */
}

/* Include the main Nonce Class */
include( plugin_dir_path( __FILE__ ) . 'includes/ax_oo_nonce_class.php');




?>