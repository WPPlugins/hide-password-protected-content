<?php

/**
 * @link              http://scottwyden.com
 * @since             1.0.0
 * @package           hide_password_protected_content
 *
 * @wordpress-plugin
 * Plugin Name:       Hide Password Protected Content
 * Plugin URI:        http://scottwyden.com/hide-password-protected-content
 * Description:       Hide password protected content from displaying in recent posts.
 * Version:           1.0
 * Author:            Scott Wyden Kivowitz
 * Author URI:        http://scottwyden.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       hide-password-protected-content
 */


// Hide password protected content
function swk_password_post_filter( $where = '' ) {
    if (!is_single() && !is_admin()) {
        $where .= " AND post_password = ''";
    }
    return $where;
}
add_filter( 'posts_where', 'swk_password_post_filter' );

?>