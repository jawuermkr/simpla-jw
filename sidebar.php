        <aside>
            
            <?php if( is_active_sidebar('main_sidebar') ){
                
                dynamic_sidebar('main_sidebar');  
    
            } else { ?>
                
                <div>
                    <h3><?php _e('Buscar', 'simpla-jw'); ?></h3>
                    
                    <?php get_search_form(); ?>
                </div>
                
            <?php } ?>
            
        </aside>