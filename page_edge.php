<?php include 'edge-page/edge-header.php'; ?>

<?php /* Template Name: EDGE Template */ ?>
<!-- DISSAPPEARING MENU -->
<!-- <div class='main-tool-bar'></div> -->
<?php
// get_header();
?>


<!-- CSS -->
<!-- <link rel="stylesheet" type="text/css" href="https://skybox.gg/wp-content/themes/hello-elementor-child/edge-page/child-theme.min.css"> -->
<!-- JS -->
<!-- <script type='text/javascript' src='https://skybox.gg/wp-content/themes/hello-elementor-child/edge-page/child-theme.min'></script> -->


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
        <div class="hero-logos">
            <div class="lhs-logos" data-aos="fade-down">
                <?php
                $lhs_logos = get_field('lhs_logos');
                // var_dump($lhs_logos);
                if ($lhs_logos) {
                    foreach ($lhs_logos as $lhs) {
                        echo '<img src="' . $lhs['logo'] . '"/>';
                    }
                }
                ?>
            </div>
            <div class="rhs-logos" data-aos="fade-down">
                <?php
                $rhs_logos = get_field('rhs_logos');
                if ($rhs_logos) {
                    foreach ($rhs_logos as $rhs) {
                        echo '<img src="' . $rhs['logo'] . '"/>';
                    }
                }
                ?>
            </div>


        </div>
        <!-- <h1><?php // echo $title; 
                    ?></h1> -->
        <h1 class="text-h1">Track your CS2 Stats like the Pros</h1>
        <p class="p2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

        <a href="#" class="btn btn--solid"><?php echo $button['title']; ?></a>
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
            <video controls class="radius green-shadow" width="100%">
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
            <h2 class="text-h1"><?php echo get_field('tested-title'); ?></h2>

            <?php
            $top_row = get_field('top_row_of_videos');
            if ($top_row) {
                echo '<div class="top-row">';
                foreach ($top_row as $row) {
            ?>
                    <div class="grid-item">
                        <video controls class="" width="100%">
                            <source src="<?php echo $row['video']; ?>" type="video/mp4">
                            <source src="<?php echo $row['video']; ?>" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                        <div>
                            <span class="font-signs text-h4"><?php echo $row['nametag']; ?></span>
                            <span class="font-signs text-h4"><svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_169_54)">
                                        <path d="M7.5 8.68311C9.22589 8.68311 10.625 7.284 10.625 5.55811C10.625 3.83222 9.22589 2.43311 7.5 2.43311C5.77411 2.43311 4.375 3.83222 4.375 5.55811C4.375 7.284 5.77411 8.68311 7.5 8.68311Z" fill="#586373" stroke="#586373" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.5 14.5165C12.5 13.1904 11.9732 11.9186 11.0355 10.9809C10.0979 10.0433 8.82608 9.51648 7.5 9.51648C6.17392 9.51648 4.90215 10.0433 3.96447 10.9809C3.02678 11.9186 2.5 13.1904 2.5 14.5165" fill="#586373" />
                                        <path d="M12.5 14.5165C12.5 13.1904 11.9732 11.9186 11.0355 10.9809C10.0979 10.0433 8.82608 9.51648 7.5 9.51648C6.17392 9.51648 4.90215 10.0433 3.96447 10.9809C3.02678 11.9186 2.5 13.1904 2.5 14.5165H12.5Z" stroke="#586373" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_169_54">
                                            <rect width="15" height="15" fill="white" transform="translate(0 0.558105)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <?php echo $row['followers']; ?></span>
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
                        <video controls class="" width="100%">
                            <source src="<?php echo $bottomrow['video']; ?>" type="video/mp4">
                            <source src="<?php echo $bottomrow['video']; ?>" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                        <div>
                            <span class="font-signs text-h4"><?php echo $bottomrow['nametag']; ?></span>
                            <span class="font-signs text-h4"><svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_169_54)">
                                        <path d="M7.5 8.68311C9.22589 8.68311 10.625 7.284 10.625 5.55811C10.625 3.83222 9.22589 2.43311 7.5 2.43311C5.77411 2.43311 4.375 3.83222 4.375 5.55811C4.375 7.284 5.77411 8.68311 7.5 8.68311Z" fill="#586373" stroke="#586373" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M12.5 14.5165C12.5 13.1904 11.9732 11.9186 11.0355 10.9809C10.0979 10.0433 8.82608 9.51648 7.5 9.51648C6.17392 9.51648 4.90215 10.0433 3.96447 10.9809C3.02678 11.9186 2.5 13.1904 2.5 14.5165" fill="#586373" />
                                        <path d="M12.5 14.5165C12.5 13.1904 11.9732 11.9186 11.0355 10.9809C10.0979 10.0433 8.82608 9.51648 7.5 9.51648C6.17392 9.51648 4.90215 10.0433 3.96447 10.9809C3.02678 11.9186 2.5 13.1904 2.5 14.5165H12.5Z" stroke="#586373" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_169_54">
                                            <rect width="15" height="15" fill="white" transform="translate(0 0.558105)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <?php echo $bottomrow['followers']; ?></span>
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
        <span class="stat-gradient"></span>
        <div class="stats">
            <?php
            $stats = get_field('statistics');
            if ($stats) {
                foreach ($stats as $stat) {
                    echo '<div class="stat">
                <span class="font-signs text-h2">' . $stat['stat'] . '</span>
                <p class="p2">' . $stat['description'] . '</p>
            </div>';
                }
            }
            ?>
        </div>
        <h4 class="text-h4">Lorum ipsum dolar sit amet. Lorum ipsum dolar sit amet.<?php //echo get_field(''); 
                                                                                    ?></h4>
        <div class="logo-container">


            <!-- <div class="slider">
                <div class="slide-track"> -->
            <?php
            // $logos = get_field('logos');
            // if ($logos) {
            //     foreach ($logos as $logo) {
            //         echo '<div class="slide"><img src="' . $logo['logo']['url'] . '" alt="' . $logo['logo']['alt'] . '" /></div>';
            //     }
            // }
            ?>
            <!-- </div>
            </div> -->

            <!-- <div class="marquee">
                <ul class="marquee-content"> -->
            <?php
            // $logos = get_field('logos');
            // if ($logos) {
            //     foreach ($logos as $logo) {
            //         echo '<li><img src="' . $logo['logo']['url'] . '" alt="' . $logo['logo']['alt'] . '" /></li>';
            //     }
            // }
            ?>
            <!-- </ul>
            </div> -->

            <div class="logo-carousel">
                <div class="slide-track">
                    <!-- <div class="slide">
                        <img src="https://cdn.freebiesupply.com/logos/thumbs/2x/mcdonalds-black-logo.png" alt="">
                    </div> -->

                    <?php
                    $logos = get_field('logos');
                    if ($logos) {
                        foreach ($logos as $logo) {
                            echo '<div class="slide"><img src="' . $logo['logo']['url'] . '" alt="' . $logo['logo']['alt'] . '" /></div>';
                        }
                    }
                    ?>

                </div>
            </div>


            <!-- Slider main container -->
            <div class="swiper trusted-by-swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php
                    $logos = get_field('logos');
                    if ($logos) {
                        foreach ($logos as $logo) {
                            echo '<div class="swiper-slide"><img src="' . $logo['logo']['url'] . '" alt="' . $logo['logo']['alt'] . '" /> </div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- END STAT CONTAINER -->


    <!-- IMPROVE YOUR GAMEPLAY -->
    <!-- 
        INTERACTION

 -->
    <section id="improve-your-gameplay">
        <div data-aos="fade-up" class="title-section">
            <h6 class="text-h6"><?php echo get_field('title_section')['small_text']; ?></h6>
            <h2 class="text-h1"><?php echo get_field('title_section')['title']; ?></h2>
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
                        <video controls class="radius" width="100%">
                            <source src="<?php echo $row['video']['url']; ?>" type="video/mp4">
                            <source src="<?php echo $row['video']['url']; ?>" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div data-aos="fade-<?php echo ($l % 2 == 0) ? 'left' : 'right'; ?>" class="title-section">
                        <h6 class="text-h6"><?php echo $row['small_text']; ?></h6>
                        <h2 class="text-h1"><?php echo $row['title']; ?></h2>
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
            <h6 class="text-h6"><?php echo get_field('pricing_title')['small_text']; ?></h6>
            <h2 class="text-h1">start from today</h2>
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
                        <h2 class="text-h3"><?php echo $tier['name']; ?></h2>
                        <p class="price team month"><span class="font-signs text-h3">€<?php echo $tier['team_price_per_month']; ?></span> /month</p>
                        <p class="price team year"><span class="font-signs text-h3">€<?php echo $tier['team_price_per_year']; ?></span> /year</p>
                        <p class="price individual month"><span class="font-signs text-h3">€<?php echo $tier['individual_price_per_month']; ?></span> /month</p>
                        <p class="price individual year"><span class="font-signs text-h3">€<?php echo $tier['individual_price_per_year']; ?></span> /year</p>

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

                        <a href="#" class="btn btn--solid-grey">
                            <?php echo $tier['link']['url']; ?>
                            <?php echo $tier['link']['title']; ?>
                        </a>
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
        <h6 class="text-h6"><?php echo get_field('testimonials_title')['small_text']; ?></h6>
        <h2 class="text-h1">Take their word for it</h2>
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
    <div class="swiper testimonials">

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
                                <h3 class="text-h3"><?php echo $testimonial['name']; ?></h3>
                                <h5 class="text-h4"><?php echo $testimonial['company']; ?></h5>
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
    <section id="cta">
        <div class="cta" data-aos="fade-up">
            <div class="copy">
                <h2 class="text-h1"><?php echo get_field('cta_title_section')['title']; ?></h2>
                <p><?php echo get_field('cta_title_section')['description']; ?></p>
                <a href="#" class="btn btn--solid btn--solid-green"><?php echo get_field('cta_title_section')['button']['url']; ?>
                    <?php echo get_field('cta_title_section')['button']['title']; ?>
                </a>
            </div>
            <img class="green-shadow radius" src="<?php echo get_field('cta_image')['url']; ?>" alt="<?php echo get_field('cta_image')['alt']; ?>">
        </div>
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
            <h6 class="text-h6"><?php echo get_field('faqs_title')['small_text']; ?></h6>
            <h2 class="text-h1">Questions</h2>
            <!-- <h2><?php //echo get_field('faqs_title')['title']; 
                        ?></h2> -->
            <p><?php echo get_field('faqs_title')['description']; ?></p>
        </div>
        <!-- NEW CODEPEN -->
        <div class="faq-container">

            <div class="faq-content radius">

                <?php
                $faqs = get_field('faqs');
                if ($faqs) {
                    $j = 0;
                    foreach ($faqs as $faq) {
                ?>
                        <div class="faq-question">
                            <input id="q<?php echo $j; ?>" type="checkbox" class="panel">
                            <div class="plus">+</div>
                            <label for="q<?php echo $j; ?>" class="panel-title p2"><?php echo $faq['question']; ?></label>
                            <div class="panel-content">
                                <p class="p2"><?php echo $faq['answer']; ?></p>
                            </div>
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

<?php include 'edge-page/edge-footer.php'; ?>