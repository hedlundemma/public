<?php get_header() ?>
<section class="hero-section">
    <div class="arrow-container">
        <img src="/wp-content/themes/kinokoszy/assets/images/Group 6.png" alt="">
    </div>
    <div class="title-container">
        <h1>
            PHOTOS
        </h1>

    </div>

</section>
<?php if (have_posts()) : ?>

    <div>

        <?php while (have_posts()) : the_post();



            the_title()

        ?>



    <?php
        endwhile;
    endif;

    ?>


    <?php get_footer() ?>
    </div>