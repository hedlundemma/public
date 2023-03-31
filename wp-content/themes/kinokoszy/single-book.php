<?php get_header(); ?>
<div class="title-container">
    <img src="/wp-content/themes/kinokoszy/assets/images/Group 6.png" alt="">
    <h1>BOOKS</h1>
</div>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post();

    ?>

        <h1><?php the_title(); ?></h1>

        <?php the_content(); ?>


<?php endwhile;
endif; ?>

<?php get_footer(); ?>