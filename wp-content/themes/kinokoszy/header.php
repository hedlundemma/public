<?php $kino_menu= wp_get_nav_menu_items('kino-nav-menu');
        $joanna_menu = wp_get_nav_menu_items('joanna-nav-menu');

?>

<!DOCTYPE html>


<head>
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>

    <header>
        <nav class="test">
            <!-- <?php if ($kino_menu) foreach ($kino_menu as $link) : ?>
            <a title="<?= $link->title; ?>" class="<?= $current_page_id == $link->object_id ? 'underline' : ''; ?>"
                href="<?= $link->url; ?>"><?= $link->title; ?></a>
            <?php endforeach; ?>
            <?php if ($joanna_menu) foreach ($joanna_menu as $link) : ?>
            <a title="<?= $link->title; ?>" class="<?= $current_page_id == $link->object_id ? 'underline' : ''; ?>"
                href="<?= $link->url; ?>"><?= $link->title; ?></a>
            <?php endforeach; ?> -->

            <?php if( is_front_page() ) { 
            wp_nav_menu(array('theme_location'=>'kino-nav-menu','menu_id'=>'kino-nav-menu'));
         } else { 
            wp_nav_menu(array('theme_location'=>'joanna-nav-menu','menu_id'=>'joanna-nav-menu'));
         } 
         ?>



        </nav>
    </header>