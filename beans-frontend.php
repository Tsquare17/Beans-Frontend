<?php

namespace Beans\Frontend;

/**
 * Beans Frontend Framework Plugin
 *
 * @package   Beans\Frontend
 *
 * @wordpress-plugin
 * Plugin Name: Beans Frontend
 * Version:     0.1.0
 * Plugin URI:  https://trevor-thompson.com
 * Description: The companion plugin to Beans, providing multi-frontend framework support.
 * Author:      Trevor Thompson
 * Author URI:  https://trevor-thompson.com/
 * Text Domain: beans-frontend
 *
 */


if ( ! function_exists( 'add_filter' ) ) {
    header( 'Status: 403 Forbidden' );
    header( 'HTTP/1.1 403 Forbidden' );
    exit();
}

require_once 'vendor/autoload.php';

add_action('init', __NAMESPACE__ . '\beans_exists');

function beans_exists() {
    if (!function_exists('\Beans\Framework\beans_add_theme_support')) {
        add_action('admin_notices', static function () {
            ?>
            <div class="error notice">
                <p><?php _e('Beans Frontend requires the Beans theme with multi-frontend support.', 'beans-frontend') ?></p>
            </div>
            <?php
        });
    }
}
