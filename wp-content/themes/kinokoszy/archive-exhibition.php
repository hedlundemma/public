<?php get_header()?>

<?php if(have_posts() ) : ?>

<div>

    <?php while (have_posts () ) : the_post();

the_title();?>

    <?php the_field('paragraph')?>




    <?php
endwhile;
endif;

?>
</div>

<?php get_footer ()?>