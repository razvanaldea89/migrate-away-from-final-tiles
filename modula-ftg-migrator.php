<?php
/**
 * Plugin Name: Modula Final Tiles Migrator
 * Plugin URI: https://wp-modula.com/
 * Description: Submodule that helps migrate galleries from Final Tiles Gallery to Modula Gallery
 * Author: WPChill
 * Author URI: https://www.wpchill.com/
 * Version: 1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'MODULA_FTG_MIGRATOR_VERSION', '1.0.1' );
define( 'MODULA_FTG_MIGRATOR_PATH', plugin_dir_path( __FILE__ ) );
define( 'MODULA_FTG_MIGRATOR_URL', plugin_dir_url( __FILE__ ) );
define( 'MODULA_FTG_MIGRATOR_FILE', __FILE__ );

require_once MODULA_FTG_MIGRATOR_PATH . 'includes/class-modula-ftg-migrator.php';

// Load the main plugin class.
$modula_ftg_migrator = Modula_FTG_Migrator::get_instance();
