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
            <h2><?php echo get_field('tested-title'); ?></h2>

            <?php
            $top_row = get_field('top_row_of_videos');
            if ($top_row) {
                echo '<div class="top-row">';
                foreach ($top_row as $row) {
            ?>
                    <div class="grid-item">
                        <video class="radius green-shadow" width="100%">
                            <source src="<?php echo $row['video']['url']; ?>" type="video/mp4">
                            <source src="<?php echo $row['video']['url']; ?>" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                        <div>
                            <span><?php echo $row['nametag']; ?>@ESL</span>
                            <span><?php echo $row['followers']; ?>ICON 3.2M</span>
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
                        <video class="radius green-shadow" width="100%">
                            <source src="<?php echo $bottomrow['video']['url']; ?>" type="video/mp4">
                            <source src="<?php echo $bottomrow['video']['url']; ?>" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                        <div>
                            <span><?php echo $bottomrow['nametag']; ?>@ESL</span>
                            <span><?php echo $bottomrow['followers']; ?>ICON 3.2M</span>
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
    <section id="stat-container">
        <div class="stats">
            <?php
            $stats = get_field('statistics');
            if ($stats) {
                foreach ($stats as $stat) {
                    echo '<div class="stat">
                <span>' . $stat['stat'] . '</span>
                <p>' . $stat['description'] . '</p>
            </div>';
                }
            }
            ?>
        </div>
        <p><?php echo get_field('Lorum ipsum dolar sit amet. Lorum ipsum dolar sit amet.'); ?></p>
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
    <section>
        <div data-aos="fade-up" class="title-section">



            <h6><?php echo get_field('title_section')['small_text']; ?></h6>
            <h2><?php echo get_field('title_section')['title']; ?></h2>
            <p><?php echo get_field('title_section')['description']; ?></p>
        </div>

        <img class="radius green-shadow" src="<?php echo $hero_img['url']; ?>">

        <?php $image_buttons = get_field('image_buttons');
        if ($image_buttons) {



            $i = 0;
            // $len = count($image_buttons);
            // foreach ($array as $item) {
            //     if ($i == 0
            //     ) {
            //         // first
            //     } else if ($i == $len - 1) {
            //         // last
            //     }
            //     // …
            //     $i++;
            // }




            echo '<div class="tab-btns">';
            $k = 0;
            foreach ($image_buttons as $tab) {


                $tab_title = $tab['title'];
                $tab_title = strtolower($tab_title);
                $tab_title = str_replace(' ', '_', $tab_title);
                $tab_title = preg_replace('/[^a-z0-9_]/', '', $tab_title);

                echo '<button class="' . $tab_title . ' image-toggle btn btn--outline';
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
                echo 'tab-image green-gradient radius" src="' .  $tab_image["image"]["url"] . '" alt="' . $tab_image['image']['alt'] . '"/>';
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
            foreach ($alternating_videos as $row) {
        ?>
                <div id="alternating-video-column">
                    <div>
                        <video class="radius" width="100%">
                            <source src="<?php echo $row['video']['url']; ?>" type="video/mp4">
                            <source src="<?php echo $row['video']['url']; ?>" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <div data-aos="fade-up" class="title-section">
                        <h6><?php echo $row['small_text']; ?></h6>
                        <h2><?php echo $row['title']; ?></h2>
                        <p><?php echo $row['description']; ?></p>
                    </div>
                </div>
        <?php
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

        <!-- toggle -->
        <div class="pricing-toggle-container">
            <span id="team" class="active pricing-toggle">Team</span>
            <span id="individual" class="pricing-toggle">Individual</span>
        </div>


        <div data-aos="fade-up" class="title-section">
            <h6><?php echo get_field('pricing_title')['small_text']; ?></h6>
            <h2>start from today</h2>
            <p><?php echo get_field('pricing_title')['description']; ?></p>
        </div>

        <div class="tiers-container">
            <?php
            $tiers = get_field('tiers');
            if ($tiers) {
                foreach ($tiers as $tier) {
            ?>
                    <div class="tier radius">
                        <h3 class="price team month"><?php echo $tier['team_price_per_month']; ?></h3>
                        <h3 class="price team year"><?php echo $tier['team_price_per_year']; ?></h3>
                        <h3 class="price individual month"><?php echo $tier['individual_price_per_month']; ?></h3>
                        <h3 class="price individual year"><?php echo $tier['individual_price_per_year']; ?></h3>


                        <ul>
                            <?php
                            foreach ($tier['package_includes'] as $item) {
                                echo '<li>' . $item['item'] . '</li>';
                            } ?>
                        </ul>

                        <button class="btn btn--solid btn--solid-green">
                            <?php echo $tier['link']['url']; ?>
                            <?php echo $tier['link']['title']; ?>
                        </button>
                    </div>
            <?php
                }
            }
            ?>
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


        <!-- SWIPER -->
        <div class="swiper">

            <div class="swiper-wrapper">
                <?php

                $testimonials = get_field('testimonials');
                if ($testimonials) {
                    foreach ($testimonials as $testimonial) {
                ?>
                        <div class="swiper-slide testimonial radius">
                            <div>
                                <img src="<?php echo $testimonial['company_logo']['url']; ?>" alt="<?php echo $testimonial['company_logo']['alt']; ?>">
                                <div>
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

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>



    </section>


    <!-- END TESTIMONIALS -->



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


<?php
get_footer();
?>