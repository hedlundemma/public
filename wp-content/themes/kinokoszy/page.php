<?php

get_header();

?>
<section class="hero-section">
    <div class="arrow-container">
        <img src="/wp-content/themes/kinokoszy/assets/images/Group 6.png" alt="">
    </div>
    <div class="title-container">
        <h1>
            PHOTOS
        </h1>
    </div>
</section>

<div id="photo-overlay" class="hide">
    <div id="photo-overlay-img">
        <img src="/wp-content/themes/kinokoszy/assets/images/Joanna-croped.jpg" alt="img">
    </div>
    <div>
        <p>test</p>
        <p></p>
        <p></p>
    </div>
</div>

<?php

while ( have_posts() ) :
	the_post();
    the_content();
endwhile;

get_footer();
wp_footer();