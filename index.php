<?php
get_header();
?>

<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>

        <!-- <h2><?php the_title() ?></h2> -->

        <?php the_content();   ?>
    <?php endwhile;

else :
    echo '<p>There are no posts!</p>';

endif;
?>
<?php
get_footer();
?>