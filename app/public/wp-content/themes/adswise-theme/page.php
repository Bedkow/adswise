
<?php //page template
get_header();
while(have_posts()) { //built in WP func
    the_post(); // WP f ?>
    <h1>page</h1>
    <h2> <?php the_title(); //WP f ?></h2>
    <?php the_content(); ?>
    
<?php }
get_footer();
?>
