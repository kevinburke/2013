<?php
/*
Template Name: flatui-blogposts
*/
get_header();

?>
<div class="row">
<?php get_sidebar(); ?>
    <div class="span8 offset1 blog-content">
    <h2>All Posts</h2>
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array( 'post_type' => 'post', 'posts_per_page' => 75, 'paged' => $paged );
    $wp_query = new WP_Query($args);
    while ( have_posts() ) : the_post(); ?>
        <p>
        <span style="margin-right: 15px;"><?php echo get_the_date( 'F Y' ) ?></span>
        <a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a>
        </p>
    <?php endwhile; ?>

    <!-- then the pagination links -->
    <?php next_posts_link( '&larr; Older posts', $wp_query ->max_num_pages); ?>
    <?php previous_posts_link( 'Newer posts &rarr;' ); ?>
    </div>
</div>
<?php
get_footer();
?>
