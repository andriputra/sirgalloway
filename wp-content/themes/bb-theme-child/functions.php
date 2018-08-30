<?php

// Defines
define( 'FL_CHILD_THEME_DIR', get_stylesheet_directory() );
define( 'FL_CHILD_THEME_URL', get_stylesheet_directory_uri() );

// Classes
require_once 'classes/class-fl-child-theme.php';

// Actions
add_action( 'fl_head', 'FLChildTheme::stylesheet' );

function themes_scripts() {
  wp_enqueue_script( 'replace-class', get_stylesheet_directory_uri().'/assets/js/replace-class.js', '', '', true );
  wp_enqueue_script( 'custom', get_stylesheet_directory_uri().'/assets/js/custom.js', '', '', true );
}
add_action( 'wp_enqueue_scripts', 'themes_scripts' );

// Add Setting Header
add_action('admin_menu', 'header_settings');
function header_settings() {
	//create new top-level menu
	add_menu_page('Top Header Option', 'Header Option', 'administrator', __FILE__, 'my_cool_plugin_settings_page' );

	//call register settings function
	add_action( 'admin_init', 'header_settings' );
}


function my_cool_plugin_settings_page() {
?>
<div class="wrap">
<h1>Top Header Settings</h1>

<form method="post" action="options.php">
    <?php settings_fields( 'my-cool-plugin-settings-group' ); ?>
    <?php do_settings_sections( 'my-cool-plugin-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Technician Login Link</th>
        <td><input type="text" name="new_option_login" value="<?php echo esc_attr( get_option('new_option_login') ); ?>" placeholder="http://yourlink.com"/></td>
        </tr>

        <tr valign="top">
        <th scope="row">Domestic Link</th>
        <td><input type="text" name="new_option_domestic" value="<?php echo esc_attr( get_option('new_option_domestic') ); ?>" placeholder="http://yourlink.com"/></td>
        </tr>

        <tr valign="top">
        <th scope="row">International Link</th>
        <td><input type="text" name="new_option_international" value="<?php echo esc_attr( get_option('new_option_international') ); ?>" placeholder="http://yourlink.com"/></td>
        </tr>
    </table>

    <?php submit_button(); ?>

</form>
</div>
<?php
} ?>
