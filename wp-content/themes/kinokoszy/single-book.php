<?php get_header(); ?>
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

<?php while (have_posts()) : the_post();

    ?>


<section class="archive-book-post">
    <div class="books-image-section">
        <?php
$image = get_field('image_large');
if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif;?>

        <?php $image = get_field('image_small');
if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif;?>
    </div>
</section>
<div class="single-books-container">
    <h1 class="single-books-heading"><?php the_title(); ?></h1>

</div>
<div class="single-book-paragraph">
    <p><?php the_field('paragraph'); ?></p>
</div>



<!--- Navigation previous and next for the books -->
<div class="books-navigation">
    <?PHP  the_post_navigation( array(
    'prev_text'  => __( '<< PREVIOUS BOOK'),
    'next_text'  => __( 'NEXT BOOK >>' ),
    )); ?>
</div>




<?php endwhile;
endif; ?>

<?php get_footer(); ?>