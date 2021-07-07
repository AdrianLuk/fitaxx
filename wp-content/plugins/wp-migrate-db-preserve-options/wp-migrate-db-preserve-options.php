<?php
/*
Plugin Name: WP Migrate DB Preserve Options
Description: Preserve options between migrations using WP Migrate DB Pro
Version: 1.0.0
Author: Adrian Luk
 */

defined('ABSPATH') or die('GTFO script kiddies!');

/**
 * tell WP Migrate DB Pro to preserve some options
 * @param array $preserved_options
 * @return string
 */
add_filter('wpmdb_preserved_options', function ($preserved_options) {

    $preserved_options = array_merge($preserved_options, array(
        'acf_pro_license',
    ));

    return array_unique($preserved_options);
});
