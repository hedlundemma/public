<!DOCTYPE html>
<?php $kino_menu = wp_get_nav_menu_items('kino-nav-menu');
$joanna_menu = wp_get_nav_menu_items('joanna-nav-menu');
$page_id = $wp_query->get_queried_object_id()


?>

<head>
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>

    <header>
        <nav>
            <div>
                <!-- make this a link to front-page-->
                <a href="http://kino-v5.local/kino/"><img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/headerLogo.png" alt=""></a>
            </div>
            <div class="nav-links-container">


                <?php if (is_page('kino') || is_page('kino/contact') || is_page('kino/about') || (get_post_type() == 'film')) : ?>
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
        </nav>
    </header>

    <?php



    // <?php if (is_front_page()) {
    //     wp_nav_menu(array('theme_location' => 'kino-nav-menu', 'menu_id' => 'kino-nav-menu'));
    // } else {
    //     wp_nav_menu(array('theme_location' => 'joanna-nav-menu', 'menu_id' => 'joanna-nav-menu'));
    // }
    // 