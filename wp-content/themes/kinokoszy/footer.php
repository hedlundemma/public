<?php $joanna_footer_menu = wp_get_nav_menu_items('joanna-footer-menu');
$kino_footer_menu = wp_get_nav_menu_items('kino-footer-menu');

?>
<footer>
    <section class="footer-section">
        <?php if (is_page('kino') || is_page('kino/contact') || is_page('kino/about') || (get_post_type() == 'film')) : ?>
        <div class="logo-footer">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo kinokoszy"
                width="180px" />
            <h2> KINO</h2>
            <h3> KOSZYK</h3>

        </div>
        <?php endif?>
        <div class="menu-footer">
            <?php if (is_page('kino') || is_page('kino/contact') || is_page('kino/about') || (get_post_type() == 'film')) : ?>
            <?php foreach ($kino_footer_menu as $link) : ?>
            <a title="<?= $link->title; ?>" class="<?= $current_page_id == $link->object_id ? 'underline' : ''; ?>"
                href="<?= $link->url; ?>"><?= $link->title; ?></a>
            <?php endforeach; ?>


            <?php else : ?>
            <?php foreach ($joanna_footer_menu as $link) : ?>
            <a title="<?= $link->title; ?>" class="<?= $current_page_id == $link->object_id ? 'underline' : ''; ?>"
                href="<?= $link->url; ?>"><?= $link->title; ?></a>
            <?php endforeach; ?>
            <?php endif ?>
        </div>
        <div class="info-section-footer">
            <?php if (is_page('kino') || is_page('kino/contact') || is_page('kino/about') || (get_post_type() == 'film')) : ?>
            <p>BO PERSSON</p>
            <?php endif ?>
            <p>JOANNA HELANDER </p>
            <p>KINO.KOSZYK@GMAIL.COM</p>
            <p>TEL: +46 768 32 74 55</p>
        </div>

    </section>
    <section class="lower-footer-section">
        <?php if (is_page('kino') || is_page('kino/contact') || is_page('kino/about') || (get_post_type() == 'film')) : ?>
        <div class="secondary-footer-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seclogo.png" alt="logo kinokoszy" />
        </div>
        <?php endif?>

        <div class="copy-section">
            <p> Copyright © 2023 · All Rights Reserved</p>
        </div>
        <div class="facebook-logo">
            <a href="https://www.facebook.com/" class="svg">

                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-ikon.svg"
                    alt="facebook logo link" /></a>
            </a>
        </div>


        </div>
    </section>





</footer>
</body>

</html>