<?php
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles',99);
function child_enqueue_styles() {
    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ) );
    wp_enqueue_style( 'child-font', child_slug_fonts_url(), array(), null );
}

if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
         update_option( 'theme_mods_' . get_template(), $value );
         return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

/**
 * Register widgetized area and update sidebar with default widgets.
 */

add_action('widgets_init', 'child_widgets_init');
function child_widgets_init() {

    //GABE DID THIS
    register_sidebar(array(
		'id' => 'topbar',
		'name' => __( 'topbar' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '',
		'after_title' => '',
    ));
    //END GABE DID THIS

    //JAMES DID THIS
    register_sidebar(array(
        'id' => 'homepage_hero',
        'name' => __( 'homepage_hero' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '',
        'after_title' => '',
    ));
    //END JAMES DID THIS

}

add_action( 'wp_print_styles', 'child_overwrite_styles', 100 );
function child_overwrite_styles() {
    wp_deregister_style( 'zerif_font' );
}

function child_slug_fonts_url() {
    $fonts_url = '';
     /* Translators: If there are characters in your language that are not
    * supported by Lora, translate this to 'off'. Do not translate
    * into your own language.
    */
    $lato = _x( 'on', 'Lato font: on or off', 'zerif-lite' );
    $homemade = _x( 'on', 'Homemade font: on or off', 'zerif-lite' );
    /* Translators: If there are characters in your language that are not
    * supported by Open Sans, translate this to 'off'. Do not translate
    * into your own language.
    */
    $monserrat = _x( 'on', 'Monserrat font: on or off', 'zerif-lite' );
     if ( 'off' !== $lato || 'off' !== $monserrat|| 'off' !== $homemade ) {
        $font_families = array();

        if ( 'off' !== $lato ) {
            $font_families[] = 'Lato:100,300,400,700,400italic';
        }
         if ( 'off' !== $monserrat ) {
            $font_families[] = 'Montserrat:700';
        }

        if ( 'off' !== $homemade ) {
            $font_families[] = 'Homemade Apple';
        }
         $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext' ),
        );
         $fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
    }
     return $fonts_url;
}
