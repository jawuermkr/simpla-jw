<?php get_header(); ?>
<br/>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="row">
        <div class="col-md-8">
            <article>
                <div>
                    <?php the_content(); ?>
                </div>
            </article>
        </div>
        
    <?php endwhile; endif; ?> 
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>