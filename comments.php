<?php if (have_comments() ) { ?>

    <h3><?php comments_number(
        __('No hay comentarios aún', 'simpla-jw'),
        __('Hay un comentarios publicado', 'simpla-jw'),
        __('Hay % comentarios', 'simpla-jw')
    ); ?></h3>

    <ol class="comments"><?php wp_list_comments(); ?></ol>

    <?php paginate_comments_links(); ?>

<?php } ?>

<?php comment_form(); ?>