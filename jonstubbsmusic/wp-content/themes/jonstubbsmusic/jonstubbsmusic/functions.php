<?php
//function wpb_adding_scripts() {
//	}
//
//add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );


if ( ! isset( $content_width ) ) {
	$content_width = "100%";
}

function register_my_menus() {
  register_nav_menus(
  	array(
	  'menu-main' => __( 'Main Menu' ),
	  'menu-blog' => __( 'Blog Menu' )
	)
  );
}
add_action( 'init', 'register_my_menus' );

//function load_theme_textdomain( $domain, $path = false ) {
//    /**
//     * Filters a theme's locale.
//     *
//     * @since 3.0.0
//     *
//     * @param string $locale The theme's current locale.
//     * @param string $domain Text domain. Unique identifier for retrieving translated strings.
//     */
//    $locale = apply_filters( 'theme_locale', is_admin() ? get_user_locale() : get_locale(), $domain );
// 
//    $mofile = $domain . '-' . $locale . '.mo';
// 
//    // Try to load from the languages directory first.
//    if ( load_textdomain( $domain, WP_LANG_DIR . '/themes/' . $mofile ) ) {
//        return true;
//    }
// 
//    if ( ! $path ) {
//        $path = get_template_directory();
//    }
// 
//    return load_textdomain( $domain, $path . '/' . $locale . '.mo' );
//}

function jetpackcom_custom_required() {
   return __( '*', 'plugin-textdomain' );
}
add_filter( 'jetpack_required_field_text', 'jetpackcom_custom_required' );

?>