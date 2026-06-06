<?php
defined( 'ABSPATH' ) || exit;

add_action( 'login_enqueue_scripts', 'clb_apply_login_logo' );

function clb_apply_login_logo() {
	$logo_url = get_option( 'clb_logo_url', '' );

	if ( empty( $logo_url ) ) {
		return;
	}

	wp_enqueue_style(
		'clb-login-style',
		CLB_PLUGIN_URL . 'assets/css/login.css',
		array(),
		'1.0'
	);

	wp_add_inline_style(
		'clb-login-style',
		'#login h1 a{background-image:url("'.esc_url($logo_url). '")!important}'
	);

	
	
	
}

/**
 * Optional: make the logo link go to home
 * (مثل کد چایلدتم)
 */
add_filter( 'login_headerurl', function () {
	return home_url( '/' );
} );
