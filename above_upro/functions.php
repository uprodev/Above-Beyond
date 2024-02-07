<?php 

// show_admin_bar( false );

add_action('wp_enqueue_scripts', 'load_style_script');
function load_style_script(){
	wp_enqueue_style('my-normalize', get_stylesheet_directory_uri() . '/css/normalize.css');
	wp_enqueue_style('my-font', get_stylesheet_directory_uri() . '/css/font.css');
	wp_enqueue_style('my-fancybox', get_stylesheet_directory_uri() . '/css/jquery.fancybox.min.css');
	wp_enqueue_style('my-swiper', get_stylesheet_directory_uri() . '/css/swiper.min.css');
	wp_enqueue_style('my-aos', get_stylesheet_directory_uri() . '/css/aos.css');
	wp_enqueue_style('my-styles', get_stylesheet_directory_uri() . '/css/styles.css');
	wp_enqueue_style('my-responsive', get_stylesheet_directory_uri() . '/css/responsive.css');
	wp_enqueue_style('my-style-main', get_stylesheet_directory_uri() . '/style.css');

	wp_enqueue_script('jquery');
	wp_enqueue_script('my-swiper', get_stylesheet_directory_uri() . '/js/swiper.js', array(), false, true);
	wp_enqueue_script('my-fancybox', get_stylesheet_directory_uri() . '/js/jquery.fancybox.min.js', array(), false, true);
	wp_enqueue_script('my-marquee', get_stylesheet_directory_uri() . '/js/jquery.marquee.min.js', array(), false, true);
	wp_enqueue_script('my-aos', get_stylesheet_directory_uri() . '/js/aos.js', array(), false, true);
	wp_enqueue_script('my-animateNumber', get_stylesheet_directory_uri() . '/js/jquery.animateNumber.min.js', array(), false, true);
	wp_enqueue_script('my-script', get_stylesheet_directory_uri() . '/js/script.js', array(), false, true);

	$sections = get_field('content');
	if($sections){
		foreach ($sections as $section) {
			if ($section['acf_fc_layout'] == 'stats') {
				$numbers = wp_list_pluck($section['items'], 'number');
			}
		}
	}

	wp_localize_script('my-script', 'php_vars', $numbers);
}


add_action('after_setup_theme', function(){
	register_nav_menus( array(
		'header' => 'Header menu',
		'footer' => 'Footer menu'
	) );
});


add_theme_support( 'title-tag' );
add_theme_support('html5');
add_theme_support( 'post-thumbnails' ); 


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Main settings',
		'menu_title'	=> 'Theme options',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}


add_filter('wpcf7_autop_or_not', '__return_false');


function my_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyDiyT05YehIdz2LrV-QOeRa5M18WfKtlnY');
}
add_action('acf/init', 'my_acf_init');


add_filter('tiny_mce_before_init', 'override_mce_options');
function override_mce_options($initArray) {
	$opts = '*[*]';
	$initArray['valid_elements'] = $opts;
	$initArray['extended_valid_elements'] = $opts;
	return $initArray;
}


function add_class_content($string, $h_class='', $p_class='') {

    if (str_contains($string, '<h') && $h_class) {
        foreach (range(1,6) as $i) {
            $from[] = "<h$i";
            $to[] = '<h'. $i .' class="'. $h_class . '"';
        }
    } 
    if (str_contains($string, '<p') && $p_class){
        $from[] = "<p";
        $to[] = '<p class="'. $p_class . '"';
    }

    return str_replace ($from, $to, $string);

}


remove_filter('the_excerpt', 'wpautop');