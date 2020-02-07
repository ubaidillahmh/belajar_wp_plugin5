<?php get_header('child2'); ?>
<div class="col-sm-8 blog-main">
    
    <?php
    if ( of_get_option('limit') )
    {
        $limiti = of_get_option('limit');
        query_posts("showposts=$limiti");
    }
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

        wp_reset_query(  );
    } 
    ?>

    <nav>
        <ul class="pager">
            <li><?php next_posts_link('Previous'); ?></li>
            <li><?php previous_posts_link('Next'); ?></li>
        </ul>
    </nav>

    <?php include('member.php'); ?>
    
</div><!-- /.blog-main -->

<?php
    if(of_get_option('sidebar'))
    {
        get_sidebar(); 
    }
?>

<?php get_footer(); ?>