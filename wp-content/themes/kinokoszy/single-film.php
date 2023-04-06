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

<?php
        $image = get_field('image_film');
        if (!empty($image)) : ?>
<img class="single-film-image" src="<?php echo esc_url($image['url']); ?>"
    alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>

        <section>
            <div class="single-film-heading">
                <h2><?php the_title() ?></h2>

    </div>
</section>

<p class="single-film-paragraph"><?php the_field('film_paragraph')?>
    <?php foreach ($articles as $featured_post) :
                $permalink = get_permalink($featured_post->ID);
                $title = get_the_title($featured_post->ID);
                $custom_field = get_field('article_paragraph', $featured_post->ID); ?>

<div class="articles-post">
    <h3><?php echo $title ?></h3>
    <p><?php echo $custom_field ?></p>
</div>

<?php endforeach ?>
</div>





<?php endwhile; ?>
<?php endif; ?>



<?php get_footer(); ?>