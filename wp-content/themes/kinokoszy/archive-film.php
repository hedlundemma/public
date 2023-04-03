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

<?php if (have_posts()) : ?>



    <?php while (have_posts()) : the_post();

        the_title();


        $image = get_field('image');
        if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>



        <?php
        $link = get_field('url');
        if ($link) : ?>
            <a class="button" href="<?php echo esc_url($link); ?>">Trailer</a>
        <?php endif; ?>







        <a href="<?php the_permalink(); ?>">title</a>

<?php
    endwhile;
endif;

?>





<?php get_footer() ?>