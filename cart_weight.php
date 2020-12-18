<?php
/**
 * WooCommerce
 * --------------
 *
 * Display cart total weight on the cart page
 *
 */
 
add_action('woocommerce_cart_collaterals', 'myprefix_cart_extra_info');

function myprefix_cart_extra_info() {
	global $woocommerce;
	echo '<div class="cart-extra-info">';
	echo '<p class="total-weight">' . __('Total Weight:', 'woocommerce');
	echo ' ' . $woocommerce->cart->cart_contents_weight . ' ' . get_option('woocommerce_weight_unit');
	echo '</p>';
	echo '</div>';
}