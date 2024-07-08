<!-- DISSAPPEARING MENU -->
<!-- <div class='main-tool-bar'>Header</div> -->

<?php 
get_header();
?>

<!-- <div class="green-shadow radius fade-up" data-aos="fade-up"></div>
<div class="fade-left" data-aos="fade-left"></div>
<div class="fade-right" data-aos="fade-right"></div> -->

<!-- HERO -->
HERO
<br/>
<p>
<?php 
$title = get_field('title');
$subtitle = get_field('subtitle');
$button = get_field('button');
$hero_img = get_field('image');

echo $title;
echo $subtitle;
echo $button['url'];
echo $button['title'];
echo $hero_img['url'];
?>
</p>
<br/>
END HERO
<br/><br/>

<div class="bg-gradient"></div>


<!-- FEATURES -->
FEATURES

<br/><br/>

<!-- toggle -->
<input id="toggle-on" class="toggle toggle-left" name="toggle" value="false" type="radio" checked>
<label for="toggle-on" class="btn">Yes</label>
<input id="toggle-off" class="toggle toggle-right" name="toggle" value="true" type="radio">
<label for="toggle-off" class="btn">No</label>

<br/>
END FEATURES
<br/><br/>

<!-- STANDOUT FEATURE -->
STANDOUT FEATURE
<br/>
<section>
<div class="title-section">
    <h6><?php echo get_field('standout_features_title')['small_text']; ?></h6>
    <h2><?php echo get_field('standout_features_title')['title']; ?></h2>
    <p><?php echo get_field('standout_features_title')['description']; ?></p>
</div>

<p>
<?php
echo get_field('feature_1')['title'];
echo get_field('feature_1')['subtitle'];
echo get_field('feature_1')['button'];
echo get_field('feature_1')['background_image'];

echo get_field('feature_2')['title'];
echo get_field('feature_2')['subtitle'];
echo get_field('feature_2')['background_image'];

echo get_field('feature_3')['title'];
echo get_field('feature_3')['subtitle'];
echo get_field('feature_3')['background_image'];
?>
</p>
</section>
<br/>
END STANDOUT FEATURE
<br/><br/>

<div class="bg-gradient"></div>

<!-- PRICING -->
PRICING
<br/>
<section>
<div class="title-section">
    <h6><?php echo get_field('pricing_title')['small_text']; ?></h6>
    <h2><?php echo get_field('pricing_title')['title']; ?></h2>
    <p><?php echo get_field('pricing_title')['description']; ?></p>
</div>
</section>
<br/>
END PRICING
<br/><br/>

<!-- TESTIMONIALS -->
TESTIMONIALS
<br/>
<section>
<div class="title-section">
    <h6><?php echo get_field('testimonials_title')['small_text']; ?></h6>
    <h2><?php echo get_field('testimonials_title')['title']; ?></h2>
    <p><?php echo get_field('testimonials_title')['description']; ?></p>
</div>
</section>
<br/>
END TESTIMONIALS
<br/><br/>

<!-- FAQS -->
FAQS
<br/>

<section>
<div class="title-section">
    <h6><?php echo get_field('faqs_title')['small_text']; ?></h6>
    <h2><?php echo get_field('faqs_title')['title']; ?></h2>
    <p><?php echo get_field('faqs_title')['description']; ?></p>
</div>
</section>
<br/>
END FAQS
<br/>


<?php 
get_footer();
?>