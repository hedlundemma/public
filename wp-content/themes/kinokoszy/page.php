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
<?php

while (have_posts()) :
    the_post();
    the_content();
endwhile;

get_footer();
