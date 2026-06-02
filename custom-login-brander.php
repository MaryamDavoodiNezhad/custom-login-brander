<?php
/**
 * Plugin Name: Custom Login Brander
 * Description: Custom branding for the WordPress login page.
 * Version: 1.0.0
 * Author: Maryam Davoodi nejad
 * Text Domain: custom-login-brander
 * Domain Path: /languages
 */
defined('ABSPATH') || exit();

define('CLB_VERSION', '1.0.0');
define('CLB_PLUGIN_FILE', __FILE__);
define('CLB_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('CLB_PLUGIN_URL', plugin_dir_url(__FILE__));

require_once CLB_PLUGIN_DIR . 'includes/login-hooks.php';
require_once CLB_PLUGIN_URL . 'includes/admin-setting.php';
