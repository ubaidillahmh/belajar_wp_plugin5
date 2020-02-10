
<?php 
if(of_get_option('availability') == 'maintenance')
{
    // echo home_url('404', 404);
    wp_redirect( 404 ); exit;
}
get_header(); ?>
<div class="col-sm-8 blog-main">
    
    <?php
    
    if ( have_posts() ) { 
        while ( have_posts() ) : the_post();
    ?>
    <div class="blog-post">
        <h2 class="blog-post-title"><?php the_title(); ?></h2>
        <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
        <?php the_content(); ?>
        <?php
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;
        ?>
    </div><!-- /.blog-post -->
    <?php
        endwhile;
    } 
    ?>

    <nav>
        <ul class="pager">
            <li><?php next_posts_link('Previous'); ?></li>
            <li><?php previous_posts_link('Next'); ?></li>
        </ul>
    </nav>
    
</div><!-- /.blog-main -->

<?php
   get_sidebar(); 
?>

<?php get_footer(); ?>