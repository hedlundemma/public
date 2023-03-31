<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>
<div class="title-container">

    <h1><img src="/wp-content/themes/kinokoszy/assets/images/Group 6.png" alt="">CONTACT</h1>
</div>

<h2 class="contact-heading"> HAVE A QUESTION? ASK US!</h2>

<section class="images-section">
    <div class="image-container-one">
        <?php if (is_page('kino') || is_page('kino/contact') || is_page('kino/about') || (get_post_type() == 'film')) : ?>
        <img src="/wp-content/themes/kinokoszy/assets/images/contact-bo.jpg" alt="Bo persson" />
        <p> BO PERSSON </p>
        <?php endif?>
    </div>
    <div src="imgage-container-two">
        <img src="/wp-content/themes/kinokoszy/assets/images/contact-joanna.jpg" alt="Joanna Helander" />
        <p> JOANNA HELANDER</p>
    </div>
</section>



<?php the_content() ?>


<?php
get_footer(); ?>