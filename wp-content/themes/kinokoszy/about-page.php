<?php /* Template Name: About-page */ ?>

<?php get_header(); ?>
<section class="hero-section">
    <div class="arrow-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 6.png" alt="">
    </div>
    <div class="title-container">

        <?php
        // This checks if the parent page is "Kino" or something else ("Joanna"). Different headings will be used on respective different "about" pages.
        $parent_title = get_the_title($post->post_parent);

        if ($parent_title == "Kino") {
            echo "<h1>About us</h1>";
        } else {
            echo "<h1>About</h1>";
        }
        ?>

    </div>
</section>

<section class="about-heading-section">
    <div class="about-heading">
        <h2><?php the_title() ?></h2>
    </div>
</section>

<section class="about-content">
    <article class="about-text-and-images">
        <?php

        the_content();

        ?>
    </article>
</section>
<?php
wp_footer();
get_footer(); ?>