<?php get_header() ?>
<section class="hero-section">
    <div class="arrow-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 6.png" alt="">
    </div>
    <div class="title-container">
        <h1>
            EXHIBITIONS
        </h1>

    </div>

</section>

<section class="exhibitions">
    <div class="exhibition-heading">
        <h2>EXHIBITIONS</h2>
        <h2>JOANNA HELANDER 2008</h2>
    </div>
</section>

<div class="articles-grid">

    <?php if (have_posts()) : ?>


        <?php while (have_posts()) : the_post(); ?>
            <div class="articles-post">
                <h3><?php the_title(); ?></h3>
                <p><?php the_field('exhibition_paragraph') ?>
                </p>
            </div>




    <?php
        endwhile;
    endif;

    ?>

</div>

<div class="exhibition-image-container">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/teater.jpg" alt="" />

    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arvikaBib.jpg" alt="" />

</div>



<?php wp_footer();
get_footer(); ?>