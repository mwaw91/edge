<!-- DISSAPPEARING MENU -->
<!-- <div class='main-tool-bar'></div> -->
<?php
get_header();
?>

<!-- <div class="green-shadow radius fade-up" data-aos="fade-up"></div>
<div class="fade-left" data-aos="fade-left"></div>
<div class="fade-right" data-aos="fade-right"></div> -->

<!-- HERO -->
<div class="container">
    <section id="hero" data-aos="fade-up">
        <?php
        $title = get_field('title');
        $subtitle = get_field('subtitle');
        $button = get_field('button');
        $hero_img = get_field('image');
        $hero_video = get_field('hero-video');
        ?>

        <!-- <h1><?php // echo $title; 
                    ?></h1> -->
        <h1>Track your CS2 Stats like the Pros</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

        <button class="btn btn--solid"><?php echo $button['title']; ?></button>
        <!-- <button class="btn"><?php //echo $button['title']; 
                                    ?></button>
        <button class="btn btn--solid-white"><?php //echo $button['title']; 
                                                ?></button>
        <button class="btn btn--solid-grey"><?php //echo $button['title']; 
                                            ?></button>
        <button class="btn btn--outline"><?php //echo $button['title']; 
                                            ?></button> -->


        <!-- echo $button['url']; -->
        <video class="radius green-shadow" width="100%">
            <source src="<?php echo $hero_video['url']; ?>" type="video/mp4">
            <source src="<?php echo $hero_video['url']; ?>" type="video/ogg">
            Your browser does not support the video tag.
        </video>
    </section>
    <!-- END HERO -->


    <!-- TESTED AND USED -->
    <section>
        <div id="tested">
            <h2><?php echo get_field('tested-title');?></h2>
            
<?php 
$top-row = get_field('top-row-of-videos');
if ($top-row){
echo '<div class="top-row">';
foreach($top-row as $row ) 
                <div class="grid-item">
                    <video class="radius green-shadow" width="100%">
                        <source src="<?php echo $hero_video['url']; ?>" type="video/mp4">
                        <source src="<?php echo $hero_video['url']; ?>" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                    <div>
                        <span>@ESL</span>
                        <span>ICON 3.2M</span>
                    </div>
                </div>

                echo '</div>';
}?>

            
            <div class="bottom-row">

                <div class="grid-item">
                    <video class="radius green-shadow" width="100%">
                        <source src="<?php echo $hero_video['url']; ?>" type="video/mp4">
                        <source src="<?php echo $hero_video['url']; ?>" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                    <div>
                        <span>@ESL</span>
                        <span>ICON 3.2M</span>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END TESTED AND USED -->


    <!-- STAT CONTAINER -->
    <section id="stat-container">
        <div class="stats">

            <div class="stat">
                <span>100+</span>
                <p>Lorum ipsum dolar sit amet</p>
            </div>

        </div>
        <p>Lorum ipsum dolar sit amet. Lorum ipsum dolar sit amet. </p>
        <div class="logo-container">
            IMG HERE
        </div>
    </section>
    <!-- END STAT CONTAINER -->


    <!-- IMPROVE YOUR GAMEPLAY -->
    <section>
        <div data-aos="fade-up" class="title-section">
            <h6>skybox edge for teams</h6>
            <h2>IMPROVE YOUR GAMEPLAY</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        TODO - CAROUSEL WITH 3 BUTTONS HERE
        <img class="radius green-shadow" src="<?php echo $hero_img['url']; ?>">
    </section>
    <!-- END IMPROVE YOUR GAMEPLAY -->

    <!-- ALTERNATING VIDEO COLUMNS -->
    <section>
        <!-- row 1 -->
        <div id="alternating-video-column">
            <div>
                <img src="<?php echo $hero_img['url']; ?>">
            </div>
            <div data-aos="fade-up" class="title-section">
                <h6>skybox edge for teams</h6>
                <h2>Lorum ipsum dolar sit amet</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <!-- row 2 -->
        <div class="alternating-video-column">
            <div>
                <img src="<?php echo $hero_img['url']; ?>">
            </div>
            <div data-aos="fade-up" class="title-section">
                <h6>skybox edge for teams</h6>
                <h2>Lorum ipsum dolar sit amet</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </section>
    <!-- END ALTERNATING VIDEO COLUMNS -->

</div>

<!-- GRADIENT -->
<div class="bg-gradient bg-gradient--top-left"></div>

<div class="container">
    <!-- PRICING -->
    <section id="pricing">

        <!-- toggle -->
        <input id="toggle-on" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
        <label for="toggle-on" class="btn">Yes</label>
        <input id="toggle-off" class="toggle toggle-right" name="toggle" value="true" type="radio">
        <label for="toggle-off" class="btn">No</label>


        <div data-aos="fade-up" class="title-section">
            <h6><?php echo get_field('pricing_title')['small_text']; ?></h6>
            <h2>start from today</h2>
            <p><?php echo get_field('pricing_title')['description']; ?></p>
        </div>
    </section>
    <!-- END PRICING -->

    <!-- TESTIMONIALS -->
    <section id="testimonials">
        <div data-aos="fade-up" class="title-section">
            <h6><?php echo get_field('testimonials_title')['small_text']; ?></h6>
            <h2>Take their word for it</h2>
            <!-- <h2><?php //echo get_field('testimonials_title')['title']; 
                        ?></h2> -->
            <p><?php echo get_field('testimonials_title')['description']; ?></p>
        </div>

        <div class="testimonial radius">
            <div>
                <img src="<?php echo $hero_img['url']; ?>">
                <div>
                    <h3>Jane smith</h3>
                    <h5>fnatic</h5>
                </div>
            </div>
            <p>Lorum ipsum dolar sit amet. Lorum ipsum dolar sit amet. Lorum ipsum dolar sit amet. Lorum ipsum dolar sit amet. </p>

        </div>
    </section>

    <!-- SWIPER -->
    <!-- Slider main container -->
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">Slide 1</div>
            <div class="swiper-slide">Slide 2</div>
            <div class="swiper-slide">Slide 3</div>
            ...
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>
    <!-- END TESTIMONIALS -->



    <!-- CTA -->
    <section data-aos="fade-up" id="cta">
        <div>
            <h6><?php echo get_field('testimonials_title')['small_text']; ?></h6>
            <h2><?php echo get_field('testimonials_title')['title']; ?></h2>
            <p><?php echo get_field('testimonials_title')['description']; ?></p>
        </div>
        <img src="<?php echo $hero_img['url']; ?>">
    </section>
    <!-- END CTA -->
    <!-- </div> -->

    <!-- GRADIENT -->
    <!-- <div class="bg-gradient bg-gradient--bottom-right"></div> -->

    <!-- <div class="container"> -->
    <!-- FAQS -->
    <section id="faq">
        <div data-aos="fade-up" class="title-section">
            <h6><?php echo get_field('faqs_title')['small_text']; ?></h6>
            <h2>Questions</h2>
            <!-- <h2><?php //echo get_field('faqs_title')['title']; 
                        ?></h2> -->
            <p><?php echo get_field('faqs_title')['description']; ?></p>
        </div>

        <!-- CODEPEN -->
        <div class='faq'>
            <input id='faq-a' type='checkbox'>
            <label for='faq-a'>
                <p class="faq-heading">Is this Dropbox upgrade safe?</p>
                <div class='faq-arrow'></div>
                <p class="faq-text">It is completely safe and totally legal! There will is no record of this process to your shared Dropbox users.</p>
            </label>
            <input id='faq-b' type='checkbox'>
            <label for='faq-b'>
                <p class="faq-heading">How long does it take to upgrade my Dropbox?</p>
                <div class='faq-arrow'></div>
                <p class="faq-text">Upgrading is a slow process and will take around 3-10 days. <strong>In order to control the risk and secure the space you earned, we will gradually process it.</strong> during this time you can still use your account as normal as usual.</p>
            </label>
            <input id='faq-c' type='checkbox'>
            <label for='faq-c'>
                <p class="faq-heading">What do you need to do the upgrade?</p>
                <div class='faq-arrow'></div>
                <p class="faq-text">NO ACCESS TO YOUR PERSONAL ACCOUNT OR INFO IS REQUIRED! All I need from you is your Dropbox referral link.</p>
            </label>
            <input id='faq-d' type='checkbox'>
            <label for='faq-d'>
                <p class="faq-heading">Where do I find my personal Dropbox referral link?</p>
                <div class='faq-arrow'></div>
                <p class="faq-text">Log in to the Dropbox website and get your referral link: www.dropbox.com/referral. Copy the link (example link: <strong>https://db.tt/xYxYzyXy</strong>) and send it via eBay message. </p>
            </label>
            <input id='faq-e' type='checkbox'>
            <label for='faq-e'>
                <p class="faq-heading">Can I split the purchased space between several accounts?</p>
                <div class='faq-arrow'></div>
                <p class="faq-text">Yes, you can! Just send me all the referral links during the checkout process, including a short note, what account should receive which amount of space.</p>
            </label>
        </div>
        <!-- CODEPEN -->
    </section>
    <!-- END FAQS -->
</div>


<?php
get_footer();
?>