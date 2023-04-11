<?php get_header(); ?>
<section class="hero-section">
    <div class="arrow-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 6.png" alt="">
    </div>
    <div class="title-container">
        <h1>
            BOOKS
        </h1>

    </div>

</section>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post();

    ?>


        <section class="archive-book-post">
            <div class="books-image-section">
                <div class="left-book-image-container">
                    <?php
                    $image = get_field('left_image_books');
                    if (!empty($image)) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <div class="right-book-image-container">
                    <?php $image = get_field('right_image_books');
                    if (!empty($image)) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>

            </div>

            <div class="single-books-container">
                <h1 class="single-books-heading"><?php the_title(); ?></h1>

            </div>
            <div class="single-book-paragraph">
                <p>BY: <?php the_field('writer'); ?></p> <br>
                <p>PHOTO: <?php the_field('photo_by'); ?></p><br>
                <p>PUBLISHER: <?php the_field('publisher'); ?></p><br>
                <p>ISBN: <?php the_field('isbn'); ?></p><br>


            </div>
        </section>



        <!--- Navigation previous and next for the books -->
        <div class="books-navigation">
            <?PHP the_post_navigation(array(
                'prev_text'  => __('<<   PREVIOUS BOOK'),
                'next_text'  => __('NEXT BOOK   >>'),
            )); ?>
        </div>






<?php endwhile;
endif; ?>

<?php get_footer(); ?>