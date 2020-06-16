<?php get_header(); ?><br/>
<div class="row">
<?php if (have_posts() ) : while(have_posts() ) : the_post(); ?>
    <div class="col-md-4 blog">
        <article>
            <header>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <small><?php the_time( get_option('date_format')); ?><a href="#"> <?php the_category(' , '); ?></a></small>
            </header>
            <div>
                <?php if (has_post_thumbnail() ) { the_post_thumbnail('img-post'); } ?>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>"> <?php _e('Leer más...', 'simpla-jw'); ?></a>
            </div>
        </article>
    </div>
    <?php endwhile; else : ?>
    <div class="col-md-4">
        <article>
            <header>
                <h3><?php _e('No hay contenido disponible', 'simpla-jw'); ?></h3>
            </header>
            <div>
                <p><?php _e('Por favor realiza una búsqueda nueva para encontrar lo que necesitas.', 'simpla-jw'); ?></p>
                <?php get_search_form(); ?>
            </div>
        </article>
    </div>
    <?php endif; ?>
</div>
    <?php if ( get_next_posts_link() || get_previous_posts_link() ) { ?>

    <div class="col-md-12 as">
        <center>
        <?php next_posts_link(__('&larr; Anteriones', 'simpla-jw')); ?>
        <?php previous_posts_link(__('Siguientes &rarr;', 'simpla-jw')); ?>
        </center>
    </div>

    <?php } ?>

<?php get_footer(); ?>