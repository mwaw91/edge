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
    <section class="hero" data-aos="fade-up">
        <?php
        $title = get_field('title');
        $subtitle = get_field('subtitle');
        $button = get_field('button');
        $hero_img = get_field('image');
        ?>

        <h1><?php echo $title; ?></h1>
        <p><?php echo $subtitle; ?></p>
        <button class="btn"><?php echo $button['title']; ?></button>
        <button class="btn btn--solid"><?php echo $button['title']; ?></button>
        <button class="btn btn--solid-white"><?php echo $button['title']; ?></button>
        <button class="btn btn--solid-grey"><?php echo $button['title']; ?></button>
        <button class="btn btn--outline"><?php echo $button['title']; ?></button>


        <!-- echo $button['url']; -->

        <img src="<?php echo $hero_img['url']; ?>">
    </section>
    <!-- END HERO -->


    <!-- TESTED AND USED -->
    <!-- END TESTED AND USED -->


    <!-- STAT CONTAINER -->
    <!-- END STAT CONTAINER -->


    <!-- IMPROVE YOUR GAMEPLAY -->
    <!-- END IMPROVE YOUR GAMEPLAY -->

    <!-- ALTERNATING VIDEO COLUMNS -->
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
            <h2><?php echo get_field('pricing_title')['title']; ?></h2>
            <p><?php echo get_field('pricing_title')['description']; ?></p>
        </div>
    </section>
    <!-- END PRICING -->

    <!-- TESTIMONIALS -->
    <section>
        <div data-aos="fade-up" class="title-section">
            <h6><?php echo get_field('testimonials_title')['small_text']; ?></h6>
            <h2><?php echo get_field('testimonials_title')['title']; ?></h2>
            <p><?php echo get_field('testimonials_title')['description']; ?></p>
        </div>
    </section>
    <!-- END TESTIMONIALS -->


    <!-- CTA -->
    <section>


    </section>
    <!-- END CTA -->
</div>

<!-- GRADIENT -->
<div class="bg-gradient bg-gradient--bottom-right"></div>

<div class="container">
    <!-- FAQS -->
    <section id="faq">
        <div data-aos="fade-up" class="title-section">
            <h6><?php echo get_field('faqs_title')['small_text']; ?></h6>
            <h2><?php echo get_field('faqs_title')['title']; ?></h2>
            <p><?php echo get_field('faqs_title')['description']; ?></p>
        </div>
    </section>
    <!-- END FAQS -->
</div>


<?php
get_footer();
?>