<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>
<div class="title-container">

    <h1><img src="/wp-content/themes/kinokoszy/assets/images/Group 6.png" alt="">CONTACT</h1>
</div>
<section class="contact-heading-section">
    <h2 class="contact-heading">HAVE A QUESTION? </h2>
    <?php if (is_page('kino/contact')) : ?>
    <h2 class="contact-heading">CONTACT US!</h2>
    <?php else :?>
    <h2 class="contact-heading">CONTACT ME!</h2>
    <?php endif ?>

</section>


<?php the_content() ?>
<?php if (is_page('kino/contact')) : ?>
<section class="images-section">
    <div class="image-container-one">
        <img src="/wp-content/themes/kinokoszy/assets/images/contact-bo.jpg" alt="Bo persson" />
        <div class="image-paragraphs-contact">
            <p>//</p>
            <p> BO PERSSON </p>
        </div>
    </div>
    <div class="imgage-container-two">
        <img src="/wp-content/themes/kinokoszy/assets/images/contact-joanna.jpg" alt="Joanna Helander" />
        <div class="image-paragraphs-contact">
            <p>//</p>
            <p> JOANNA HELANDER</p>
        </div>
</section>
<?php else : ?>
<section class="image-section-only-joanna">
    <div class="image-container-one">
        <img src="/wp-content/themes/kinokoszy/assets/images/contact-joanna.jpg" alt="Joanna Helander" />
        <div class="image-paragraphs-contact">
            <p>//</p>
            <p>JOANNA HELANDER</p>
        </div>
    </div>
    <?php endif?>
</section>

<?php
get_footer(); ?>