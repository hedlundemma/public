<?php get_header() ?>
<div class="title-container">
    <img src="/wp-content/themes/kinokoszy/assets/images/Group 6.png" alt="">
    <h1>BOOKS</h1>
</div>
<?php if (have_posts()) : ?>

    <div>

        <?php while (have_posts()) : the_post();

            the_title(); ?>



            <a href="<?php the_permalink(); ?>">titke</a>

    <?php
        endwhile;
    endif;

    ?>



    </div>

    <?php get_footer() ?>