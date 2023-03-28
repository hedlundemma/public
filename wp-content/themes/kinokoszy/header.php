<?php $kino_menu= wp_get_nav_menu_items('kino-nav-menu');

?>

<!DOCTYPE html>


<head>
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>

    <header>
        <nav class="test">
            <?php if ($kino_menu) foreach ($kino_menu as $link) : ?>
            <a title="<?= $link->title; ?>" class="<?= $current_page_id == $link->object_id ? 'underline' : ''; ?>"
                href="<?= $link->url; ?>"><?= $link->title; ?></a>
            <?php endforeach; ?>



        </nav>
    </header>