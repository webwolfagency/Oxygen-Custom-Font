<?php

/*
Plugin Name: Oxygen Custom Fonts
Plugin URI: https://webwolf.dev/
Description: Add fonts to oxygen builder and host it locally.
Version: 1.0
Author: Web Wolf [Kamil Łazarz]
Author URI: https://webwolf.dev/
License: MIT
*/

/**
 * Class OCF
 * @author Kamil Łazarz
 */
final class OCF {

    private string $plugin_url = '';
    /**
     * OCF constructor.
     */
    public function __construct() {

        /**
         * Define plugin url
         */
        if( !$this->plugin_url ) {
            $this->plugin_url = plugin_dir_url( __FILE__ );
        }

        add_action( 'wp_enqueue_scripts', [ $this, 'addFontFace' ] );
    }

    public function addFontFace() {
        wp_enqueue_style( 'oxygen-custom-fonts', $this-$this->plugin_url . '/fonts.css' );
    }

}

new OCF;
