<!-- TOGGLE TEAM INDIVIDUAL -->
<div class="team-toggle-container" data-aos="fade-up">
    <span id="individual" class="active">Individual</span>
    <span id="team">Team</span>
</div>

<div class="tiers-container">

    <?php
    $tiers = get_field('tiers');
    if ($tiers) {
        $tier_delay = 100;
        $tier_loop_count = 1;
        foreach ($tiers as $tier) {
    ?>
            <div class="tier-item">
                <div class="tier radius" data-aos="fade-up" <?php echo 'data-aos-delay="' . $tier_delay . '"'; ?>>
                    <div>
                        <h2 class="text-h3"><?php echo $tier['name']; ?></h2>
                        <p class="p2 price team month"><span class="blinker-semibold text-h3">€<?php echo $tier['team_price_per_month']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;/month</p>
                        <p class="p2 price team year"><span class="blinker-semibold text-h3">€<?php echo $tier['team_price_per_year']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;/year</p>
                        <p class="p2 price individual month"><span class="blinker-semibold text-h3">€<?php echo $tier['individual_price_per_month']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;/month</p>
                        <p class="p2 price individual year"><span class="blinker-semibold text-h3">€<?php echo $tier['individual_price_per_year']; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;/year</p>
                        <div class="custom-toggle-switch-container">
                            <div class="custom-toggle-switch">
                                <div class="slider">
                                </div>
                            </div>
                            <span class="blinker-semibold p2">BILLED YEARLY</span>
                        </div>
                        <ul>
                            <?php
                            foreach ($tier['package_includes'] as $item) {
                                echo '<li class="p2 blinker-regular">
                                <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15 4.62305L6.75 12.873L3 9.12305" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
' . $item['item'] . '</li>';
                            } ?>
                        </ul>
                    </div>
                    <div class="tier-btn-container">
                        <a href="<?php echo $tier['link']['url']; ?>" class="btn btn--solid-grey"><?php echo $tier['link']['title']; ?>
                        </a><?php if ($tier_loop_count == 3) {
                                echo '<p>or <a href="/contact">contact sales</a></p>';
                            } ?>
                    </div>
                </div>
                <!-- ALL TIERS BTN -->
                <p class="all-features all-features-mobile-btn p2 hide-desktop">See all features <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.5 6.37305L6 1.87305L1.5 6.37305" stroke="#BABABA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </p>

                <!-- MOBILE PRICING TABLES -->
                <?php include 'pricing-tables/pricing-table-tier-' . $tier_loop_count . '.php';
                ?>
                <!-- MOBILE PRICING TABLES -->

            </div>
    <?php
            $tier_delay += 250;
            $tier_loop_count++;
        }
    }
    ?>
</div>