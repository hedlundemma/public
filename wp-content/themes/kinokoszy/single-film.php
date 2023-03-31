<?php get_header(); ?>
<div class="title-container">
    <img src="/wp-content/themes/kinokoszy/assets/images/Group 6.png" alt="">
    <h1>FILMS</h1>
</div>


<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post();

    ?>

<h1><?php the_title(); ?></h1>

<?php
$image = get_field('image');
if( !empty( $image ) ): ?>
<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif;?>

<p><?php the_field('paragraph'); ?></p>


<?php endwhile;
endif; ?>

<?php get_footer(); ?>