<?php /* Template Name: Films */ ?>
<?php get_header()?>
<div class="title-container">
    <img src="/wp-content/themes/kinokoszy/assets/images/Group 6.png" alt="">
    <h1>FILMS</h1>

    <?php if(have_posts() ) : ?>

    <div>

        <?php while (have_posts () ) : the_post();

the_title();


$image = get_field('image');
if( !empty( $image ) ): ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif;?>



        <?php 
$link = get_field('url');
if( $link ): ?>
        <a class="button" href="<?php echo esc_url( $link ); ?>">Trailer</a>
        <?php endif; ?>







        <a href="<?php the_permalink();?>">title</a>

        <?php
endwhile;
endif;

?>



    </div>

    <?php get_footer() ?>