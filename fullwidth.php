<?php 
/*
template name: Ancho Completo 
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="row">
        <div class="col-md-12">
            <article>
                <div>
                    <?php the_content(); ?>
                </div>
            </article>
        </div>
        
    <?php endwhile; endif; ?> 

    </div>
<?php get_footer(); ?>