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
			<!-- DISAPPEARING NAV -->
			<div class='skybox-menu'>
				<div class="container">

					<!-- LOGO -->
					<div class="nav-logo-btn-container">
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
						<!-- HAMBURGER -->
						<div class="hamburger-container">
							<div class="hamburger">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
					</div>

					<!-- NAV -->
					<div class="nav-toggle-item">
						<!-- SPACER -->
						<div>
						</div>
						<!-- SPACER -->

						<ul>
							<li><a href="https://skybox.gg/performance/">Performance</a></li>
							<li><a href="https://skybox.gg/broadcast/">Broadcast</a></li>
							<li><a href="https://skybox.gg/publishers/">Publishing</a></li>
							<li><a href="https://skybox.gg/pricing/">Pricing</a></li>
							<li><a target="_blank" href="https://careers.skybox.gg/">Jobs</a></li>
							<li><a class="nav-btn" href="https://skybox.gg/contact/">Contact us</a></li>
						</ul>

						<!-- SOCIAL NAV -->
						<div class="social-nav">
							<h6 class="text-h6">Follow us!</h6>
							<ul class="social-media-menu">
								<li>
									<a class="sm-icon sm-x" href="<?php echo get_field('x'); ?>" target="_blank">
										<svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
											<g clip-path="url(#clip0_196_26)">
												<path d="M0.0510992 0L8.15895 11.0311L0 20H1.8364L8.97971 12.1475L14.7511 20H21L12.4358 8.34848L20.0302 0H18.1938L11.6154 7.23182L6.3 0H0.0510992ZM2.7516 1.37629H5.62232L18.2991 18.6237H15.4284L2.7516 1.37629Z" fill="#BABABA" />
											</g>
											<defs>
												<clipPath id="clip0_196_26">
													<rect width="21" height="20" fill="white" />
												</clipPath>
											</defs>
										</svg>
									</a>
								</li>

								<li>
									<a class="sm-icon sm-ig" href="<?php echo get_field('instagram'); ?>" target="_blank">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M10 1.8025C12.67 1.8025 12.9867 1.8125 14.0417 1.86083C16.7517 1.98417 18.0175 3.27 18.1408 5.96C18.1892 7.01417 18.1983 7.33083 18.1983 10.0008C18.1983 12.6717 18.1883 12.9875 18.1408 14.0417C18.0167 16.7292 16.7542 18.0175 14.0417 18.1408C12.9867 18.1892 12.6717 18.1992 10 18.1992C7.33 18.1992 7.01333 18.1892 5.95917 18.1408C3.2425 18.0167 1.98333 16.725 1.86 14.0408C1.81167 12.9867 1.80167 12.6708 1.80167 10C1.80167 7.33 1.8125 7.01417 1.86 5.95917C1.98417 3.27 3.24667 1.98333 5.95917 1.86C7.01417 1.8125 7.33 1.8025 10 1.8025ZM10 0C7.28417 0 6.94417 0.0116667 5.8775 0.06C2.24583 0.226667 0.2275 2.24167 0.0608333 5.87667C0.0116667 6.94417 0 7.28417 0 10C0 12.7158 0.0116667 13.0567 0.06 14.1233C0.226667 17.755 2.24167 19.7733 5.87667 19.94C6.94417 19.9883 7.28417 20 10 20C12.7158 20 13.0567 19.9883 14.1233 19.94C17.7517 19.7733 19.775 17.7583 19.9392 14.1233C19.9883 13.0567 20 12.7158 20 10C20 7.28417 19.9883 6.94417 19.94 5.8775C19.7767 2.24917 17.7592 0.2275 14.1242 0.0608333C13.0567 0.0116667 12.7158 0 10 0ZM10 4.865C7.16417 4.865 4.865 7.16417 4.865 10C4.865 12.8358 7.16417 15.1358 10 15.1358C12.8358 15.1358 15.135 12.8367 15.135 10C15.135 7.16417 12.8358 4.865 10 4.865ZM10 13.3333C8.15917 13.3333 6.66667 11.8417 6.66667 10C6.66667 8.15917 8.15917 6.66667 10 6.66667C11.8408 6.66667 13.3333 8.15917 13.3333 10C13.3333 11.8417 11.8408 13.3333 10 13.3333ZM15.3383 3.4625C14.675 3.4625 14.1375 4 14.1375 4.6625C14.1375 5.325 14.675 5.8625 15.3383 5.8625C16.0008 5.8625 16.5375 5.325 16.5375 4.6625C16.5375 4 16.0008 3.4625 15.3383 3.4625Z" fill="#BABABA" />
										</svg>
									</a>
								</li>

								<li>
									<a class="sm-icon sm-yt" href="<?php echo get_field('youtube'); ?>" target="_blank">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M19.615 3.18413C16.011 2.93813 7.984 2.93913 4.385 3.18413C0.488 3.45013 0.029 5.80412 0 12.0001C0.029 18.1851 0.484 20.5491 4.385 20.8161C7.985 21.0611 16.011 21.0621 19.615 20.8161C23.512 20.5501 23.971 18.1961 24 12.0001C23.971 5.81512 23.516 3.45113 19.615 3.18413ZM9 16.0001V8.00013L17 11.9931L9 16.0001Z" fill="#BABABA" />
										</svg>
									</a>
								</li>

								<li>
									<a class="sm-icon sm-dc" href="<?php echo get_field('discord'); ?>" target="_blank">
										<svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M29.997 16.175C29.8958 15.0194 29.8553 13.8536 29.6832 12.7081C29.1772 9.20072 28.0437 5.89604 26.3739 2.77382C26.303 2.6319 26.1816 2.50012 26.0601 2.40889C24.1069 1.04038 21.9613 0.209142 19.5729 0.00640043C19.2491 -0.0240108 19.0062 0.0469487 18.8341 0.371335C20.9797 1.00997 23.0341 1.85135 24.8254 3.24013C21.6881 1.83107 18.4192 1.00997 14.9884 1.00997C11.5677 1.00997 8.29876 1.84121 5.18166 3.24013C6.97298 1.85135 9.02743 1.02011 11.173 0.371335C10.9807 0.0368116 10.7277 -0.0138737 10.4038 0.0165375C8.06599 0.209142 5.95082 1.00997 4.03805 2.32779C3.84577 2.45957 3.67372 2.65218 3.57251 2.84478C2.6718 4.49712 1.96336 6.2407 1.39662 8.03496C0.536383 10.701 0.0303613 13.4279 0 16.2257C0 16.3676 0.0303613 16.54 0.121445 16.6312C2.18601 18.8309 4.75661 19.8649 7.73201 19.9967C7.83322 19.9967 7.98502 19.9866 8.04575 19.9257C8.58213 19.3074 9.09827 18.6789 9.64478 18.02C7.90406 17.4827 6.386 16.7224 5.23227 15.3742C11.7397 19.0337 18.237 19.0235 24.7546 15.3742C23.6009 16.7326 22.0727 17.4827 20.3421 18.02C20.838 18.6181 21.3035 19.1553 21.7387 19.723C21.9107 19.946 22.103 20.017 22.3763 19.9967C25.2302 19.8244 27.73 18.8411 29.744 16.7528C29.9363 16.5805 30.0172 16.4183 29.997 16.175ZM10.3228 14.1273C8.8655 14.0969 7.72189 12.8703 7.76237 11.4005C7.80286 9.94073 8.98695 8.75469 10.3734 8.79524C11.8612 8.83579 13.0351 10.0522 13.0048 11.512C12.9643 12.992 11.7701 14.1577 10.3228 14.1273ZM19.5628 14.1273C18.1257 14.0969 16.972 12.8805 16.9922 11.441C17.0226 9.94073 18.2269 8.76483 19.7247 8.79524C21.1011 8.81551 22.2548 10.0725 22.2245 11.512C22.1941 13.0021 21.01 14.1577 19.5628 14.1273Z" fill="#BABABA" />
										</svg>
									</a>
								</li>

								<li>
									<a class="sm-icon sm-fb" href="<?php echo get_field('facebook'); ?>" target="_blank">
										<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M7.5 6.66667H5V10H7.5V20H11.6667V10H14.7017L15 6.66667H11.6667V5.2775C11.6667 4.48167 11.8267 4.16667 12.5958 4.16667H15V0H11.8267C8.83 0 7.5 1.31917 7.5 3.84583V6.66667Z" fill="#BABABA" />
										</svg>
									</a>
								</li>
							</ul>
						</div>
					</div>

				</div>
				<!-- END CONTAINER -->

			</div>
			<!-- END DISAPPEARING NAV -->

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

				<div class="header-content container">
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
						<a href="<?php echo get_field('edge_login_link')['url']; ?>" class="login-btn">Log in</a>
						<a href="<?php echo get_field('edge_signup_link')['url']; ?>" class="signup-btn btn btn--solid-grey">Sign up</a>
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