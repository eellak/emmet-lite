<?php
/**
 * emmet functions and definitions
 *
 * @package WordPress
 * @subpackage emmet
 * @since emmet 1.0
 */
require get_template_directory() . '/inc/theme/init.php';

/**
 * Note: Do not add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * http://codex.wordpress.org/Child_Themes
 */

add_filter('gettext',  'translate_text');
add_filter('ngettext',  'translate_text');
function translate_text($translated) {
     $translated = str_ireplace('Επιστροφή στο Κατάστημα',  'Επιστοφή σε αρχική σελίδα',  $translated);
     //$translated = str_ireplace('Empty Cart',  'Άδειασμα καλαθιού',  $translated);
     return $translated;
}


function wc_empty_cart_redirect_url() {
	return '/';
}
add_filter( 'woocommerce_return_to_shop_redirect', 'wc_empty_cart_redirect_url' );
