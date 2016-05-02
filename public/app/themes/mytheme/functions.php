<?php

if (file_exists($file = get_template_directory().'/../vendor/autoload.php')) {
    include_once $file;
}

use Gwa\Wordpress\WpBridge\WpBridge;
use Gwa\Wordpress\Zero\Soil\RootsSoil;
use Gwa\Wordpress\Template\MyTheme\Theme\Theme;

/**
 * Check if Timber is active.
 */
if (!class_exists('Timber')) {
    add_action('admin_notices', function () {
        echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="'.esc_url(admin_url('plugins.php#timber')).'">plugins page</a></p></div>';
    });

    return;
}

$bridge = new WpBridge;

/**
 * Adds roots soil support to zero
 *
 * @link https://github.com/roots/soil
 */
if (class_exists('Roots\Soil\Options')) {
    $soil = new RootsSoil();
    $soil->changeOptions(['soil-js-to-footer' => false]);
    $soil->init();
}

/**
 * Adds all global needed theme settings --------------------------------
 */
$mytheme = new Theme();
$mytheme->setWpBridge($bridge)->init();

$bridge->addAction('after_setup_theme', function () {
    load_theme_textdomain('mytheme', get_template_directory() . '/languages');
});
