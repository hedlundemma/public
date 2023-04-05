<?php
$articles = get_field('FilmArticles');
?>




<?php get_header(); ?>
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

    <?php while (have_posts()) : the_post(); ?>


        <h1><?php the_title(); ?></h1>
        <?php $image = the_field('image'); ?>

        <img src="<?php echo esc_url($image['url']) ?>" alt="">


        <p><?php the_field('paragraph'); ?></p>

        <?php foreach ($articles as $featured_post) :
            $permalink = get_permalink($featured_post->ID);
            $title = get_the_title($featured_post->ID);
            $custom_field = get_field('article_paragraph', $featured_post->ID); ?>
            <h1><?php echo $title ?></h1>
            <p><?php echo $custom_field ?></p>



        <?php endforeach ?>


    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>