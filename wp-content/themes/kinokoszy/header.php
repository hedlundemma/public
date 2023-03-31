<!DOCTYPE html>
<?php $kino_menu = wp_get_nav_menu_items('kino-nav-menu');
$joanna_menu = wp_get_nav_menu_items('joanna-nav-menu');

?>

<head>
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>

    <header>
        <nav>
            <div class="nav-links-container">
                <?php if (is_page('kino') || is_page('kino/contact') || is_page('kino/about') || (get_post_type() == 'film')) : ?>
                    <?php foreach ($kino_menu as $link) : ?>
                        <a title="<?= $link->title; ?>" class="<?= $current_page_id == $link->object_id ? 'underline' : ''; ?>" href="<?= $link->url; ?>"><?= $link->title; ?></a>
                    <?php endforeach; ?>


                <?php else : ?>
                    <?php foreach ($joanna_menu as $link) : ?>
                        <a title="<?= $link->title; ?>" class="<?= $current_page_id == $link->object_id ? 'underline' : ''; ?>" href="<?= $link->url; ?>"><?= $link->title; ?></a>
                    <?php endforeach; ?>
                <?php endif ?>
            </div>
            <div class="title-container">
                <img src="/wp-content/themes/kinokoszy/assets/images/Group 6.png" alt="">
                <h1>
                    <?php WP_title(" "); ?>
                </h1>

            </div>


        </nav>
    </header>

    <?php



    // <?php if (is_front_page()) {
    //     wp_nav_menu(array('theme_location' => 'kino-nav-menu', 'menu_id' => 'kino-nav-menu'));
    // } else {
    //     wp_nav_menu(array('theme_location' => 'joanna-nav-menu', 'menu_id' => 'joanna-nav-menu'));
    // }
    // 