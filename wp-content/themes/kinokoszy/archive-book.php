<?php get_header()?>

<?php if(have_posts() ) : ?>

<div>

    <?php while (have_posts () ) : the_post();

the_title();?>
    <?php
$image = get_field('image');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif;?>



    <a href="<?php the_permalink();?>">titke</a>

    <?php
endwhile;
endif;

?>



</div>

<?php get_footer ()?>