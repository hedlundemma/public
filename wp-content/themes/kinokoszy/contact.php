<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>
<section class="hero-section">
    <div class="arrow-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 6.png" alt="">
    </div>
    <div class="title-container">
        <h1>CONTACT</h1>

    </div>

</section>
<section class="contact-heading-section">
    <h2>HAVE A QUESTION? </h2>
    <?php if (is_page('kino/contact')) : ?>
        <h2>CONTACT US!</h2>
    <?php else : ?>
        <h2>CONTACT ME!</h2>
    <?php endif ?>

</section>

<?php the_content() ?>
<?php if (is_page('kino/contact')) : ?>
    <section class="images-section">
        <div class="image-container-one">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-bo.jpg" alt="Bo persson" />
            <div class="image-paragraphs-contact">
                <p>//</p>
                <p> BO PERSSON </p>
            </div>
        </div>
        <div class="image-container-two">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-joanna.jpg" alt="Joanna Helander" />
            <div class="image-paragraphs-contact">
                <p>//</p>
                <p> JOANNA HELANDER</p>
            </div>
    </section>
<?php else : ?>
    <section class="image-section-only-joanna">
        <div class="image-container-one">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-joanna.jpg" alt="Joanna Helander" />
            <div class="image-paragraphs-contact">
                <p>//</p>
                <p>JOANNA HELANDER</p>
            </div>
        </div>
        </div>
    <?php endif ?>
    </section>

    <?php
    wp_footer();
    get_footer(); ?>