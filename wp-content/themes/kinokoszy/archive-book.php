<?php get_header()?>

<?php if(have_posts() ) : ?>

<div>

    <?php while (have_posts () ) : the_post();

the_title();?>

    <a href="<?php the_permalink();?>">titke</a>

    <?php
endwhile;
endif;

?>



</div>

<?php get_footer ()?>