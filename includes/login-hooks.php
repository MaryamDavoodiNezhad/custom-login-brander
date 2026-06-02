<?php
defined( 'ABSPATH' ) || exit;

add_action( 'login_enqueue_scripts', 'clb_apply_login_logo' );

function clb_apply_login_logo() {
	$logo_url = get_option( 'clb_logo_url', '' );

	if ( empty( $logo_url ) ) {
		return;
	}
	?>
	<style type="text/css">
		#login h1 a {
			background-image: url('<?php echo esc_url( $logo_url ); ?>') !important;
			background-size: contain !important;
			background-repeat: no-repeat !important;
			background-position: center !important;

			/* adjust as needed */
			width: 100% !important;
			height: 80px !important;
		}
	</style>
	<?php
}

/**
 * Optional: make the logo link go to home
 * (مثل کد چایلدتم)
 */
add_filter( 'login_headerurl', function () {
	return home_url( '/' );
} );
