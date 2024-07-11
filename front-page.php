<!-- DISSAPPEARING MENU -->
<!-- <div class='main-tool-bar'></div> -->
<?php
get_header();
?>

<!-- <div class="green-shadow radius fade-up" data-aos="fade-up"></div>
<div class="fade-left" data-aos="fade-left"></div>
<div class="fade-right" data-aos="fade-right"></div> -->

<!-- INTERACTIONS -->
<!-- 
 FADE IN UP AND LEFT RIGHT
 SMOOTHLY  
 
 BTNS
 HOVER, GRADIENT FOLLOW CURSOR
 -->

<!-- HERO -->
<!-- INTERACTIONS -->
<!-- 
 LOGOS
 ENTER FROM TOP, SLOW JIGGLE/WOBBLE ON HOVER
 VIDEO
 ZOOM ON HOVER, FADE IN
 -->

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
        <div class="video-container">
            <span></span>
            <video class="radius green-shadow" width="100%">
                <source src="<?php echo $hero_video['url']; ?>" type="video/mp4">
                <source src="<?php echo $hero_video['url']; ?>" type="video/ogg">
                Your browser does not support the video tag.
            </video>
        </div>
    </section>
    <!-- END HERO -->


    <!-- TESTED AND USED -->
    <section>
        <div id="tested">
            <h2><?php echo get_field('tested-title'); ?></h2>

            <?php
            $top_row = get_field('top_row_of_videos');
            if ($top_row) {
                echo '<div class="top-row">';
                foreach ($top_row as $row) {
            ?>
                    <div class="grid-item">
                        <video class="" width="100%">
                            <source src="<?php echo $row['video']['url']; ?>" type="video/mp4">
                            <source src="<?php echo $row['video']['url']; ?>" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                        <div>
                            <span class="font-signs"><?php echo $row['nametag']; ?></span>
                            <span class="font-signs"><?php echo $row['followers']; ?></span>
                        </div>
                    </div>
            <?php
                }
                echo '</div>';
            } ?>

            <?php
            $bottom_row = get_field('bottom_row_of_videos');
            if ($bottom_row) {
                echo '<div class="bottom-row">';
                foreach ($bottom_row as $bottomrow) {
            ?>
                    <div class="grid-item">
                        <video class="" width="100%">
                            <source src="<?php echo $bottomrow['video']['url']; ?>" type="video/mp4">
                            <source src="<?php echo $bottomrow['video']['url']; ?>" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                        <div>
                            <span class="font-signs"><?php echo $bottomrow['nametag']; ?></span>
                            <span class="font-signs"><?php echo $bottomrow['followers']; ?></span>
                        </div>
                    </div>
            <?php
                }
                echo '</div>';
            } ?>

        </div>
    </section>
    <!-- END TESTED AND USED -->


    <!-- STAT CONTAINER -->
    <!-- 
        INTERACTION
 LOGOS
 CONTINUOUS SWIPER SCROLL

 HOVER BG FOLLOW GRADIENT WHITE
 -->
    <section id="stat-container" class="radius">
        <div class="stats">
            <?php
            $stats = get_field('statistics');
            if ($stats) {
                foreach ($stats as $stat) {
                    echo '<div class="stat">
                <span class="font-signs">' . $stat['stat'] . '</span>
                <p>' . $stat['description'] . '</p>
            </div>';
                }
            }
            ?>
        </div>
        <h6>Lorum ipsum dolar sit amet. Lorum ipsum dolar sit amet.<?php //echo get_field(''); 
                                                                    ?></h6>
        <div class="logo-container">
            <?php
            $logos = get_field('logos');
            if ($logos) {
                foreach ($logos as $logo) {
                    echo '<img src="' . $logo['logo']['url'] . '" alt="' . $logo['logo']['alt'] . '" />';
                }
            }
            ?>
        </div>
    </section>
    <!-- END STAT CONTAINER -->


    <!-- IMPROVE YOUR GAMEPLAY -->
    <!-- 
        INTERACTION

 -->
    <section id="improve-your-gameplay">
        <div data-aos="fade-up" class="title-section">
            <h6><?php echo get_field('title_section')['small_text']; ?></h6>
            <h2><?php echo get_field('title_section')['title']; ?></h2>
            <p><?php echo get_field('title_section')['description']; ?></p>
        </div>

        <?php $image_buttons = get_field('image_buttons');
        if ($image_buttons) {

            $i = 0;

            echo '<div class="tab-btns">';
            $k = 0;
            foreach ($image_buttons as $tab) {


                $tab_title = $tab['title'];
                $tab_title = strtolower($tab_title);
                $tab_title = str_replace(' ', '_', $tab_title);
                $tab_title = preg_replace('/[^a-z0-9_]/', '', $tab_title);

                echo '<button class="' . $tab_title . ' image-toggle btn btn--outline-grey-gradient';
                if ($k == 0) {
                    echo ' active';
                }
                echo '">' . $tab['title'] . '</button>';
                $k++;
            }
            echo '</div>';
            foreach ($image_buttons as $tab_image) {
                $tab_title = $tab_image['title'];
                $tab_title = strtolower($tab_title);
                $tab_title = str_replace(' ', '_', $tab_title);
                $tab_title = preg_replace('/[^a-z0-9_]/', '', $tab_title);

                echo '<img id="' . $tab_title . '" class="';
                if ($i == 0) {
                    echo 'active ';
                }
                echo 'tab-image green-shadow radius" src="' .  $tab_image["image"]["url"] . '" alt="' . $tab_image['image']['alt'] . '"/>';
                $i++;
            }
        }

        ?>
    </section>
    <!-- END IMPROVE YOUR GAMEPLAY -->

    <!-- ALTERNATING VIDEO COLUMNS -->
    <section>
        <?php
        $alternating_videos = get_field('alternating_videos');
        if ($alternating_videos) {
            $l = 0;
            foreach ($alternating_videos as $row) {
        ?>
                <div class="alternating-video-column">

                    <div data-aos="fade-<?php echo ($l % 2 == 0) ? 'right' : 'left'; ?>">
                        <video class="radius" width="100%">
                            <source src="<?php echo $row['video']['url']; ?>" type="video/mp4">
                            <source src="<?php echo $row['video']['url']; ?>" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div data-aos="fade-<?php echo ($l % 2 == 0) ? 'left' : 'right'; ?>" class="title-section">
                        <h6><?php echo $row['small_text']; ?></h6>
                        <h2><?php echo $row['title']; ?></h2>
                        <p><?php echo $row['description']; ?></p>
                    </div>
                </div>

        <?php
                $l++;
            }
        }
        ?>
    </section>
    <!-- END ALTERNATING VIDEO COLUMNS -->

</div>

<!-- GRADIENT -->
<div class="bg-gradient bg-gradient--top-left"></div>

<div class="container">
    <!-- PRICING -->
    <section id="pricing">

        <div data-aos="fade-up" class="title-section">
            <h6><?php echo get_field('pricing_title')['small_text']; ?></h6>
            <h2>start from today</h2>
            <p><?php echo get_field('pricing_title')['description']; ?></p>
        </div>

        <!-- TOGGLE TEAM INDIVIDUAL -->
        <div class="team-toggle-container">
            <span id="team" class="active">Team</span>
            <span id="individual">Individual</span>
        </div>

        <div class="tiers-container">
            <?php
            $tiers = get_field('tiers');
            if ($tiers) {
                foreach ($tiers as $tier) {
            ?>
                    <div class="tier radius">
                        <h2><?php echo $tier['name']; ?></h2>
                        <p class="price team month"><span class="font-signs">€<?php echo $tier['team_price_per_month']; ?></span> /month</p>
                        <p class="price team year"><span class="font-signs">€<?php echo $tier['team_price_per_year']; ?></span> /year</p>
                        <p class="price individual month"><span class="font-signs">€<?php echo $tier['individual_price_per_month']; ?></span> /month</p>
                        <p class="price individual year"><span class="font-signs">€<?php echo $tier['individual_price_per_year']; ?></span> /year</p>

                        <!-- <div class="period-toggle-container">
                            <span id="yearly" class="active period-toggle">Billed Yearly</span>
                            <span id="monthly" class="period-toggle">Individual</span>
                        </div> -->
                        <div class="period-toggle-container">
                            <label class="switch">
                                <input class="annual-switch" type="checkbox">
                                <span class="slider round"></span>
                            </label>
                        </div>

                        <ul>
                            <?php
                            foreach ($tier['package_includes'] as $item) {
                                echo '<li>' . $item['item'] . '</li>';
                            } ?>
                        </ul>

                        <button class="btn btn--solid-grey">
                            <?php echo $tier['link']['url']; ?>
                            <?php echo $tier['link']['title']; ?>
                        </button>
                    </div>
            <?php
                }
            }
            ?>
        </div>
        <p class="all-features">See all features UPWARDS CHEVRON</p>
    </section>
    <!-- END PRICING -->

    <!-- TESTIMONIALS -->
    <!-- 
        INTERACTION
DRAGGABLE WITH ARROW
CLICK MOVE ONLY 1 SLIDE
 -->
</div>
<section id="testimonials">
    <div data-aos="fade-up" class="title-section">
        <h6><?php echo get_field('testimonials_title')['small_text']; ?></h6>
        <h2>Take their word for it</h2>
        <!-- <h2><?php //echo get_field('testimonials_title')['title']; 
                    ?></h2> -->
        <p><?php echo get_field('testimonials_title')['description']; ?></p>
    </div>


    <!-- SWIPER -->
    <div class="container swiper-buttons-container">
        <div class="swiper-buttons">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    <div class="swiper">



        <div class="swiper-wrapper">
            <?php

            $testimonials = get_field('testimonials');
            if ($testimonials) {
                foreach ($testimonials as $testimonial) {
            ?>
                    <div class="swiper-slide testimonial radius">
                        <div>
                            <div class="img-container">
                                <img src="<?php echo $testimonial['company_logo']['url']; ?>" alt="<?php echo $testimonial['company_logo']['alt']; ?>">
                            </div>
                            <div class="details">
                                <h3><?php echo $testimonial['name']; ?></h3>
                                <h5><?php echo $testimonial['company']; ?></h5>
                            </div>
                        </div>
                        <p><?php echo $testimonial['testimonial']; ?></p>
                    </div>
            <?php
                }
            }
            ?>
        </div>


    </div>



</section>


<!-- END TESTIMONIALS -->

<div class="container">

    <!-- CTA -->
    <section data-aos="fade-up" id="cta">
        <div>

            <h2><?php echo get_field('cta_title_section')['title']; ?></h2>
            <p><?php echo get_field('cta_title_section')['description']; ?></p>
            <button class="btn btn--solid btn--solid-green"><?php echo get_field('cta_title_section')['button']['url']; ?>
                <?php echo get_field('cta_title_section')['button']['title']; ?>
            </button>
        </div>
        <img src="<?php echo get_field('cta_image')['url']; ?>" alt="<?php echo get_field('cta_image')['alt']; ?>">
    </section>
    <!-- END CTA -->
    <!-- </div> -->

    <!-- GRADIENT -->
    <!-- <div class="bg-gradient bg-gradient--bottom-right"></div> -->

    <!-- <div class="container"> -->
    <!-- FAQS -->
    <!-- 
        INTERACTION
+ SPIN INTO CROSS
 -->
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

            <?php

            ?>
            <!-- <input id='faq-a' type='checkbox'>
            <label for='faq-a'>
                <p class="faq-heading">Is this Dropbox upgrade safe?</p>
                <div class='faq-arrow'></div>
                <p class="faq-text">It is completely safe and totally legal! There will is no record of this process to your shared Dropbox users.</p>
            </label> -->

        </div>
        <!-- CODEPEN -->


        <!-- NEW CODEPEN -->
        <div class="codepen">
            <div class="faq-header">Frequently Asked Questions</div>

            <div class="faq-content">

                <?php
                $faqs = get_field('faqs');
                if ($faqs) {
                    $j = 0;
                    foreach ($faqs as $faq) {
                ?>
                        <div class="faq-question">
                            <input id="q<?php echo $j; ?>" type="checkbox" class="panel">
                            <div class="plus">+</div>
                            <label for="q<?php echo $j; ?>" class="panel-title"><?php echo $faq['question']; ?></label>
                            <div class="panel-content"><?php echo $faq['answer']; ?></div>
                        </div>
                <?php
                        $j++;
                    }
                }
                ?>





            </div>
        </div>
        <!-- END NEW CODEPEN -->


    </section>
    <!-- END FAQS -->
</div>

<!-- 
 FOOTER
INTERACTION
 
HOVER GREEN
ON CLICK, STAY GREEN FOR A SEOND THEN REDIRECT
 -->

<?php
get_footer();
?>