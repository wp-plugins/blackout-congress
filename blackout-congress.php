<?php
/**
 * @package           Yikes_Inc_Easy_Mailchimp_Extender
 *
 * @wordpress-plugin
 * Plugin Name:       Blackout Congress
 * Plugin URI:        http://www.yikesinc.com/services/yikes-inc-easy-mailchimp-extender/
 * Description:       Blackout congress from visiting your site. Protest the system man!
 * Version:           0.1
 * Author:            Evan Herman
 * Author URI:        https://www.evan-herman.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
**/

// prevent direct access
defined('ABSPATH') or die("No script kiddies please!");

// enqueue our blackout congress script
function enqueue_blackout_congress() {
	wp_register_script( 'blackout-congress' , 'https://www.blackoutcongress.org/detect.js' , array( 'jquery' ) , 'all' );
	wp_enqueue_script( 'blackout-congress' );
}
add_action( 'wp_enqueue_scripts' , 'enqueue_blackout_congress' );

/*
*	feel free to do as you please -
*	compliments to WP Tavern for the idea
*	http://wptavern.com/fight-for-the-future-leads-congress-blackout-campaign-to-protest-the-patriot-act
*/