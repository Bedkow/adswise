
<?php //blogpost template
get_header();
while(have_posts()) { //built in WP func
    the_post(); // WP f ?>
    <h2> <?php the_title(); //WP f ?></h2>
    <?php the_content(); ?>
    
<?php }
get_footer();
?>
