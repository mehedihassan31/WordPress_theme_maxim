<?php


require_once get_template_directory() . '/lib/nav-walker.php';

function maxim_setup_theme() {

	load_theme_textdomain( "maxim" );
	add_theme_support( "automatic-feed-theme" );
	add_theme_support( "title-tag" );
	add_theme_support( "post-thumbnails" );

	register_nav_menu( "topmenu", __( "Top Menu", "maxim" ) );
}

add_action( "after_setup_theme", "maxim_setup_theme" );


function maxim_assets() {


	wp_enqueue_style( "googleapis-stylesheet-css", "//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" );
	wp_enqueue_style( "bootstrap-min-css", get_theme_file_uri( "/assets/vendor/bootstrap/css/bootstrap.min.css" ) );
	wp_enqueue_style( "icofont-min-css", get_theme_file_uri( "/assets/vendor/icofont/icofont.min.css" ) );
	wp_enqueue_style( "boxicons-min-css", get_theme_file_uri( "/assets/vendor/boxicons/css/boxicons.min.css" ) );
	wp_enqueue_style( "owl-carousel-min-css", get_theme_file_uri( "/assets/vendor/owl.carousel/assets/owl.carousel.min.css" ) );
	wp_enqueue_style( "venobox-css", get_theme_file_uri( "/assets/vendor/venobox/venobox.css" ) );
	wp_enqueue_style( "aos-css", get_theme_file_uri( "/assets/vendor/aos/aos.css" ) );
	wp_enqueue_style( "main-style.css", get_theme_file_uri( "/assets/css/style.css" ) );
	wp_enqueue_style( "stylesheet-css", get_stylesheet_uri() );

	wp_enqueue_script( "jquery.min.js", get_theme_file_uri( "/assets/vendor/jquery/jquery.min.js" ), "jquery", "", "true" );
	wp_enqueue_script( "bootstrap.bundle.min.js", get_theme_file_uri( "/assets/vendor/bootstrap/js/bootstrap.bundle.min.js" ), "", "", "true" );
	wp_enqueue_script( "jquery.easing.min.js", get_theme_file_uri( "/assets/vendor/jquery.easing/jquery.easing.min.js" ), "jquery", "", "true" );
	wp_enqueue_script( "validate.js", get_theme_file_uri( "/assets/vendor/php-email-form/validate.js" ), "", "", "true" );
	wp_enqueue_script( "owl.carousel.min.js", get_theme_file_uri( "/assets/vendor/owl.carousel/owl.carousel.min.js" ), "", "", "true" );
	wp_enqueue_script( "isotope.pkgd.min.js", get_theme_file_uri( "assets/vendor/isotope-layout/isotope.pkgd.min.js" ), "", "", "true" );
	wp_enqueue_script( "venobox.min.js", get_theme_file_uri( "/assets/vendor/venobox/venobox.min.js" ), "", "", "true" );
	wp_enqueue_script( "aos.js", get_theme_file_uri( "/assets/vendor/aos/aos.js" ), "", "", "true" );
	wp_enqueue_script( "main.js", get_theme_file_uri( "/assets/js/main.js" ), "", "", "true" );


}

add_action( "wp_enqueue_scripts", "maxim_assets" );


function maxim_widgets_sidebar() {

	register_sidebar(
		array(
			'name'        => __( 'maxim & social', 'maxim' ),
			'id'          => 'social-maxim',
			'description' => __( 'social', 'maxim' ),

			'before_widget' => '<div  class="footer-info">',
			'after_widget'  => '</div>',
			'before_title'  => '<a class="mx-2">',
			'after_title'   => '</a>'

		)
	);


	register_sidebar(
		array(

			'name'          => __( 'Useful Links', 'maxim' ),
			'id'            => 'link-1',
			'description'   => __( 'Useful Links', 'maxim' ),
			'before_widget' => '<ul id= "%1$s" class=" %2$s">',
			'after_widget'  => '</ul>',

			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		)
	);
	register_sidebar(
		array(

			'name'          => __( 'Our Services', 'maxim' ),
			'id'            => 'link-2',
			'description'   => __( 'Our Services', 'maxim' ),
			'before_widget' => '<ul id= "%1$s" class="  %2$s">',
			'after_widget'  => '</ul>',

			'before_title'  => '<h4>',
			'after_title'   => '</h4>'
		)
	);


	register_sidebar(
		array(

			'name'          => __( 'Our Newsletter', 'maxim' ),
			'id'            => 'newsletter',
			'description'   => __( 'Our Newsletter', 'maxim' ),
			'before_widget' => '<p id= "%1$s" class=" %2$s">',
			'after_widget'  => '</p>',
//			'before_title'  => '<div class="container">',
//			'after_title'   => '</div>'
		)
	);


	register_sidebar(
		array(

			'name'          => __( 'Copy Right', 'maxim' ),
			'id'            => 'copy-right',
			'description'   => __( 'Copy Right', 'maxim' ),
			'before_widget' => '<div id= "%1$s" class=" copyright %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => ''
		)
	);

	register_sidebar(
		array(

			'name'          => __( 'Designed-by', 'maxim' ),
			'id'            => 'designed',
			'description'   => __( 'Designed-by', 'maxim' ),
			'before_widget' => '<div id= "%1$s" class=" credits %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => ''
		)
	);


}

add_action( "widgets_init", "maxim_widgets_sidebar" );


//custom_post_protfolio


function maxim_portfolios() {

	/**
	 * Post Type: Portfolios .
	 */

	$labels = [
		"name"          => __( "Portfolios ", "maxim" ),
		"singular_name" => __( "Portfolio", "maxim" ),
		"menu_name"     => __( "Portfolio", "maxim" ),
	];

	$args = [
		"label"                 => __( "Portfolios ", "maxim" ),
		"labels"                => $labels,
		"description"           => "",
		"public"                => true,
		"publicly_queryable"    => true,
		"show_ui"               => true,
		"show_in_rest"          => true,
		"rest_base"             => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive"           => false,
		"show_in_menu"          => true,
		"show_in_nav_menus"     => true,
		"delete_with_user"      => false,
		"exclude_from_search"   => false,
		"capability_type"       => "post",
		"map_meta_cap"          => true,
		"hierarchical"          => true,
		"rewrite"               => [ "slug" => "portfolio", "with_front" => true ],
		"query_var"             => true,
		"menu_position"         => 6,
		"supports"              => [ "title", "editor", "thumbnail", "excerpt" ],
		"taxonomies"            => [ "category" ],
	];

	register_post_type( "portfolios", $args );
}

add_action( 'init', 'maxim_portfolios' );


function maxim_portfolio_items() {
	$args  = array(
		'post_type' => 'portfolios',
	);
	$query = new WP_Query( $args );


	$html = '<section id="portfolio" class="portfolio section-bg">';
	$html .= '<div class="container">';

	$html .= '<div class="section-title" data-aos="fade-up">
                <h2>Portfolio</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit.</p>';
	$html .= '</div>';

	$html .= '<div class="row" data-aos="fade-up">';
	$html .= '<div class="col-lg-12 d-flex justify-content-center">';
	$html .= '<ul id="portfolio-flters">';
	$html .= '<li data-filter="*" class="filter-active">All</li>';
	$html .= '<li data-filter=".filter-app">App</li>';
	$html .= '<li data-filter=".filter-card">Card</li>';
	$html .= '<li data-filter=".filter-web">Web</li>';
	$html .= '</ul>';
	$html .= '</div>';
	$html .= '</div>';

	$html .= '<div class="row portfolio-container" data-aos="fade-up">';


	// The Loop
	while ( $query->have_posts() ) {
		$query->the_post();

		if ( get_the_title() == "App" ) {
			$html .= '<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">';
			$html .= '<div class="portfolio-wrap">';

			$html .= '<img src="' . get_the_post_thumbnail_url( '', 'medium' ).'" class="img-fluid" alt="">';
			$html .= '<div class="portfolio-info">';
			$html .= '<h4>' . get_the_title() . '</h4>';
			$html .= '<p>Card</p>';
			$html .= '<div class="portfolio-links">';
			$html .= '<a href="'. get_the_post_thumbnail_url( ) .'" data-gall="portfolioGallery"class="venobox" title="'.get_the_title() .'"><i class="bx bx-plus"></i></a>';
			$html .= '<a href="'.get_permalink().'" title="More Details"><i class="bx bx-link"></i></a>';
			$html .= '</div>';
			$html .= '</div>';
			$html .= '</div>';
			$html .= '</div>';
		}

		if ( get_the_title() == "Card" ) {
			$html .= '<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-card">';
			$html .= '<div class="portfolio-wrap">';

			$html .= '<img src="' . get_the_post_thumbnail_url( '', 'medium' ) . '" class="img-fluid" alt="">';
			$html .= '<div class="portfolio-info">';
			$html .= '<h4>' . get_the_title() . '</h4>';
			$html .= '<p>Card</p>';
			$html .= '<div class="portfolio-links">';
			$html .= '<a href="'. get_the_post_thumbnail_url() .'" data-gall="portfolioGallery" class="venobox" title="'.get_the_title() .'"><i class="bx bx-plus"></i></a>';
			$html .= '<a href="'.get_permalink().'" title="More Details"><i class="bx bx-link"></i></a>';
			$html .= '</div>';
			$html .= '</div>';
			$html .= '</div>';
			$html .= '</div>';
		}


		if ( get_the_title() == "Web" ) {


			$html .= '<div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-web">';
			$html .= '<div class="portfolio-wrap">';

			$html .= '<img src="' . get_the_post_thumbnail_url( '', 'medium' ) . '" class="img-fluid" alt="">';
			$html .= '<div class="portfolio-info">';

			$html .= '<h4>' . get_the_title() . '</h4>';
			$html .= '<p>Web</p>';
			$html .= '<div class="portfolio-links">';
			$html .= '<a href="'. get_the_post_thumbnail_url( ) .'" data-gall="portfolioGallery"class="venobox" title="'.get_the_title() .'"><i class="bx bx-plus"></i></a>';
			$html .= '<a href="'.get_permalink().'" title="More Details"><i class="bx bx-link"></i></a>';
			$html .= '</div>';
			$html .= '</div>';
			$html .= '</div>';
			$html .= '</div>';

		}


	}
	$html .= '</div>';
	$html .= '</div>';

	$html .= '</section>';

	return $html;
}

add_shortcode( 'portfolio', 'maxim_portfolio_items' );


//team
function maxim_teammember() {

	/**
	 * Post Type: teams.
	 */

	$labels = [
		"name"          => __( "teams", "maxim" ),
		"singular_name" => __( "team", "maxim" ),
		"menu_name"     => __( "Team", "maxim" ),
		"all_items"     => __( "All team members", "maxim" ),
		"add_new"       => __( "Add new team members", "maxim" ),
	];

	$args = [
		"label"                 => __( "teams", "maxim" ),
		"labels"                => $labels,
		"description"           => "",
		"public"                => true,
		"publicly_queryable"    => true,
		"show_ui"               => true,
		"show_in_rest"          => true,
		"rest_base"             => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive"           => "Team",
		"show_in_menu"          => true,
		"show_in_nav_menus"     => true,
		"delete_with_user"      => false,
		"exclude_from_search"   => false,
		"capability_type"       => "post",
		"map_meta_cap"          => true,
		"hierarchical"          => true,
		"rewrite"               => [ "slug" => "team", "with_front" => true ],
		"query_var"             => true,
		"menu_position"         => 7,
		"supports"              => [ "title", "editor", "thumbnail", "excerpt", "custom-fields" ],
		"taxonomies"            => [ "category", "author" ],
	];

	register_post_type( "teammember", $args );
}

add_action( 'init', 'maxim_teammember' );


function maxim_team_member_items() {
	$args  = array(
		'post_type' => 'teammember',
	);
	$query = new WP_Query( $args );

	$html = '<div class="section-title" data-aos="fade-up">';
	$html .= '<h2>Team</h2>';
	$html .= '<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
	                    consectetur velit. Quisquam quos quisquam cupiditate.</p>';
	$html .= '</div>';

	$html .= '<section id="team" class="team">';
	$html .= '<div class="container">';
	$html .= '<div class="row">';
	// The Loop
	while ( $query->have_posts() ) {
		$query->the_post();
		$html .= '<div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">';
		$html .= '<div class="member">';
		$html .= '<img src="' . get_the_post_thumbnail_url( '', 'medium' ) . '" class="img-fluid" alt="">';
		$html .= '<div class="member-info">';
		$html .= '<div class="member-info-content">';
		$html .= '<br><h4>' . get_the_title() . '</h4>';
		$html .= '<span>' . get_the_content() . '</span>';
		$html .= '</div>';
		$html .= '<div class="social">';
		$html .= '<a href=""><i class="icofont-twitter"> </i></a>';
		$html .= '<a href=""><i class="icofont-facebook"> </i></a>';
		$html .= ' <a href=""><i class="icofont-instagram"> </i></a>';
		$html .= '<a href=""><i class="icofont-linkedin"> </i></a>';
		$html .= '</div>';

		$html .= '</div>';
		$html .= '</div>';
		$html .= '</div>';


	}
	$html .= '</div>';
	$html .= '</div>';
	$html .= '</section>';

	return $html;
}

add_shortcode( 'teammember', 'maxim_team_member_items' );


//metabox for post

function maxim_meta() {
	add_meta_box( 'maxim-meta', __( 'Portfolio Quote' ), 'maxim_meta_bx', 'portfolios', 'normal', 'high' );
}

add_action( 'add_meta_boxes', 'maxim_meta' );

function maxim_meta_bx( $post ) {

	// Get values for filling in the inputs if we have them.
	$quote  = get_post_meta( $post->ID, '_cd_quote_content', true );
	$author = get_post_meta( $post->ID, '_cd_quote_author', true );
	$date   = get_post_meta( $post->ID, '_cd_quote_date', true );



	// Nonce to verify intention later
	wp_nonce_field( 'save_quote_meta', 'quote_nonce' );
	?>
    <p>
        <label for="quote-content">Quote</label>
        <textarea class="widefat" id="quote-content" name="_cd_quote_content"><?php echo $quote; ?></textarea>
    </p>
    <p>
        <label for="quote-author">Author</label>
        <input type="text" class="widefat" id="quote-author" name="_cd_quote_author" value="<?php echo $author; ?>"/>
    </p>
    <p>
        <label for="quote-date">Author Dates</label>
        <input type="text" class="widefat" id="quote-date" name="_cd_quote_date" value="<?php echo $date; ?>"/>
    </p>

	<?php

}





function maxim_meta_save( $id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	if ( ! isset( $_POST['quote_nonce'] ) || ! wp_verify_nonce( $_POST['quote_nonce'], 'save_quote_meta' ) ) {
		return;
	}

	if ( ! current_user_can( 'edit_post' ) ) {
		return;
	}

	$allowed = array(
		'p' => array()
	);

	if ( isset( $_POST['_cd_quote_content'] ) ) {
		update_post_meta( $id, '_cd_quote_content', wp_kses( $_POST['_cd_quote_content'], $allowed ) );
	}

	if ( isset( $_POST['_cd_quote_author'] ) ) {
		update_post_meta( $id, '_cd_quote_author', esc_attr( strip_tags( $_POST['_cd_quote_author'] ) ) );
	}

	if ( isset( $_POST['_cd_quote_date'] ) ) {
		update_post_meta( $id, '_cd_quote_date', esc_attr( strip_tags( $_POST['_cd_quote_date'] ) ) );
	}

	// make sure we get a clean url here with esc_url
	if ( isset( $_POST['meta-image'] ) ) {
		update_post_meta( $id, 'meta-image', esc_url( $_POST['meta-image'], array( 'http' ) ) );
	}

}

add_action( 'save_post', 'maxim_meta_save' );