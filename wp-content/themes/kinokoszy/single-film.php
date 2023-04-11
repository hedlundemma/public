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

    <?php while (have_posts()) : the_post();

    ?>

        <h1><?php the_title(); ?></h1>

        <?php
        $image = get_field('image');
        if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

        <p><?php the_field('paragraph'); ?></p>
        <?php foreach ($articles as $article) : ?>
            <h1><?php echo $article->post_title ?></h1>
        <?php endforeach ?>





<?php endwhile;
endif; ?>


<?php get_footer(); ?>