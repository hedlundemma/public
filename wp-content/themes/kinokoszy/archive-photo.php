<?php get_header() ?>

<section class="hero-section">
    <div class="arrow-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 6.png" alt="">
    </div>
    <div class="title-container">
        <h1>
            PHOTOS
    </div>
</section>

<?php if (have_posts()) : ?>

    <div id="photos-img-grid">
        <?php while (have_posts()) : the_post();
            $image = get_field('image_photo');
            if (!empty($image)) : ?>

                <img src="<?php echo esc_url($image['url']) ?>" alt="<?php echo esc_attr($image['alt']) ?>">

            <?php endif ?>
    <?php endwhile;
    endif; ?>

    </div>

    <div id="photo-overlay">
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Joanna-croped.jpg" alt="img">
        </div>
        <div>
            <p>test</p>
            <p></p>
            <p></p>
        </div>
    </div>

    <?php get_footer() ?>