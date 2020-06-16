<?php get_header(); ?>

<img src="<?php header_image(); ?>" height="100%" width="100%" alt="" />

<div class="row">
    <div class="col-md-6 i wow slideInLeft"><img src="<?php echo get_theme_mod('image-unu', get_template_directory_uri('template_directory').'/img/01.png'); ?>" /></div>
    <div class="col-md-6 i wow slideInRight">
    <h2><?php echo get_theme_mod('image-title', 'Lorem ipsum'); ?></h2>
    <p><?php echo get_theme_mod('image-text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'); ?></p>
    </div>
    <div class="col-md-6 i wow slideInLeft"><img src="<?php echo get_theme_mod('image-du', get_template_directory_uri('template_directory').'/img/02.png'); ?>" /></div>
    <div class="col-md-6 i wow slideInRight">
    <h2><?php echo get_theme_mod('image-title-du', 'Lorem ipsum'); ?></h2>
    <p><?php echo get_theme_mod('image-text-du', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'); ?></p>
    </div>
    <div class="col-md-6 i wow slideInLeft"><img src="<?php echo get_theme_mod('image-tri', get_template_directory_uri('template_directory').'/img/03.png'); ?>" /></div>
    <div class="col-md-6 i wow slideInRight">
    <h2><?php echo get_theme_mod('image-title-tri', 'Lorem ipsum'); ?></h2>
    <p><?php echo get_theme_mod('image-text-tri', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'); ?></p>
    </div>
    <div class="col-md-6 i wow slideInLeft"><img src="<?php echo get_theme_mod('image-kvar', get_template_directory_uri('template_directory').'/img/04.png'); ?>" /></div>
    <div class="col-md-6 i wow slideInRight">
    <h2><?php echo get_theme_mod('image-title-kvar', 'Lorem ipsum'); ?></h2>
    <p><?php echo get_theme_mod('image-text-kvar', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'); ?></p>
    </div>
</div>
<hr>

<h2><?php echo get_theme_mod('blog-name', 'Lorem ipsum'); ?></h2>

<div class="row">
    
    <?php if (have_posts() ) : while(have_posts() ) : the_post(); ?>
    <div class="col-md-4 blog">
        <article>
            <header>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <small><?php the_time( get_option('date_format')); ?><a href="#"> <?php the_category(' , '); ?></a></small>
            </header>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
                <p><?php _e('No hay contenido disponible, por favor realiza una búsqueda.', 'simpla-jw'); ?></p>
                <?php get_search_form(); ?>
            </div>
        </article>
    </div>
    <?php endif; ?>                

    <?php if ( get_next_posts_link() || get_previous_posts_link() ) { ?>

    <div class="col-md-12 as">
        <center>
        <?php next_posts_link(__('&larr; Anteriones', 'simpla-jw')); ?>
        <?php previous_posts_link(__('Siguientes &rarr;', 'simpla-jw')); ?>
        </center>
    </div>

    <?php } ?>

    </div>

<?php get_footer(); ?>