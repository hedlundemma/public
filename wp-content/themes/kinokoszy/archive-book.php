<?php get_header() ?>
<div class="title-container">
    <img src="/wp-content/themes/kinokoszy/assets/images/Group 6.png" alt="">
    <h1>BOOKS</h1>
</div>
<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>
<section class="archive-book-post">
    <div class="books-image-section">

        <?php $image = get_field('image_large');
        if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']);?>" />
        <?php endif;?>


        <?php $image = get_field('image_small');
        if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif;?>

    </div>
    <div class="archive-book-paragraphs">
        <h4><?php the_title()?></h4>


        <p>// <a href="<?php the_permalink(); ?>">INFO</a>
    </div>


</section>
<?php
        endwhile;
    endif;

    ?>



</div>

<?php get_footer() ?>