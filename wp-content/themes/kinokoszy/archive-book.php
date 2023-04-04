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

    <?php while (have_posts()) : the_post(); ?>
        <section class="archive-book-post">
            <div class="books-image-section">

                <?php $image = get_field('image_large');
                if (!empty($image)) : ?>
                    <div class="left-book-image-container">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                <?php endif; ?>


                <?php $image = get_field('image_small');
                if (!empty($image)) : ?>
                    <div class="right-book-image-container">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                <?php endif; ?>


            </div>
            <div class="archive-book-paragraph">
                <h4><?php the_title() ?></h4>


                <div class="section-paragraph">
                    <p>//</p>
                    <a href="<?php the_permalink(); ?>">INFO</a>
                </div>
            </div>


        </section>
<?php
    endwhile;
endif;

?>



</div>

<?php get_footer() ?>