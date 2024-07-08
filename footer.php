<?php
/**
 * The template for displaying the footer.
 *
 * @package Theme Freesia
 * @subpackage Edge
 * @since Edge 1.0
 */
?>
<!-- Footer Start ============================================= -->
<footer id="colophon" class="site-footer clearfix" role="contentinfo">
	<div class="container">
		<div class="copyright">
		Skybox Technologies ApSHQ Copenhagen DenmarkBus Reg: DK-39429063
		</div>
			<!-- LOGO -->

		<?php the_custom_logo(); ?>

		<!-- TODO - SVG -->
		<ul class="social-media-menu">
				<li><a class="sm-icon sm-x" href="<?php echo get_field('x');?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/src/img/sm-x.png" alt="social media icon x"></a></li>
				<li><a class="sm-icon sm-ig" href="<?php echo get_field('instagram');?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/src/img/sm-ig.png" alt="social media icon instagram"></a></li>
				<li><a class="sm-icon sm-yt" href="<?php echo get_field('youtube');?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/src/img/sm-yt.png" alt="social media icon youtube"></a></li>
				<li><a class="sm-icon sm-dc" href="<?php echo get_field('discord');?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/src/img/sm-discord.png" alt="social media icon discord"></a></li>
				<li><a class="sm-icon sm-fb" href="<?php echo get_field('facebook');?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri();?>/src/img/sm-fb.png" alt="social media icon facebook"></a></li>
		</ul>
	</div> <!-- end .container -->

</footer> <!-- end #colophon -->

</div> <!-- end #page -->
<?php wp_footer(); ?>
</body>
</html>