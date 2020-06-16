<?php get_header(); ?>
<br/>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="row">
        <div class="col-md-8">
            <article>
                <header>
                    <h1><?php the_title(); ?></h1>
                    <small><?php the_time( get_option('date_format')); ?><a href="#"> <?php the_category(' , '); ?></a></small>
                </header>
                <div>
                    <?php the_content(); ?>
                </div>
                <a><?php the_tags(); ?></a>
            </article>
        </div>
        
    <?php endwhile; endif; ?>
    <div class="col-md-4">
        <?php get_sidebar(); ?>
    </div>
    <div class="col-md-8">
        <hr>
        <?php comments_template(); ?>
    </div>
        
    </div>


<?php get_footer(); ?>