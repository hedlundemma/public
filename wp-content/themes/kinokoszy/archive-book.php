<?php get_header() ?>
<section class="hero-section">
    <div class="arrow-container">
        <img src="/wp-content/themes/kinokoszy/assets/images/Group 6.png" alt="">
    </div>
    <div class="title-container">
        <h1>
            BOOKS
        </h1>

    </div>

</section>
<?php if (have_posts()) : ?>

    <div>

        <?php while (have_posts()) : the_post();



            the_title(); ?>
            <?php
            $image = get_field('image');
            if (!empty($image)) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            the_title(); ?>



            <a href="<?php the_permalink(); ?>">titke</a>

    <?php
        endwhile;
    endif;

    ?>



    </div>

    <?php get_footer() ?>