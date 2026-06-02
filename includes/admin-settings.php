<?php
defined( 'ABSPATH' ) || exit;

/**
 * Register settings + fields
 */
add_action( 'admin_init', 'clb_register_settings' );

function clb_register_settings() {

	// Register the option
	register_setting(
		'clb_settings_group',   // settings group
		'clb_logo_url',         // option name in wp_options
		array(
			'type'              => 'string',
			'sanitize_callback' => 'esc_url_raw',
			'default'           => '',
		)
	);

	// Add settings section
	add_settings_section(
		'clb_main_section',
		__( 'Login Branding', 'custom-login-brander' ),
		'clb_section_description',
		'clb_settings_page'
	);

	// Add field: Logo URL
	add_settings_field(
		'clb_logo_url_field',
		__( 'Logo URL', 'custom-login-brander' ),
		'clb_logo_url_field_render',
		'clb_settings_page',
		'clb_main_section'
	);
}

function clb_section_description() {
	echo '<p>' . esc_html__( 'Enter a direct image URL (PNG/JPG/SVG) to use as the login logo.', 'custom-login-brander' ) . '</p>';
}

function clb_logo_url_field_render() {
	$value = get_option( 'clb_logo_url', '' );

	echo '<input type="url" class="regular-text ltr" name="clb_logo_url" value="' . esc_attr( $value ) . '" placeholder="https://example.com/logo.png" />';
	echo '<p class="description">' . esc_html__( 'Tip: Open the URL in the browser to ensure it loads directly.', 'custom-login-brander' ) . '</p>';
}

/**
 * Add menu item under Settings
 */
add_action( 'admin_menu', 'clb_add_settings_page' );

function clb_add_settings_page() {
	add_options_page(
		__( 'Login Brander', 'custom-login-brander' ),
		__( 'Login Brander', 'custom-login-brander' ),
		'manage_options',
		'clb-settings',
		'clb_render_setting_page'
	);
}

function clb_render_setting_page() {
	?>
	<div class="wrap">
		<h1><?php echo esc_html__( 'Login Brander Settings', 'custom-login-brander' ); ?></h1>

		<form method="post" action="options.php">
			<?php
			settings_fields( 'clb_settings_group' );
			do_settings_sections( 'clb_settings_page' );
			submit_button( __( 'Save Changes', 'custom-login-brander' ) );
			?>
		</form>
	</div>
	<?php
}
