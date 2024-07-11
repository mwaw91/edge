<!-- 
 FOOTER
INTERACTION
 
HOVER GREEN
ON CLICK, STAY GREEN FOR A SEOND THEN REDIRECT
 -->



<!-- SWIPER -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- JS -->
<script type='text/javascript' src='https://skybox.gg/wp-content/themes/hello-elementor-child/edge-page/child-theme.min.js'></script>



<!-- Footer Start ============================================= -->
<footer id="colophon" class="site-footer clearfix" role="contentinfo">
    <div class="container">
        <div class="copyright">
            Skybox Technologies ApSHQ Copenhagen DenmarkBus Reg: DK-39429063
        </div>
        <!-- LOGO -->

        <?php echo '<img src="' . get_field('edge_logo')['url'] . '" class="">';
        //the_custom_logo(); 
        ?>

        <!-- TODO - SVG -->
        <ul class="social-media-menu">
            <li><a class="sm-icon sm-x" href="<?php echo get_field('x'); ?>" target="_blank"><img src="https://skybox.gg/wp-content/themes/hello-elementor-child/edge-page/img/sm-x.png" alt="social media icon x"></a></li>
            <li><a class="sm-icon sm-ig" href="<?php echo get_field('instagram'); ?>" target="_blank"><img src="https://skybox.gg/wp-content/themes/hello-elementor-child/edge-page/img/sm-ig.png" alt="social media icon instagram"></a></li>
            <li><a class="sm-icon sm-yt" href="<?php echo get_field('youtube'); ?>" target="_blank"><img src="https://skybox.gg/wp-content/themes/hello-elementor-child/edge-page/img/sm-yt.png" alt="social media icon youtube"></a></li>
            <li><a class="sm-icon sm-dc" href="<?php echo get_field('discord'); ?>" target="_blank"><img src="https://skybox.gg/wp-content/themes/hello-elementor-child/edge-page/img/sm-discord.png" alt="social media icon discord"></a></li>
            <li><a class="sm-icon sm-fb" href="<?php echo get_field('facebook'); ?>" target="_blank"><img src="https://skybox.gg/wp-content/themes/hello-elementor-child/edge-page/img/sm-fb.png" alt="social media icon facebook"></a></li>
        </ul>
    </div> <!-- end .container -->

</footer> <!-- end #colophon -->

</div> <!-- end #page -->
<?php //wp_footer(); 
?>
</body>

</html>