<?php get_header();


//landing page template

while(have_posts()) { //built in WP func
    the_post(); // WP f ?>
    <h2><a href="<?php the_permalink(); ?>"> <?php the_title(); //WP f ?></a></h2>
    <?php the_content(); ?>
    <hr>
<?php }
    get_footer();
?>
