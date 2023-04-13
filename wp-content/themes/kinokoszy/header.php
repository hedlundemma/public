<!DOCTYPE html>
<?php $kino_menu = wp_get_nav_menu_items('kino-nav-menu');
$joanna_menu = wp_get_nav_menu_items('joanna-nav-menu');
$page_id = $wp_query->get_queried_object_id()

?>

<head>
    <title>Kinokoszy</title>
    <meta name="description"
        content="A web page for Kinokoszy and Joanna Helander with their films, mobvies, books and exhibitions">
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>

    <header>
        <nav>
            <div>
                <?php if (is_page('kino') || is_page('kino/contact') || is_page('kino/about') || (get_post_type() == 'film')) : ?>
                <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/headerLogo.png"
                        alt=""></a>
                <?php endif?>
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
                <div class="x-menu">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Xmenu.png" alt="">
                </div>
            </div>
            <div class="dropdown">
                <p>MENU</p>
            </div>
        </nav>
    </header>

    <?php