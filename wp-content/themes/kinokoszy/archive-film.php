<?php /* Template Name: Films */ ?>

<?php get_header() ?>

<section class="hero-section">

    <div class="arrow-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 6.png" alt="">
    </div>
    <div class="title-container">
        <h1>
            FILMS
        </h1>
    </div>

</section>

<section class="hero-films">

    <div class="iframe-container">
        <iframe class="responsive-iframe" src="//player.vimeo.com/video/150078754" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
    </div>

</section>

<!--Section with four flexing images (still shots) from selected films. -->
<section class="film-selection-flex-images">


    <div class="flex-image-row">
        <div class="flex-image-container"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/films/Optimized-poster-watching-the-moon-at-night5-min.png" alt="" srcset=""></div>
        <div class="flex-image-container"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/films/wolowina-z-boba-JPEG-min.jpg" alt="" srcset=""></div>
        <div class="flex-image-container"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/films/Optimized-T8D_affisch.png" alt="" srcset=""></div>
        <div class="flex-image-container"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/films/Optimized-poster_the_return.png" alt="" srcset=""></div>

    </div>

</section>

<!-- Shortcut to individual films, with a screenshot, title frame or poster from the film itself. -->
<section class="featured-films-section">

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <div class="featured-film-wrapper">

                <?php

                $image = get_field('image_film');
                if (!empty($image)) : ?>
                    <div class="featured-film-image-container">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                <?php endif; ?>

                <div class="featured-film-links">
                    <h4><?php the_title() ?></h4>


                    <div class="featured-film-paragraph">
                        <p>//</p>
                        <a href="<?php the_permalink(); ?>">INFO</a>
                    </div>
                </div>
            </div>
    <?php
        endwhile;
    endif; ?>

</section>

<?php
wp_footer();
get_footer() ?>