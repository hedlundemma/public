<?php /* Template Name: Home-kino */ ?>

<?php get_header() ?>
<section class="hero-section">
    <div class="arrow-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group 6.png" alt="">
    </div>
    <div class="title-container">
        <h1>
            KINO
        </h1>
        <h1>
            KOSZYK
        </h1>

    </div>

</section>

<main class="home-main">
    <p>
        We are Kino Koszyk, an independent film company with our lense focused on social injustice and inspiring people.
        We produces creative documentaries for cinema and television, books and exhibitions.<br><br>

        Founded in 1987. Based in Göteborg, Sweden.
    </p>

    </section>

    <section id="home-movie-section">
        <a href="films">
            <h2>FILMS</h2>
        </a>
    </section>

    <h2 class="awards-heading">AWARDS</h2>
    <section id="home-kino-awards-section">
        <div class="awards-container">
            <div class="sliding-content">
            </div>
        </div>
    </section>

    <h2 class="partners-heading">PARTNERS</h2>
    <section id="home-partners-section">
        <div class="home-partner-card">
            <p>text</p>
        </div>
        <div class="home-partner-card">
            <p>text</p>
        </div>
        <div class="home-partner-card">
            <p>text</p>
        </div>
        <div class="home-partner-card">
            <p>text</p>
        </div>
        <div class="home-partner-card">
            <p>text</p>
        </div>
        <div class="home-partner-card">
            <p>text</p>
        </div>
    </section>

    <section id="home-news-section">
        <div class="latest-news-section">
            <h2>KEEP UP WITH <br>OUR LATEST NEWS</h2>
        </div>

        <div>
            <p>Find out news and read more about us on facebook</p>
            <div id="home-news-grid">

                <div class="home-news-facebook">
                    <a href="https://www.facebook.com/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png"
                            alt="facebook">
                    </a>
                </div>

                <a class="home-news-arrow">
                    <img class="home-news-arrow-img"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/Pil.png" alt="facebook">
                </a>
            </div>
        </div>
    </section>
</main>
<?php wp_footer(); ?>
<?php get_footer(); ?>