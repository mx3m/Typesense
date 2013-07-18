<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?>
 <div id="sidebar">

    <?php if (!function_exists('dynamic_sidebar') && !dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->


            <div class="sidebar-sub">
                <h2><?php _e('Categories','typesense'); ?></h2>
                <ul>
                     <?php wp_list_categories('title_li='); ?>
                </ul>
            </div>
            
            <div class="sidebar-sub">
                <h2><?php _e('Search','typesense'); ?></h2>
               <?php get_search_form(); ?>
            </div>
        
            <div class="sidebar-sub">
            	<h2><?php _e('Archives','typesense'); ?></h2>
            	<ul>
            		<?php wp_get_archives('type=monthly'); ?>
            	</ul>
            </div>

	<?php endif; ?>

</div>