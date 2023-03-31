<?php get_header() ?>
<div class="title-container">
    <img src="/wp-content/themes/kinokoszy/assets/images/Group 6.png" alt="">
    <h1>BOOKS</h1>
</div>
<?php if (have_posts()) : ?>

<div>

    <?php while (have_posts()) : the_post();

    

the_title();?>
    <?php
$image = get_field('image');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif;?>
    the_title(); ?>



    <a href="<?php the_permalink(); ?>">titke</a>

    <?php
        endwhile;
    endif;

    ?>



</div>

<?php get_footer() ?>