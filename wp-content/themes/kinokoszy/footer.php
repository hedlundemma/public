<?php $joanna_footer_menu = wp_get_nav_menu_items('joanna-footer-menu');
$kino_footer_menu= wp_get_nav_menu_items('kino-footer-menu');

?>



<footer>
    <section class="footer-section">
        <div class="logo-footer">
            <img src="/wp-content/themes/kinokoszy/assets/images/kino-logo.png" alt="logo kinokoszy" />
            <h2> KINO</h2>
            <h3> KOSZYK</h3>

        </div>
        <div class="menu-footer">
            <?php if (is_page('kino') || is_page('kino/contact') || is_page('kino/about')) :?>
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
            <p>BO PERSSON</p>
            <p>JOANNA HELANDER </p>
            <p> KINO.KOSZYK@GMAIL.COM</p>
            <p>TEL: +46 768 32 74 55</p>
        </div>
        </div>




    </section>
</footer>
</body>

</html>