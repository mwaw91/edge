<?php

/**
 * Displays the header content
 *
 * @package Theme Freesia
 * @subpackage Edge
 * @since Edge 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php
$edge_settings = edge_get_theme_options(); ?>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>

	<!-- GSAP -->
	<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>

	<!-- AOS -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	<!-- SWIPER -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>

<body <?php body_class(); ?>>
	<?php
	if (function_exists('wp_body_open')) {
		wp_body_open();
	} ?>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'edge'); ?></a>
		<!-- Masthead ============================================= -->
		<header id="masthead" class="site-header" role="banner">
			<!-- DISSAPPEARING NAV -->
			<div class='skybox-menu'>
				<div class="container">

					<!-- LOGO -->
					<div class="nav-logo">
						<svg xmlns="http://www.w3.org/2000/svg" width="176" height="32" viewBox="0 0 176 32" fill="none">
							<g clip-path="url(#clip0_331_1017)">
								<path d="M16.9062 9.08413L11.0174 12.5945L9.28532 8.49336C9.21258 8.32177 9.09701 8.17171 8.94969 8.05756C8.83611 7.96699 8.70575 7.89975 8.5661 7.85971C8.42645 7.81967 8.28027 7.80762 8.13594 7.82425C7.99162 7.84087 7.85201 7.88585 7.72513 7.9566C7.59824 8.02735 7.48659 8.12247 7.39657 8.2365L1.23204 16.092L6.26898 0L16.9062 9.08413Z" fill="#7075D6"></path>
								<path d="M28.3149 8.49165L26.5828 12.5928L20.694 9.08241L31.3312 0L36.3827 16.1237L30.2036 8.23479C30.0895 8.08747 29.9394 7.97191 29.7678 7.89917C29.4963 7.78833 29.1921 7.78829 28.9205 7.89904C28.6489 8.00979 28.4315 8.22252 28.3149 8.49165Z" fill="#7075D6"></path>
								<path d="M18.8052 10.5259L25.7104 14.6493L18.8052 30.9853L11.889 14.6493L18.8052 10.5259Z" fill="#444ACA"></path>
								<path d="M37.5891 21.2523L21.1298 31.1524L29.6214 11.0842L37.5891 21.2523Z" fill="#7075D6"></path>
								<path d="M16.4704 31.1523L-1.52588e-05 21.2411L7.97792 11.073L16.4704 31.1523Z" fill="#7075D6"></path>
							</g>
							<path d="M59.7745 26.5418H45.6269C45.5978 26.5418 45.5978 26.5418 45.5978 26.5126V21.7677C45.5978 21.7386 45.5978 21.7386 45.6269 21.7386H58.843C58.8721 21.7386 58.8721 21.7386 58.8721 21.7095V18.7402C58.8721 18.7111 58.8721 18.7111 58.843 18.7111H49.9061C46.704 18.7111 45.5105 17.3138 45.5105 14.2572V10.6766C45.5105 7.62007 46.7622 6.16455 50.0226 6.16455H63.9664C63.9955 6.16455 63.9955 6.16455 63.9955 6.19366V10.9386C63.9955 10.9678 63.9955 10.9678 63.9664 10.9678H50.8085C50.7794 10.9678 50.7794 10.9678 50.7794 10.9969V13.8788C50.7794 13.9079 50.7794 13.9079 50.8085 13.9079H59.7745C62.9475 13.9079 64.1411 15.2761 64.1411 18.3618V22.0879C64.1411 25.1445 62.9475 26.5418 59.7745 26.5418Z" fill="#7075D6"></path>
							<path d="M71.5699 26.5418H66.3591C66.33 26.5418 66.33 26.5418 66.33 26.5126V6.19366C66.33 6.16455 66.33 6.16455 66.3591 6.16455H71.5699C71.599 6.16455 71.599 6.16455 71.599 6.19366V13.9952H73.3165L79.7499 6.16455H86.1832L77.8577 16.1785L86.387 26.5418H79.6043L73.4912 18.8275H71.599V26.5126C71.599 26.5418 71.599 26.5418 71.5699 26.5418Z" fill="#7075D6"></path>
							<path d="M100.621 26.5418H95.2934C95.2643 26.5418 95.2643 26.5418 95.2643 26.5126V18.3909L87.0552 6.16455H93.0228L97.8842 13.3839L102.542 6.16455H108.422L100.65 18.3909V26.5126C100.65 26.5418 100.65 26.5418 100.621 26.5418Z" fill="#7075D6"></path>
							<path d="M124.903 26.5418H109.882C109.853 26.5418 109.853 26.5418 109.853 26.5126V6.19366C109.853 6.16455 109.853 6.16455 109.882 6.16455H124.525C127.96 6.16455 129.212 7.56185 129.212 10.4438V12.8308C129.212 15.3052 127.552 16.2367 124.67 16.2367V16.324C127.64 16.324 129.241 17.1974 129.241 19.7591V22.2043C129.241 25.1445 128.105 26.5418 124.903 26.5418ZM115.122 10.9678V13.937H123.972C124.001 13.937 124.001 13.937 124.001 13.9079V10.9969C124.001 10.9678 124.001 10.9678 123.972 10.9678H115.122ZM115.122 18.7402V21.7386H123.972C124.001 21.7386 124.001 21.7386 124.001 21.7095V18.7693C124.001 18.7402 124.001 18.7402 123.972 18.7402H115.122Z" fill="#7075D6"></path>
							<path d="M146.999 26.5418H135.85C132.647 26.5418 131.454 25.1445 131.454 22.0879V10.6184C131.454 7.56185 132.647 6.16455 135.85 6.16455H147.028C150.23 6.16455 151.394 7.56185 151.394 10.6184V22.0879C151.394 25.1445 150.201 26.5418 146.999 26.5418ZM136.752 21.7386H146.125C146.155 21.7386 146.155 21.7386 146.155 21.7095V10.9969C146.155 10.9678 146.155 10.9678 146.125 10.9678H136.752C136.723 10.9678 136.723 10.9678 136.723 10.9969V21.7095C136.723 21.7386 136.723 21.7386 136.752 21.7386Z" fill="#7075D6"></path>
							<path d="M152.159 26.5418L160.543 16.1494L152.246 6.16455H158.796L164.007 12.4815L169.043 6.16455H175.534L167.442 16.1494L176 26.5418H169.159L164.007 19.9919L158.65 26.5418H152.159Z" fill="#7075D6"></path>
							<defs>
								<clipPath id="clip0_331_1017">
									<rect width="137.846" height="31.1523" fill="white"></rect>
								</clipPath>
							</defs>
						</svg>
					</div>
					<!-- NAV -->
					<ul>
						<li><a href="https://skybox.gg/performance/">Performance</a></li>
						<li><a href="https://skybox.gg/broadcast/">Broadcast</a></li>
						<li><a href="https://skybox.gg/publishers/">Publishing</a></li>
						<li><a href="https://skybox.gg/pricing/">Pricing</a></li>
						<li><a target="_blank" href="https://careers.skybox.gg/">Jobs</a></li>
						<li><a class="nav-btn" href="https://skybox.gg/contact/">Contact us</a></li>
					</ul>
				</div>
			</div>
			<!-- END DISSAPPEARING NAV -->

			<?php if (function_exists('the_custom_header_markup')) {
				if (is_header_video_active() && (has_header_video() || is_customize_preview())) {
					echo '<div class="custom-header">
					<div class="custom-header-media">';
					the_custom_header_markup();
					echo '</div>
				</div>';
				} else {
					if (has_header_image()) { ?>
						<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php header_image(); ?>" class="header-image" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" /> </a>
				<?php }
				}
			} else { ?>
				<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php header_image(); ?>" class="header-image" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" /> </a>
			<?php } ?>
			<!-- <div class="top-header"> -->
			<!-- <div class="container clearfix"> -->
			<?php
			// if( is_active_sidebar( 'edge_header_info' )) {
			// 	dynamic_sidebar( 'edge_header_info' );
			// }
			// if($edge_settings['edge_top_social_icons'] == 0):
			// 	echo '<div class="header-social-block">';
			// 		do_action('social_links');
			// 	echo '</div>'.'<!-- end .header-social-block -->';
			// endif;
			// do_action('edge_site_branding'); 
			?>
			<!-- </div> -->
			<!-- end .container -->
			<!-- </div>  -->
			<!-- end .top-header -->


			<!-- Main Header============================================= -->
			<!-- <div id="sticky_header"> -->
			<div id="">

				<div class="header-content container clearfix">
					<!-- LOGO  -->
					<?php do_action('edge_site_branding'); ?>

					<!-- Main Nav ============================================= -->
					<?php
					if (has_nav_menu('primary')) { ?>
						<?php $args = array(
							'theme_location' => 'primary',
							'container'      => '',
							'items_wrap'     => '<ul id="primary-menu" class="menu nav-menu">%3$s</ul>',
						); ?>
						<nav id="site-navigation" class="main-navigation clearfix" role="navigation" aria-label="<?php esc_attr_e('Main Menu', 'edge'); ?>">
							<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" type="button">
								<span class="line-one"></span>
					  			<span class="line-two"></span>
					  			<span class="line-three"></span>
						  	</button> -->
							<!-- end .menu-toggle -->
							<?php wp_nav_menu($args); //extract the content from apperance-> nav menu 
							?>
						</nav> <!-- end #site-navigation -->
					<?php } // extract the content from page menu only 
					?>
					<!-- <nav id="site-navigation" class="main-navigation clearfix" role="navigation" aria-label="<?php //esc_attr_e('Main Menu','edge');
																													?>"> -->
					<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" type="button">
								<span class="line-one"></span>
					  			<span class="line-two"></span>
					  			<span class="line-three"></span>
						  	</button> -->
					<!-- end .menu-toggle -->
					<?php	// wp_page_menu(array('menu_class' => 'menu', 'items_wrap'     => '<ul id="primary-menu" class="menu nav-menu">%3$s</ul>')); 
					?>
					<!-- </nav> -->
					<!-- end #site-navigation -->
					<div class="header-btns">
						<a href="#" class="login-btn btn btn--solid btn--solid-grey">login</a>
						<a href="#" class="login-btn signup-btn btn btn--solid btn--solid-grey">Sign up</a>
					</div>
				</div> <!-- end .container -->
			</div> <!-- end #sticky_header -->
			<?php
			// $enable_slider = $edge_settings['edge_enable_slider'];
			// edge_slider_value();
			// if ($enable_slider=='frontpage'|| $enable_slider=='enitresite'){
			// 	if(is_front_page() && ($enable_slider=='frontpage') ) {
			// 		if($edge_settings['edge_slider_type'] == 'default_slider') {
			// 				edge_page_sliders();
			// 		}else{
			// 			if(class_exists('Edge_Plus_Features')):
			// 				edge_image_sliders();
			// 			endif;
			// 		}
			// 	}
			// 	if($enable_slider=='enitresite'){
			// 		if($edge_settings['edge_slider_type'] == 'default_slider') {
			// 				edge_page_sliders();
			// 		}else{
			// 			if(class_exists('Edge_Plus_Features')):
			// 				edge_image_sliders();
			// 			endif;
			// 		}
			// 	}
			// } 
			?>
		</header> <!-- end #masthead -->
		<!-- Main Page Start ============================================= -->
		<div id="content">
			<div class="container clearfix">