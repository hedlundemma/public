<?php get_header()?>

<?php if(have_posts() ) : ?>

<div>

    <?php while (have_posts () ) : the_post();



the_title()

?>



    <?php
endwhile;
endif;

?>


    <?php get_footer()?>
</div>