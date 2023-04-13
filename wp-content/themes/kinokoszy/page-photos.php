<?php /* Template Name: Photos*/ ?>
<?php


get_header();


?>

<section class="hero-section">
    <div class="arrow-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 6.png" alt="">
    </div>
    <div class="title-container">
        <h1>
            PHOTOS
        </h1>
    </div>
</section>

<div id="photo-overlay" class="hide">
    <div id="photo-overlay-img">
        <img class="" src="" alt="img">
    </div>
    <div id="photo-overlay-close">
        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="16.7461" y="0.188477" width="2" height="23" transform="rotate(45 16.7461 0.188477)" fill="white" />
            <rect x="0.626953" y="1.95117" width="2" height="23" transform="rotate(-45 0.626953 1.95117)"
                fill="white" />
        </svg>
    </div>
    <div class="photo-overlay-nav desktop">
        <a class="photo-overlay-nav-previous desktop">&lt&lt PREVIOUS PHOTO</a>
        <p>//</p>
        <a class="photo-overlay-nav-next">NEXT PHOTO &gt&gt</a>
    </div>

    <div class="photo-overlay-nav mobile">
        <a class="photo-overlay-nav-previous">PREVIOUS</a>
        <p>//</p>
        <a class="photo-overlay-nav-next">NEXT</a>
    </div>
</div>

<?php

while (have_posts()) :
    the_post();
    the_content();
endwhile;

get_footer();
wp_footer();