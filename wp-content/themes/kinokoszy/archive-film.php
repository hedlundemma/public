<?php /* Template Name: Films */ ?>
<?php get_header() ?>
<section class="hero-section">
    <div class="arrow-container">
        <img src="/wp-content/themes/kinokoszy/assets/images/Group 6.png" alt="">
    </div>
    <div class="title-container">
        <h1>
            FILMS
        </h1>

    </div>
</section>

<section class="hero-films">
    <div class="iframe-container">
        <iframe class="responsive-iframe" src="//player.vimeo.com/video/150078754" frameborder="0"
            allowfullscreen="allowfullscreen"></iframe>
    </div>
</section>

<section class="film-selection-flex-images">
    <div class="image-row">
        <div class="image-container"><img
                src="/wp-content/themes/kinokoszy/assets/images/films/Optimized-ach-jakze-szwecja-avdammad.png" alt=""
                srcset=""></div>
        <div class="image-container"><img
                src="/wp-content/themes/kinokoszy/assets/images/films/Optimized-poster_the_return.png" alt="" srcset="">
        </div>
        <div class="image-container"><img
                src="/wp-content/themes/kinokoszy/assets/images/films/Optimized-T8D_affisch.png" alt="" srcset="">
        </div>
        <div class="image-container"><img
                src="/wp-content/themes/kinokoszy/assets/images/films/Optimized-Tvillingarna från Krakow med cellisten.png"
                alt="" srcset=""></div>
    </div>
</section>

</section>

<?php if (have_posts()) : ?>



<?php while (have_posts()) : the_post();

        the_title();


        $image = get_field('image');
        if (!empty($image)) : ?>
<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>



<?php
        $link = get_field('film_url');
        if ($link) : ?>
<a class="button" href="<?php echo esc_url($link); ?>">Trailer</a>
<?php endif; ?>




<a href="<?php the_permalink(); ?>">title</a>

<?php
    endwhile;
endif;


get_footer() ?>