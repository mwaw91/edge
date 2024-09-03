<!-- DONE -->
<!-- PLAY BTN SIZING -->
<!-- SPACING -->

<!-- TODO -->
<!-- TYPOGRAPHY -->
<!-- MOBILE SLIDER SPACING -->
<!-- META INFORMATION -->
<!-- BACK TO TOP BTN TO #page -->
<!-- CHECK FOR BUGS ON NAV ANCHOR LINKS -->
<!--  -->

<!-- CHANGE VIDEOS TO EMBED LINKS WITH CONTROL? -->

</div>
<!-- <div class="container"> -->
<section id="hero" class="space--margin--bottom">

    <?php
    $title = get_field('title');
    $subtitle = get_field('subtitle');
    $button = get_field('button');
    $hero_video = get_field('hero-video');
    ?>
    <div class="hero-logos">
        <div class="lhs-logos">
            <?php
            $lhs_logos = get_field('lhs_logos');
            if ($lhs_logos) {
                $lhs_delay = 50;
                foreach ($lhs_logos as $lhs) {
                    echo '<div class="lhs-img-container" data-aos="fade-down" data-aos-duration="500" data-aos-delay="' . $lhs_delay . '"><img src="' . $lhs['logo'] . '"/></div>';
                    $lhs_delay += 50;
                }
            }
            ?>
        </div>
        <div class="rhs-logos">
            <?php
            $rhs_logos = get_field('rhs_logos');
            if ($rhs_logos) {
                $rhs_delay = 50;
                foreach ($rhs_logos as $rhs) {
                    echo '<div class="rhs-img-container" data-aos="fade-down" data-aos-duration="500" data-aos-delay="' . $rhs_delay . '"><img src="' . $rhs['logo'] . '"/></div>';
                    $rhs_delay += 50;
                }
            }
            ?>
        </div>


    </div>

    <h1 class="text-h1" data-aos-delay="100" data-aos="fade-up"><?php echo $title; ?></h1>
    <p class="p2" data-aos-delay="150" data-aos="fade-up"><?php echo $subtitle; ?></p>

    <div class="hero-btn-container" data-aos="fade-up" data-aos-delay="200">

        <?php
        $rhs_logos = get_field('rhs_logos');
        if ($rhs_logos) {
            echo '<div class="hide-desktop">';
            echo '<img class="" data-aos="fade-down" data-aos-duration="500" src="' . $rhs_logos[0]['logo'] . '"/>';
            echo '</div>';
        }
        ?>

        <a href="<?php echo $button['url']; ?>" class="btn btn--solid"><?php echo $button['title']; ?></a>

        <?php
        if ($rhs_logos) {
            echo '<div class="hide-desktop">';
            echo '<img class="" data-aos="fade-down" data-aos-duration="500" src="' . $rhs_logos[1]['logo'] . '"/>';
            echo '</div>';
        }
        ?>

    </div>

    <div data-aos-delay="250" class="video-section container" data-aos="zoom-in">
        <span data-aos-delay="250" data-aos-duration="1500" data-aos="fade-up"></span>
        <!-- VIDEO -->
        <div class="video-container radius green-shadow">
            <button id="playButton" class="play-button"><svg width="94" height="141" viewBox="0 0 94 141" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_196_307)">
                        <path d="M84 70.5L9.99999 131L10 10L84 70.5Z" fill="white" />
                    </g>
                    <defs>
                        <filter id="filter0_d_196_307" x="0" y="0" width="94" height="141" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset />
                            <feGaussianBlur stdDeviation="5" />
                            <feComposite in2="hardAlpha" operator="out" />
                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_196_307" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_196_307" result="shape" />
                        </filter>
                    </defs>
                </svg>
            </button>
            <video poster="<?php echo get_field('video_poster_image'); ?>" preload="auto" class="feature-video" src="<?php echo $hero_video['url']; ?>" type="video/mp4" webkit-playsinline playsinline>
                Your browser does not support the video tag.
            </video>
        </div>
        <!-- END VIDEO -->
    </div>

    <!-- BACK TO TOP -->
    <div class="back-to-top-container">
        <a class="back-to-top" href="#masthead">
            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.5 6.37305L6 1.87305L1.5 6.37305" stroke="#BABABA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
    </div>

</section>
<!-- END HERO -->
<div class="container">
    <!-- TESTED AND USED -->
    <section>
        <div id="tested">
            <h2 class="text-h1" data-aos="fade-up"><?php echo get_field('tested-title'); ?></h2>

            <?php
            $top_row = get_field('top_row_of_videos');
            if ($top_row) {
                echo '<div class="top-row" data-aos="fade-up">';
                foreach ($top_row as $row) {
            ?>
                    <div class="grid-item">
                        <!--  START NEW VIDEO -->
                        <?php
                        if (strlen($row['video']) > 0) {
                        ?>
                            <div class="video-container">
                                <!-- <button id="playButton" class="play-button"><svg width="94" height="141" viewBox="0 0 94 141" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g filter="url(#filter0_d_196_307)">
                                            <path d="M84 70.5L9.99999 131L10 10L84 70.5Z" fill="white" />
                                        </g>
                                        <defs>
                                            <filter id="filter0_d_196_307" x="0" y="0" width="94" height="141" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                <feOffset />
                                                <feGaussianBlur stdDeviation="5" />
                                                <feComposite in2="hardAlpha" operator="out" />
                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0" />
                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_196_307" />
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_196_307" result="shape" />
                                            </filter>
                                        </defs>
                                    </svg>
                                </button> -->

                                <video controls poster="<?php echo $row['video_poster_image']; ?>" preload="auto" class="feature-video" src="<?php echo $row['video']; ?>" type="video/mp4" webkit-playsinline playsinline>
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="video-container"><img loading="lazy" src="<?php echo $row['image']['url']; ?>"></div>
                        <?php
                        }
                        ?>

                        <!-- END VIDEO -->
                        <div class="detail">
                            <a href="<?php echo $row['video_link']; ?>" target="_blank">
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
                            </a>
                        </div>
                    </div>
            <?php
                }
                echo '</div>';
            } ?>

            <?php
            $bottom_row = get_field('bottom_row_of_videos');
            if ($bottom_row) {
                echo '<div class="bottom-row" data-aos="fade-up">';
                foreach ($bottom_row as $bottomrow) {
            ?>
                    <div class="grid-item">
                        <!--  START NEW VIDEO -->
                        <?php
                        if (strlen($bottomrow['video']) > 0) {
                        ?>
                            <div class="video-container">
                                <!-- <button id="playButton" class="play-button"><svg width="94" height="141" viewBox="0 0 94 141" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g filter="url(#filter0_d_196_307)">
                                            <path d="M84 70.5L9.99999 131L10 10L84 70.5Z" fill="white" />
                                        </g>
                                        <defs>
                                            <filter id="filter0_d_196_307" x="0" y="0" width="94" height="141" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                <feOffset />
                                                <feGaussianBlur stdDeviation="5" />
                                                <feComposite in2="hardAlpha" operator="out" />
                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0" />
                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_196_307" />
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_196_307" result="shape" />
                                            </filter>
                                        </defs>
                                    </svg>
                                </button> -->
                                <video controls poster="<?php echo $bottomrow['video_poster_image']; ?>" preload="auto" class="feature-video" src="<?php echo $bottomrow['video']; ?>" type="video/mp4" webkit-playsinline playsinline>
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="video-container"><img loading="lazy" src="<?php echo $bottomrow['image']['url']; ?>"></div>
                        <?php
                        }
                        ?>
                        <!-- END VIDEO -->
                        <div class="detail">
                            <a href="<?php echo $bottomrow['video_link']; ?>" target="_blank"> <span class="font-signs text-h4"><?php echo $bottomrow['nametag']; ?></span>
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
                            </a>
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
    <section id="stat-container" class="radius space--margin--top" data-aos="fade-up">
        <div class="stats">
            <?php
            $stats = get_field('statistics');
            if ($stats) {
                foreach ($stats as $stat) {
                    echo '<div class="stat">
                <span class="font-signs">' . $stat['stat'] . '</span>
                <p class="p2">' . $stat['description'] . '</p>
            </div>';
                }
            }
            ?>
        </div>
        <h4 class="text-h4"><?php echo get_field('paragraph'); ?></h4>
        <!-- <div class="logo-container">
            <div class="logo-carousel">
                <div class="slide-track"> -->
        <?php
        // $logos = get_field('logos');
        // if ($logos) {
        //     foreach ($logos as $logo) {
        //         echo '<div class="slide"><img loading="eager" src="' . $logo['logo']['url'] . '" alt="' . $logo['logo']['alt'] . '" /></div>';
        //     }
        // foreach ($logos as $logo) {
        //     echo '<div class="slide"><img src="' . $logo['logo']['url'] . '" alt="' . $logo['logo']['alt'] . '" /></div>';
        // }
        // }
        ?>
        <!-- </div>
            </div>
        </div> -->

        <!-- LOGO TICKER -->
        <div class="logo-ticker-container">
            <div class="track">
                <?php
                $logos = get_field('logos');
                if ($logos) {
                    foreach ($logos as $logo) {
                        echo '<div class="track-item"><img loading="eager" src="' . $logo['logo']['url'] . '" alt="' . $logo['logo']['alt'] . '" /></div>';
                    }
                }
                ?>
            </div>
            <div class="track">
                <?php
                $logos = get_field('logos');
                if ($logos) {
                    foreach ($logos as $logo) {
                        echo '<div class="track-item"><img loading="eager" src="' . $logo['logo']['url'] . '" alt="' . $logo['logo']['alt'] . '" /></div>';
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <!-- END STAT CONTAINER -->

    <!-- IMPROVE YOUR GAMEPLAY -->
    <section id="improve-your-gameplay">
        <div data-aos="fade-up" class="title-section">
            <h6 class="text-h6"><?php echo get_field('title_section')['small_text']; ?></h6>
            <h2 class="text-h1"><?php echo get_field('title_section')['title']; ?></h2>
            <p class="p2"><?php echo get_field('title_section')['description']; ?></p>
        </div>

        <?php $image_buttons = get_field('image_buttons');
        if ($image_buttons) {

            $i = 0;

            echo '<div class="tab-btns">';
            $k = 0;
            $tab_btn_delay = 100;
            foreach ($image_buttons as $tab) {


                $tab_title = $tab['title'];
                $tab_title = strtolower($tab_title);
                $tab_title = str_replace(' ', '_', $tab_title);
                $tab_title = preg_replace('/[^a-z0-9_]/', '', $tab_title);

                echo '<div class="tab-btn-container"><button data-aos="fade-up" data-aos-delay="' . $tab_btn_delay . '" class="' . $tab_title . ' image-toggle btn btn--outline-grey-gradient';
                if ($k == 0) {
                    echo ' active';
                }
                echo '">' . $tab['title'] . '</button></div>';
                $k++;
                $tab_btn_delay += 100;
            }

            echo '</div>';
            echo '<div class="tab-image-container green-shadow radius" data-aos="fade-up">';
            foreach ($image_buttons as $tab_image) {
                $tab_title = $tab_image['title'];
                $tab_title = strtolower($tab_title);
                $tab_title = str_replace(' ', '_', $tab_title);
                $tab_title = preg_replace('/[^a-z0-9_]/', '', $tab_title);

                echo '<div id="' . $tab_title . '" class="';
                if ($i == 0) {
                    echo 'active ';
                }
                echo 'tab-image" style="background-image: url(' .  $tab_image["image"]["url"] . ');"></div>';
                $i++;
            }
            echo '</div>';
        }

        ?>
    </section>
    <!-- END IMPROVE YOUR GAMEPLAY -->

    <!-- ALTERNATING VIDEO COLUMNS DESKTOP -->
    <section id="alternating-video-columns" class="space--margin--top hide-mobile">
        <?php
        $alternating_videos = get_field('alternating_videos');
        if ($alternating_videos) {
            $l = 0;
            foreach ($alternating_videos as $row) {
                if ($l % 2 == 0) {
        ?>
                    <div class="alternating-video-column odd-row">
                        <div data-aos="fade-<?php echo ($l % 2 == 0) ? 'up-right' : 'up-left'; ?>">
                            <!--  START NEW VIDEO -->
                            <div class="video-container radius">
                                <!-- <button id="playButton" class="play-button"><svg width="94" height="141" viewBox="0 0 94 141" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g filter="url(#filter0_d_196_307)">
                                            <path d="M84 70.5L9.99999 131L10 10L84 70.5Z" fill="white" />
                                        </g>
                                        <defs>
                                            <filter id="filter0_d_196_307" x="0" y="0" width="94" height="141" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                <feOffset />
                                                <feGaussianBlur stdDeviation="5" />
                                                <feComposite in2="hardAlpha" operator="out" />
                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0" />
                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_196_307" />
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_196_307" result="shape" />
                                            </filter>
                                        </defs>
                                    </svg>
                                </button> -->
                                <video controls poster="<?php echo $row['video_poster_image']; ?>" preload="auto" class="feature-video" src="<?php echo $row['video']['url']; ?>" type="video/mp4" webkit-playsinline playsinline>
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <!-- END VIDEO -->
                        </div>
                        <div data-aos="fade-<?php echo ($l % 2 == 0) ? 'up-left' : 'up-right'; ?>" class="title-section">
                            <h6 class="text-h6"><?php echo $row['small_text']; ?></h6>
                            <h2 class="text-h1"><?php echo $row['title']; ?></h2>
                            <p class="p2"><?php echo $row['description']; ?></p>
                        </div>
                    </div>

                <?php
                } else {
                ?>
                    <div class="alternating-video-column even-row">

                        <div data-aos="fade-<?php echo ($l % 2 == 0) ? 'up-left' : 'up-right'; ?>" class="title-section">
                            <h6 class="text-h6"><?php echo $row['small_text']; ?></h6>
                            <h2 class="text-h1"><?php echo $row['title']; ?></h2>
                            <p class="p2"><?php echo $row['description']; ?></p>
                        </div>
                        <div data-aos="fade-<?php echo ($l % 2 == 0) ? 'up-right' : 'up-left'; ?>">

                            <!--  START NEW VIDEO -->
                            <div class="video-container radius">
                                <!-- <button id="playButton" class="play-button"><svg width="94" height="141" viewBox="0 0 94 141" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g filter="url(#filter0_d_196_307)">
                                            <path d="M84 70.5L9.99999 131L10 10L84 70.5Z" fill="white" />
                                        </g>
                                        <defs>
                                            <filter id="filter0_d_196_307" x="0" y="0" width="94" height="141" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                <feOffset />
                                                <feGaussianBlur stdDeviation="5" />
                                                <feComposite in2="hardAlpha" operator="out" />
                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0" />
                                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_196_307" />
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_196_307" result="shape" />
                                            </filter>
                                        </defs>
                                    </svg>
                                </button> -->
                                <video controls poster="<?php echo $row['video_poster_image']; ?>" preload="auto" class="feature-video" src="<?php echo $row['video']['url']; ?>" type="video/mp4" webkit-playsinline playsinline>
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <!-- END VIDEO -->

                        </div>
                    </div>
        <?php
                }
                $l++;
            }
        }
        ?>
    </section>
    <!-- END ALTERNATING VIDEO COLUMNS DESKTOP -->

    <!-- ALTERNATING VIDEO COLUMNS MOBILE -->
    <section id="alternating-video-columns" class="space--margin--top hide-desktop">
        <?php
        $alternating_videos = get_field('alternating_videos');
        if ($alternating_videos) {
            $l = 0;
            foreach ($alternating_videos as $row) {

        ?>
                <div class="alternating-video-column even-row">
                    <div data-aos="fade-up" class="title-section">
                        <h6 class="text-h6"><?php echo $row['small_text']; ?></h6>
                        <h2 class="text-h1"><?php echo $row['title']; ?></h2>
                        <p class="p2"><?php echo $row['description']; ?></p>
                    </div>
                    <div data-aos="fade-up">

                        <div class="video-container radius">
                            <!-- <button id="playButton" class="play-button"><svg width="94" height="141" viewBox="0 0 94 141" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g filter="url(#filter0_d_196_307)">
                                        <path d="M84 70.5L9.99999 131L10 10L84 70.5Z" fill="white" />
                                    </g>
                                    <defs>
                                        <filter id="filter0_d_196_307" x="0" y="0" width="94" height="141" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                            <feOffset />
                                            <feGaussianBlur stdDeviation="5" />
                                            <feComposite in2="hardAlpha" operator="out" />
                                            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0" />
                                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_196_307" />
                                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_196_307" result="shape" />
                                        </filter>
                                    </defs>
                                </svg>
                            </button> -->
                            <video controls poster="<?php echo $row['video_poster_image']; ?>" preload="auto" class="feature-video" src="<?php echo $row['video']['url']; ?>" type="video/mp4" webkit-playsinline playsinline>
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <!-- END VIDEO -->
                    </div>

                </div>

        <?php
            }
        }
        ?>
    </section>
    <!-- END ALTERNATING VIDEO COLUMNS MOBILE -->

</div>

<!-- GRADIENT -->
<div class="bg-gradient bg-gradient--top-left"></div>

<div class="container">
    <!-- PRICING -->
    <section id="pricing">
        <div data-aos="fade-up" class="title-section">
            <h6 class="text-h6"><?php echo get_field('pricing_title')['small_text']; ?></h6>
            <h2 class="text-h1"><?php echo get_field('pricing_title')['title']; ?></h2>
            <p class="p2"><?php echo get_field('pricing_title')['description']; ?></p>
        </div>

        <?php //include 'old-tiers.php'; 
        ?>
        <?php include 'new-tiers.php';
        ?>

        <!-- DESKTOP FEATURES ONLY -->
        <p class="all-features all-features-desktop-btn p2">See all features <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.5 6.37305L6 1.87305L1.5 6.37305" stroke="#BABABA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </p>

        <!-- DESKTOP PRICING TABLE -->
        <div id="pricing-table-container">
            <?php include 'pricing-tables/pricing-table-desktop-team.php';
            ?>
            <?php include 'pricing-tables/pricing-table-desktop-individual.php'; ?>
        </div>
        <!-- END PRICING -->

    </section>



    <!-- TESTIMONIALS -->
</div>
<section id="testimonials" class="space--margin--top space--margin--bottom">
    <div class="title-section">
        <h6 class="text-h6"><?php echo get_field('testimonials_title')['small_text']; ?></h6>
        <h2 class="text-h1"><?php echo get_field('testimonials_title')['title']; ?></h2>
        <p class="p2"><?php echo get_field('testimonials_title')['description']; ?></p>
    </div>

    <!-- SWIPER -->
    <div class="container swiper-buttons-container">
        <h6 class="p2 hide-desktop">Swipe to see more</h6>
        <div class="swiper-buttons">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <div class="swiper testimonials">
        <div class="testimonials-gradient"></div>
        <div class="swiper-wrapper">
            <?php
            $testimonials = get_field('testimonials');
            if ($testimonials) {
                foreach ($testimonials as $testimonial) {
            ?>
                    <div class="swiper-slide testimonial radius">
                        <div>
                            <div class="img-container">
                                <img loading="lazy" src="<?php echo $testimonial['company_logo']['url']; ?>" alt="<?php echo $testimonial['company_logo']['alt']; ?>">
                            </div>
                            <div class="details">
                                <h3 class="text-h3"><?php echo $testimonial['name']; ?></h3>
                                <p class="blinker-semibold"><?php echo $testimonial['company']; ?></p>
                            </div>
                        </div>
                        <p class="blinker-regular p2"><?php echo $testimonial['testimonial']; ?></p>
                    </div>
                <?php
                }
                foreach ($testimonials as $testimonial) {
                ?>
                    <div class="swiper-slide testimonial radius">
                        <div>
                            <div class="img-container">
                                <img loading="lazy" src="<?php echo $testimonial['company_logo']['url']; ?>" alt="<?php echo $testimonial['company_logo']['alt']; ?>">
                            </div>
                            <div class="details">
                                <h3 class="text-h3"><?php echo $testimonial['name']; ?></h3>
                                <h5 class="text-h4 blinker-semibold"><?php echo $testimonial['company']; ?></h5>
                            </div>
                        </div>
                        <p class="blinker-regular p2"><?php echo $testimonial['testimonial']; ?></p>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>

</section>
<!-- END TESTIMONIALS -->

<div class="container clearfix">
    <div class="container">
        <!-- CTA -->
        <section id="cta">
            <div class="cta radius">
                <div class="copy">
                    <h2 class="text-h2"><?php echo get_field('cta_title_section')['title']; ?></h2>
                    <p class="p2"><?php echo get_field('cta_title_section')['description']; ?></p>
                    <a href="<?php echo get_field('cta_title_section')['button']['url']; ?>" class="btn btn--solid"><?php echo get_field('cta_title_section')['button']['title']; ?>
                    </a>
                </div>
                <div class="overlap-img green-shadow radius" loading="lazy" style="background-image: url(<?php echo get_field('cta_image')['url']; ?>)">
                </div>
            </div>
        </section>
        <!-- END CTA -->

        <!-- GRADIENT -->
        <div class="bg-gradient bg-gradient--bottom-right"></div>

        <!-- FAQS -->
        <section id="faq">
            <div class="title-section">
                <h6 class="text-h6"><?php echo get_field('faqs_title')['small_text']; ?></h6>
                <h2 class="text-h1"><?php echo get_field('faqs_title')['title'];
                                    ?></h2>
                <p class="p2"><?php echo get_field('faqs_title')['description']; ?></p>
            </div>
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
                                <label for="q<?php echo $j; ?>" class="panel-title p2 blinker-semibold">
                                    <div class="plus">
                                        <div class="plus-content">
                                            <div class="tall-spoke"></div>
                                            <div class="spoke"></div>
                                        </div>
                                    </div> <?php echo $faq['question']; ?>
                                </label>
                                <div class="panel-content">
                                    <?php echo $faq['faq_answer']; ?>
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