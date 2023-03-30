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
        <nav class="test">
            <div>
                <?php if (is_page('home-kino') || is_page('contact-kino') || is_page('about-kino') || is_page('films')) : ?>
                <?php foreach ($kino_menu as $link) : ?>
                <a title="<?= $link->title; ?>" class="<?= $current_page_id == $link->object_id ? 'underline' : ''; ?>"
                    href="<?= $link->url; ?>"><?= $link->title; ?></a>
                <?php endforeach; ?>


                <?php else : ?>
                <?php foreach ($joanna_menu as $link) : ?>
                <a title="<?= $link->title; ?>" class="<?= $current_page_id == $link->object_id ? 'underline' : ''; ?>"
                    href="<?= $link->url; ?>"><?= $link->title; ?></a>
                <?php endforeach; ?>
                <?php endif ?>
            </div>
            <div>
                <h1><?php WP_title(); ?></h1>
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